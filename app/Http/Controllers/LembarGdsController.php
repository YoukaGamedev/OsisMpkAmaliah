<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RekapGds;
use App\Models\Siswa;



class LembarGdsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data dari tabel siswas dan rekapgds
        $siswa = Siswa::all();
        $rekapgds = RekapGds::all();

        // Mengirim data ke view
        return view('admin.gds.lembargds.lembargds', compact('rekapgds', 'siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gds.lembargds.createlembargds'); // Sesuaikan dengan struktur folder view Anda
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
