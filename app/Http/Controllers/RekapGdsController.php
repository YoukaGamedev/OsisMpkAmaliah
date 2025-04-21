<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RekapGds;
use App\Models\Siswa;
use App\Models\JadwalGDS;
use DB;


class RekapGdsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tanggal = $request->query('tanggal');

        if ($tanggal) {
            $rekap = Siswa::whereDate('tanggal', $tanggal)
                ->select('id', 'nama', 'kelas', 'dasi_kacu', 'kaos_kaki', 'sabuk', 'nametag', 'sepatu', 'jas', 'ring', 'bros', 'makeup', 'telat', 'ciput', 'hijab', 'almamater', 'wearpack')
                ->get();

            return response()->json($rekap);
        }

        $jadwalgds = JadwalGDS::all();

        $rekapgds = Siswa::select('id', 'nama', 'kelas', 'dasi_kacu', 'kaos_kaki', 'sabuk', 'nametag', 'sepatu', 'jas', 'ring', 'bros', 'makeup', 'telat', 'ciput', 'hijab', 'almamater', 'wearpack')->get();
        return view('admin.gds.rekapgds.rekapgds', compact('rekapgds','jadwalgds'));
    }

    


}
