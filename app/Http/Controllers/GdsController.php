<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\JadwalGds; // Tambahkan Model JadwalGds
use DB;
use Carbon\Carbon;

class GdsController extends Controller
{
    public function index(Request $request)
{
    $tanggal = $request->get('tanggal', date('Y-m-d'));

    // Ubah nama hari ke Bahasa Indonesia
    Carbon::setLocale('id'); // Pastikan menggunakan locale Indonesia
    $hari = Carbon::parse($tanggal)->translatedFormat('l'); // Contoh: "Senin", "Selasa"

    // Ambil PJ berdasarkan hari yang sudah diterjemahkan ke Bahasa Indonesia
    $pj = $this->getPJByDay($hari);

    $absensi = Siswa::where('tanggal', $tanggal)->get();
    $siswa = DB::table('siswas')->get();

    return view('admin.gds.indexgds', compact('absensi', 'tanggal', 'pj', 'siswa'));
}

private function getPJByDay($hari)
{
    // Ambil PJ berdasarkan hari dari tabel jadwal_gds
    $jadwal = JadwalGds::where('hari', $hari)->first();

    return $jadwal ? $jadwal->pj : 'Tidak Ada PJ';
}

    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('admin.gds.show', compact('siswa'));
    }
}
