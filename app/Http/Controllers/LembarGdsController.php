<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class LembarGdsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa::all();
        return view('admin.gds.lembargds.lembargds', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gds.lembargds.createlembargds');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:50',
        ]);

        Siswa::create([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
        ]);

        return redirect()->route('lembargds.index')->with('status', 'Data siswa berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('admin.gds.lembargds.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal' => 'required|date',
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
    
        return redirect()->route('gds.index')->with('success', 'Data siswa berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('lembargds.index')->with('status', 'Data siswa berhasil dihapus!');
    }
}