<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class DataDptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = User::query();

        // Filter nama
        if ($request->name) {
            $users->where('name', 'like', '%' . $request->name . '%');
        }

        // Filter kelas
        if ($request->kelas) {
            $users->where('kelas', $request->kelas);
        }

        // Filter sekolah
        if ($request->sekolah) {
            $users->where('sekolah', $request->sekolah);
        }

        $users = $users->paginate(40);

        // Ambil daftar kelas & sekolah unik
        $allKelas = User::select('kelas')->distinct()->pluck('kelas');
        $allSekolah = User::select('sekolah')->distinct()->pluck('sekolah');

        return view('admin.pemilu.datadpt.datadpt', compact('users', 'allKelas', 'allSekolah'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pemilu.datadpt.create'); // Menggunakan file view khusus untuk tambah user
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|in:user,admin_osis,admin_pembina',
            'sekolah' => 'required|string|in:A1,A2,Guru',
            'nis' => 'nullable|string|unique:users,nis', // NIS opsional
        ]);


        // Enkripsi password
        $validatedData['password'] = Hash::make($request->password);

        // Simpan user baru
        User::create($validatedData);
        
        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('datadpt.index')->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id); // Cari user berdasarkan ID
        return view('admin.pemilu.datadpt.edit', compact('user')); // Menggunakan view edit khusus
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$id,
            'password' => 'nullable|string|min:8|confirmed',
            'role' => 'required|string|in:user,admin_osis,admin_pembina',
            'sekolah' => 'required|string|in:A1,A2,Guru',
            'nis' => 'nullable|string|unique:users,nis,'.$id, // NIS opsional
        ]);

        $user = User::findOrFail($id); // Cari user berdasarkan ID
        $user->name = $request->name;
        $user->kelas = $request->kelas;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->sekolah = $request->sekolah;
        $user->nis = $request->nis;

        // Hanya update password jika diisi
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('datadpt.index')->with('status', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id); // Cari user berdasarkan ID
        $user->delete(); // Hapus user

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('datadpt.index')->with('status', 'Data berhasil dihapus');
    }
}
