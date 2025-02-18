<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HasilPemilihan;
use App\Models\Kandidat;

class HasilPemilihanController extends Controller
{
    public function index()
    {
        // Ambil data kandidat beserta jumlah suara
        $hasilpemilihan = HasilPemilihan::with('kandidat')
            ->selectRaw('kandidat_id, SUM(jumlah_suara) as total_suara')
            ->groupBy('kandidat_id')
            ->get();

        $totalVotes = $hasilpemilihan->sum('total_suara');

        // Hitung persentase
        foreach ($hasilpemilihan as $hasil) {
            $hasil->persentase = $totalVotes > 0 ? ($hasil->total_suara / $totalVotes) * 100 : 0;
        }

        return view('admin.pemilu.hasilpemilihan', compact('hasilpemilihan'));
    }
}

