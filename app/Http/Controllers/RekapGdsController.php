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
        $rekapgds = DB::table('rekapgds')->get(); 
        return view('admin/gds/rekapgds/rekapgds', compact('rekapgds')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/gds/rekapgds/createrekapgds');
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
        $rekapgds = DB::table('rekapgds')->get();
        $siswas = DB::table('siswas')->get();

        // Return ke view
        return view('admin.gds.lembargds.lembargds', compact('rekap', 'siswas', 'rekapgds'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Ambil data berdasarkan ID untuk diedit
        $rekap = DB::table('rekapgds')->where('id', $id)->first();
        
        // Return ke view edit dengan data yang sudah ada
        return view('admin/gds/rekapgds/edit', compact('rekap'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            'pj' => 'required|string|max:255',
            'hari' => 'required|string|max:255',
        ]);

        // Update data di tabel
        DB::table('rekapgds')
            ->where('id', $id)
            ->update([
                'pj' => $request->pj,
                'hari' => $request->hari,
                'updated_at' => now(), // Waktu saat ini
            ]);

        // Redirect ke halaman rekap dengan pesan sukses
        return redirect()->route('rekapgds.index')->with('status', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Hapus data berdasarkan ID
        DB::table('rekapgds')->where('id', $id)->delete();

        // Redirect ke halaman rekap dengan pesan sukses
        return redirect()->route('rekapgds.index')->with('status', 'Data berhasil dihapus!');
    }
}
