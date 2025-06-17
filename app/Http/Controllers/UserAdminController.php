<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserAdminController extends Controller
{
    /**
     * Menampilkan daftar user (admin & user biasa).
     */
    public function index(Request $request)
    {
        $query = User::query();

        // Filter pencarian berdasarkan nama
        if ($request->has('name') && $request->input('name') != '') {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        // Menggunakan pagination agar lebih optimal
        $users = $query->paginate(10);

        return view('admin.useradmin.index', compact('users'));
    }

    /**
     * Menampilkan form untuk menambahkan user baru.
     */
    public function create()
    {
        return view('admin.useradmin.create'); // View khusus untuk tambah user
    }

    /**
     * Menyimpan user baru ke database.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:8|confirmed', // Pastikan password dikonfirmasi
            'role' => 'required|string|in:user,admin_osis,admin_pembina', // Validasi role
            'kepengurusan' => 'nullable|string', // Kepengurusan opsional
            'sekolah' => 'required|string|in:A1,A2', // Validasi sekolah
        ]);

        // Enkripsi password sebelum disimpan
        $validatedData['password'] = Hash::make($request->password);

        // Simpan user baru
        User::create($validatedData);

        return redirect()->route('useradmin.index')->with('status', 'User berhasil ditambahkan');
    }

    /**
     * Menampilkan form untuk edit user.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id); // Cari user berdasarkan ID
        return view('admin.useradmin.edit', compact('user')); // View edit khusus
    }

    /**
     * Memperbarui data user di database.
     */
  public function update(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email,' . $id,
        'password' => 'nullable|string|min:8|confirmed', // ← ubah jadi nullable
        'role' => 'required|string|in:user,admin_osis,admin_pembina',
        'sekolah' => 'required|string|in:A1,A2',
        'kepengurusan' => 'nullable|string', // ← tambahkan validasi 
    ]);

    $user = User::findOrFail($id);
    $user->name = $request->name;
    $user->email = $request->email;
    $user->sekolah = $request->sekolah;
    $user->role = $request->role;
    $user->kepengurusan = $request->kepengurusan; 

    if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
    }

    $user->save();

    return redirect()->route('useradmin.index')->with('status', 'User berhasil diperbarui');
}

    /**
     * Menghapus user dari database.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete(); // Hapus user

        return redirect()->route('useradmin.index')->with('status', 'User berhasil dihapus');
    }
}
