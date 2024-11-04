<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataDpt;

use DB;

class DataDptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datadpt = DB::table('datadpt')->get();
        return view('/admin/datadpt',['datadpt'=>$datadpt]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin/datadpt');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Simpan data ke dalam database
        DB::table('datadpt')->insert([
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'kelas' => $request->kelas,
        ]);
    
        return redirect('/admin/datadpt')->with('status', 'Data berhasil ditambahkan');
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
        $datadpt = DataDpt::findOrFail($id);
        $datadpt->delete();

        return redirect('/admin/datadpt')-> with('status', 'Data berhasil di hapus');
    }
}
