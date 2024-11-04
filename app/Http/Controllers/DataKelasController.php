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
        $datakelas = DB::table('datakelas')->get();
        return view('/admin/datakelas',['datakelas'=>$datakelas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin/datakelas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('datakelas')->insert([
            'kelas' => $request -> kelas,
            'no_kelas' => $request-> no_kelas,
        ]);

        return redirect('/admin/datakelas') -> with('status','Data berhasil di tambah');
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
        $datakelas = DataKelas::findOrFail($id);
        $datakelas->delete();

        return redirect('/admin/datakelas')-> with('status', 'Data berhasil di hapus');
    }
}
