<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggaran;
use App\Models\Siswa;
use App\Models\JadwalGds;
use Carbon\Carbon;

class GdsController extends Controller
{
    public function index(Request $request)
    {
        // Ambil tanggal dari request atau default hari ini
        $tanggal = $request->input('tanggal', Carbon::now()->toDateString());

        // Set bahasa ke Indonesia
        Carbon::setLocale('id');

        // Terjemahkan hari dari tanggal
        $hari = Carbon::parse($tanggal)->translatedFormat('l');

        // Ambil nama PJ dari tabel jadwal_gds berdasarkan hari
        $pj = $this->getPJByDay($hari);

        // Ambil data pelanggaran berdasarkan tanggal
        $absensi = Pelanggaran::where('tanggal_pelanggaran', $tanggal)
            ->join('siswas', 'pelanggaran.siswa_id', '=', 'siswas.id')
            ->get([
                'siswas.id', 
                'siswas.nama', 
                'siswas.kelas', 
                'pelanggaran.dasi', 
                'pelanggaran.kacuk', 
                'pelanggaran.kaos_kaki', 
                'pelanggaran.sabuk', 
                'pelanggaran.nametag', 
                'pelanggaran.sepatu', 
                'pelanggaran.jas', 
                'pelanggaran.ring', 
                'pelanggaran.bros', 
                'pelanggaran.makeup', 
                'pelanggaran.telat', 
                'pelanggaran.ciput', 
                'pelanggaran.hijab', 
                'pelanggaran.almamater', 
            ]);

        // Kirim ke view
        return view('user.gds.indexgds', compact('absensi', 'tanggal', 'pj'));

    }

    private function getPJByDay($hari)
    {
        // Cari PJ di tabel jadwal_gds berdasarkan hari
        $jadwal = JadwalGds::where('hari', $hari)->first();
        return $jadwal ? $jadwal->pj : 'Tidak Ada PJ';
    }
}
