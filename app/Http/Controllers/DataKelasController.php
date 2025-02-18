<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKelas;
use DB;

class DataKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datakelas = DataKelas::all();
        return view('/admin/pemilu/datakelas/datakelas', ['datakelas' => $datakelas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin/pemilu/datakelas/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kelas' => 'required|string|max:255',
            'no_kelas' => 'required|string|max:255',
        ]);

        DataKelas::create([
            'kelas' => $request->kelas,
            'no_kelas' => $request->no_kelas,
        ]);

        return redirect()->route('datakelas.index')->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kelas = DataKelas::findOrFail($id);
        return view('/admin/pemilu/datakelas/edit', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kelas' => 'required|string|max:255',
            'no_kelas' => 'required|string|max:255',
        ]);

        $kelas = DataKelas::findOrFail($id);
        $kelas->update([
            'kelas' => $request->kelas,
            'no_kelas' => $request->no_kelas,
        ]);

        return redirect()->route('datakelas.index')->with('status', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $datakelas = DataKelas::findOrFail($id);
        $datakelas->delete();

        return redirect()->route('datakelas.index')->with('status', 'Data berhasil dihapus');
    }
}
