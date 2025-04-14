<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HasilPemilihan;
use App\Models\DataKandidat;

use DB;

class HasilPemilihanController extends Controller
{
    public function index()
    {
        // Ambil data hasil pemilihan dan jumlah suara setiap kandidat
        $hasilpemilihan = HasilPemilihan::with('kandidat')->get();
        
        $totalVotes = $hasilpemilihan->sum('jumlah_suara');

        // Hitung persentase suara
        foreach ($hasilpemilihan as $hasil) {
            $hasil->persentase = $totalVotes > 0 ? ($hasil->jumlah_suara / $totalVotes) * 100 : 0;
        }

        return view('admin.pemilu.hasilpemilihan', compact('hasilpemilihan'));
    }

    public function reset()
{
    DB::table('hasilpemilihan')->truncate(); // atau delete() jika pakai foreign key

    DB::table('votes')->truncate();

    return redirect()->back()->with('status', 'Data pemilih dan hasil pemilihan berhasil direset.');
}


}


