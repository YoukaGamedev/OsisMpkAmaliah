<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use DB;

class TambahDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Siswa::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('nama', 'like', "%$search%")
                  ->orWhere('kelas', 'like', "%$search%");
        }

        $siswa = $query->get();
        return view('admin.gds.tambahdata.index', compact('siswa')); 
    }

    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('admin.gds.tambahdata.show', compact('siswa'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gds.tambahdata.tambahdata');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal' => 'nullable|date',
            'kelas' => 'required|string|max:50',
            'dasi_kacu' => 'required|boolean',
            'kaos_kaki' => 'required|boolean',
            'sabuk' => 'required|boolean',
            'nametag' => 'required|boolean',
            'sepatu' => 'required|boolean',
            'jas' => 'required|boolean',
            'ring' => 'required|boolean',
            'bros' => 'required|boolean',
            'makeup' => 'required|boolean',
            'telat' => 'required|boolean',
            'ciput' => 'required|boolean',
            'hijab' => 'required|boolean',
            'almamater' => 'required|boolean',
            'wearpack' => 'required|boolean',
        ]);

        Siswa::create($request->all());

        return redirect()->route('tambahdata.index')->with('status', 'Data berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('admin.gds.tambahdata.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal' => 'nullable|date',
            'kelas' => 'required|string|max:50',
            'dasi_kacu' => 'required|boolean',
            'kaos_kaki' => 'required|boolean',
            'sabuk' => 'required|boolean',
            'nametag' => 'required|boolean',
            'sepatu' => 'required|boolean',
            'jas' => 'required|boolean',
            'ring' => 'required|boolean',
            'bros' => 'required|boolean',
            'makeup' => 'required|boolean',
            'telat' => 'required|boolean',
            'ciput' => 'required|boolean',
            'hijab' => 'required|boolean',
            'almamater' => 'required|boolean',
            'wearpack' => 'required|boolean',
        ]);

        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all());

        return redirect()->route('tambahdata.index')->with('status', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('tambahdata.index')->with('status', 'Data berhasil dihapus!');
    }
}
