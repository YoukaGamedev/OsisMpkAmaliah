<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RekapGds;

use DB;


class RekapGdsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $rekapgds = DB::table('rekapgds')->get(); // Mengambil data dari tabel rekapgds
    return view('admin/gds/rekapgds', compact('rekapgds')); // Kirim variabel ke view
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/gds/createrekapgds');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validasi data
    $request->validate([
        'pj' => 'required|string|max:255',
        'hari' => 'required|string|max:255',
    ]);

    // Simpan data ke tabel
    DB::table('rekapgds')->insert([
        'pj' => $request->pj,
        'hari' => $request->hari,
        'created_at' => now(), // Waktu saat ini
    ]);

    // Redirect ke halaman rekap dengan pesan sukses
    return redirect()->route('rekapgds.index')->with('status', 'Data berhasil ditambahkan!');
}


    /**
     * Display the specified resource.
     */
    public function show($id)
{
    // Ambil data berdasarkan ID
    $rekap = DB::table('rekapgds')->where('id', $id)->first();

    // Ambil data tambahan untuk tabel baru
    $dataBaru = DB::table('rekapgds')->where('pj', $rekap->pj)->get();

    // Return ke view
    return view('admin.gds.lembargds', compact('rekap', 'dataBaru'));
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
        //
    }
}