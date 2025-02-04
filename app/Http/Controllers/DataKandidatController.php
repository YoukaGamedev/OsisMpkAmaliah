<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKandidat;

use DB;

class DataKandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datakandidat = DB::table('datakandidat')->get();
        return view('/admin/pemilu/datakandidat',['datakandidat'=>$datakandidat]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin/pemilu/datakandidat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk foto
    ]);

    // Simpan data ke dalam database
    DB::table('datakandidat')->insert([
        'nisn' => $request->nisn,
        'nomor_pasangan_calon' => $request->nomor_pasangan_calon,
        'nama_pasangan_calon' => $request->nama_pasangan_calon,
        'visi_misi' => $request->visi_misi,
        'foto' => $request->file('foto')->store('storage', 'public'),
    ]);

    return redirect('/admin/pemilu/datakandidat')->with('status', 'Data berhasil ditambahkan');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $datakandidat = DataKandidat::findOrFail($id);
        $datakandidat->delete();

        return redirect('/admin/pemilu/datakandidat')-> with('status', 'Data berhasil di hapus');
    }
}
