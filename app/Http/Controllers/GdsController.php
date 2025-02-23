<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Siswa;
use DB;

class GdsController extends Controller
{
    public function index(Request $request) {
        $tanggal = $request->input('tanggal', date('Y-m-d'));
        $absensi = Siswa::where('tanggal', $tanggal)->get();
        $siswa = DB::table('siswas')->get(); 


        return view('admin.gds.indexgds', compact('absensi', 'tanggal', 'siswa'));
    }
}
