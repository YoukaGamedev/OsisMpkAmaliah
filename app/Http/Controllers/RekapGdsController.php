<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Pelanggaran;
use App\Models\JadwalGDS;

class RekapGdsController extends Controller
{
    public function index(Request $request)
{
    $tanggal = $request->query('tanggal', date('Y-m-d'));

    // Jika request AJAX atau ingin JSON response
    if ($request->wantsJson() || $request->ajax()) {
        $pelanggarans = Pelanggaran::with('siswa')
            ->whereDate('tanggal_pelanggaran', $tanggal)
            ->get();

        $rekap = $pelanggarans->map(function ($pelanggaran) {
            $attributes = [
                'dasi' => 'Dasi', 
                'kacuk' => 'Kacu',
                'kaos_kaki' => 'Kaos Kaki', 
                    'sabuk' => 'Sabuk', 
                    'nametag' => 'NameTag',
                    'sepatu' => 'Sepatu', 
                    'jas' => 'Jas', 
                    'ring' => 'Ring', 
                    'bros' => 'Bros', 
                    'makeup' => 'Make Up',
                    'telat' => 'Telat', 
                    'ciput' => 'Ciput', 
                    'hijab' => 'Hijab', 
                    'almamater' => 'Almamater'
            ];

            $missingAttributes = [];

            foreach ($attributes as $key => $label) {
                if ($pelanggaran->$key == 0) {
                    $missingAttributes[] = $label;
                }
            }

            return [
                'nama' => $pelanggaran->siswa->nama,
                'kelas' => $pelanggaran->siswa->kelas,
                'missing_attributes' => !empty($missingAttributes) ? $missingAttributes : ['-']
            ];
        });

        return response()->json($rekap);
    }

    // Untuk request biasa (initial load)
    $jadwalgds = JadwalGDS::all();
    $rekapgds = Pelanggaran::with('siswa')
        ->whereDate('tanggal_pelanggaran', $tanggal)
        ->get();

    return view('admin.gds.rekapgds.rekapgds', compact('rekapgds', 'jadwalgds'));
}
}