<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKandidat;
use Illuminate\Support\Facades\Storage;
use DB;

class DataKandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datakandidat = DataKandidat::all();
        return view('/admin/pemilu/datakandidat/datakandidat', ['datakandidat' => $datakandidat]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin/pemilu/datakandidat/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nisn' => 'required|string|max:255',
            'nomor_pasangan_calon' => 'required|string|max:255',
            'nama_pasangan_calon' => 'required|string|max:255',
            'visi_misi' => 'required|string',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload foto jika ada
        $fotoPath = $request->hasFile('foto') ? $request->file('foto')->store('datakandidat', 'public') : null;

        // Simpan data ke dalam database
        DataKandidat::create([
            'nisn' => $request->nisn,
            'nomor_pasangan_calon' => $request->nomor_pasangan_calon,
            'nama_pasangan_calon' => $request->nama_pasangan_calon,
            'visi_misi' => $request->visi_misi,
            'foto' => $fotoPath,
        ]);

        return redirect()->route('datakandidat.index')->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kandidat = DataKandidat::findOrFail($id);
        return view('/admin/pemilu/datakandidat/edit', compact('kandidat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kandidat = DataKandidat::findOrFail($id);

        $request->validate([
            'nisn' => 'required|string|max:255',
            'nomor_pasangan_calon' => 'required|string|max:255',
            'nama_pasangan_calon' => 'required|string|max:255',
            'visi_misi' => 'required|string',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            // Hapus foto lama
            if ($kandidat->foto) {
                Storage::disk('public')->delete($kandidat->foto);
            }
            // Simpan foto baru
            $fotoPath = $request->file('foto')->store('datakandidat', 'public');
            $kandidat->foto = $fotoPath;
        }

        $kandidat->update([
            'nisn' => $request->nisn,
            'nomor_pasangan_calon' => $request->nomor_pasangan_calon,
            'nama_pasangan_calon' => $request->nama_pasangan_calon,
            'visi_misi' => $request->visi_misi,
        ]);

        return redirect()->route('datakandidat.index')->with('status', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $datakandidat = DataKandidat::findOrFail($id);
        
        // Hapus foto dari penyimpanan
        if ($datakandidat->foto) {
            Storage::disk('public')->delete($datakandidat->foto);
        }
        
        $datakandidat->delete();

        return redirect()->route('datakandidat.index')->with('status', 'Data berhasil dihapus');
    }
}
