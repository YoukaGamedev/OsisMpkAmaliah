<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HasilPemilihan;
use App\Models\DataKandidat;
use App\Models\User;
use DB;

class HasilPemilihanController extends Controller
{
    public function index()
    {
        // Ambil data hasil pemilihan dengan kandidat
        $hasilpemilihan = HasilPemilihan::with('kandidat')->get();
        
        // Hitung total pemilih per sekolah dari tabel users
        $totalPemilihA1 = User::where('sekolah', 'A1', 'Guru')->where('role', 'user')->count();
        $totalPemilihA2 = User::where('sekolah', 'A2', 'Guru')->where('role', 'user')->count();
        
        // Hitung persentase berdasarkan sekolah kandidat
        foreach ($hasilpemilihan as $hasil) {
            $sekolahKandidat = $hasil->kandidat->sekolah;
            
            // Tentukan total pemilih berdasarkan sekolah kandidat
            if ($sekolahKandidat == 'A1') {
                $totalPemilih = $totalPemilihA1;
            } elseif ($sekolahKandidat == 'A2') {
                $totalPemilih = $totalPemilihA2;
            } else {
                $totalPemilih = 0;
            }
            
            // Hitung persentase
            $hasil->persentase = $totalPemilih > 0 ? ($hasil->jumlah_suara / $totalPemilih) * 100 : 0;
            $hasil->total_pemilih = $totalPemilih;
        }

        // Kelompokkan hasil berdasarkan sekolah untuk tampilan
        $hasilA1 = $hasilpemilihan->filter(function($hasil) {
            return $hasil->kandidat->sekolah == 'A1';
        });
        
        $hasilA2 = $hasilpemilihan->filter(function($hasil) {
            return $hasil->kandidat->sekolah == 'A2';
        });

        return view('admin.pemilu.hasilpemilihan', compact('hasilpemilihan', 'hasilA1', 'hasilA2', 'totalPemilihA1', 'totalPemilihA2'));
    }

    public function reset()
    {
        DB::table('hasilpemilihan')->truncate(); // atau delete() jika pakai foreign key
        DB::table('votes')->truncate();

        return redirect()->back()->with('status', 'Data pemilih dan hasil pemilihan berhasil direset.');
    }
}