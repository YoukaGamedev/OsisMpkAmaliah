<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;

use DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dashboard = DB::table('dashboard')->get();
        return view('/admin/dashboardpemilu',['dashboard'=>$dashboard]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin/dashboard');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('dashboard')->insert([
            'npsn' => $request->npsn,
            'nama_sekolah' => $request->nama_sekolah,
            'nama_kepsek' => $request->nama_kepsek,
            'nip' => $request->nip,
            'alamat_jalan' => $request->alamat_jalan,
            'desa' => $request->desa,
            'kecamatan' => $request->kecamatan,
            'kota' => $request->kota,
            'tahun_pelajaran' => $request->tahun_pelajaran,
            'tanggal' => $request->tanggal,
        ]);
    
        return redirect('/user/home')->with('status', 'Data berhasil ditambahkan');
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
