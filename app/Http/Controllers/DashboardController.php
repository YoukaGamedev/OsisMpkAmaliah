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
        return view('/admin/pemilu/dashboardpemilu/dashboardpemilu', ['dashboard' => $dashboard]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboardpemilu');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // VALIDASI DATA
        $request->validate([
            'npsn' => 'required|numeric|digits:8',
            'nama_sekolah' => 'required|string|max:255',
            'nama_kepsek' => 'required|string|max:255',
            'alamat_jalan' => 'required|string|max:255',
            'desa' => 'required|string|max:100',
            'kecamatan' => 'required|string|max:100',
            'kota' => 'required|string|max:100',
            'tahun_pelajaran' => 'required|string|regex:/^\d{4}\/\d{4}$/',
            'tanggal' => 'required|date',
        ]);

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

        return redirect('dashboardpemilu')->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dashboard = DB::table('dashboard')->where('id', $id)->first();
        return view('dashboardpemilu.show', ['dashboard' => $dashboard]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dashboard = DB::table('dashboard')->where('id', $id)->first();
        return view('/admin/pemilu/dashboardpemilu/edit', ['dashboard' => $dashboard]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // VALIDASI DATA
        $request->validate([
            'npsn' => 'required|numeric|digits:8',
            'nama_sekolah' => 'required|string|max:255',
            'nama_kepsek' => 'required|string|max:255',
            'alamat_jalan' => 'required|string|max:255',
            'desa' => 'required|string|max:100',
            'kecamatan' => 'required|string|max:100',
            'kota' => 'required|string|max:100',
            'tahun_pelajaran' => 'required|string|regex:/^\d{4}\/\d{4}$/',
            'tanggal' => 'required|date',
        ]);

        DB::table('dashboard')->where('id', $id)->update([
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

        return redirect('dashboardpemilu')->with('status', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('dashboard')->where('id', $id)->delete();
        return redirect('dashboardpemilu')->with('status', 'Data berhasil dihapus');
    }
}

