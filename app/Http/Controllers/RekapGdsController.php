<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\JadwalGDS;
use App\Models\Pelanggaran;

class RekapGdsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tanggal = $request->query('tanggal');

        if ($tanggal) {
            // Ambil data siswa dan pelanggaran pada tanggal tertentu
            $rekap = Siswa::whereHas('pelanggarans', function ($query) use ($tanggal) {
                    $query->whereDate('tanggal_pelanggaran', $tanggal);
                })
                ->with(['pelanggarans' => function ($query) use ($tanggal) {
                    $query->whereDate('tanggal_pelanggaran', $tanggal);
                }])
                ->get();

            return response()->json($rekap);
        }

        // Ambil semua jadwal GDS
        $jadwalgds = JadwalGDS::all();

        // Ambil semua siswa beserta pelanggarannya
        $rekapgds = Pelanggaran::with('siswa')->get();

        return view('admin.gds.rekapgds.rekapgds', compact('rekapgds', 'jadwalgds'));
    }
}

