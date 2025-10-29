<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;
use App\Models\HasilPemilihan;
use App\Models\DataKandidat;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'kandidat_id' => 'required|exists:kandidat,id',
        ]);

        // Ambil kandidat
        $kandidat = DataKandidat::find($request->kandidat_id);
        if (!$kandidat) {
            return redirect()->back()->with('error', 'Kandidat tidak ditemukan.');
        }

        $user = Auth::user();
        $isGuru = $user->sekolah === 'Guru'; // Pastikan ada kolom role di tabel users
        $jumlahVote = Vote::where('user_id', $user->id)->count();

        // 🔹 Logika batas voting
        if ($isGuru) {
            // Guru hanya bisa vote maksimal 2x untuk sekolah berbeda
            if ($jumlahVote >= 2) {
                return redirect()->back()->with('error', 'Anda sudah menggunakan semua kesempatan memilih (2 kali).');
            }

            // Cek apakah guru sudah memilih sekolah ini
            $sudahMemilihSekolahIni = Vote::where('user_id', $user->id)
                ->whereHas('kandidat', function ($q) use ($kandidat) {
                    $q->where('sekolah', $kandidat->sekolah);
                })
                ->exists();

            if ($sudahMemilihSekolahIni) {
                return redirect()->back()->with('error', 'Anda sudah memilih kandidat dari sekolah ini.');
            }

        } else {
            // Siswa hanya bisa 1x
            if ($jumlahVote > 0) {
                return redirect()->back()->with('error', 'Anda sudah memilih!');
            }

            // Pastikan siswa memilih dari sekolahnya sendiri
            // if ($user->sekolah !== $kandidat->sekolah) {
            //     return redirect()->back()->with('error', 'Anda hanya bisa memilih kandidat dari sekolah Anda.');
            // }
        }

        // ✅ Simpan vote
        $vote = new Vote();
        $vote->user_id = $user->id;
        $vote->kandidat_id = $kandidat->id;
        $vote->save();

        // ✅ Update hasil pemilihan
        $hasil = HasilPemilihan::firstOrNew(['kandidat_id' => $kandidat->id]);
        $hasil->jumlah_suara = ($hasil->jumlah_suara ?? 0) + 1;
        $hasil->save();

        // 🔸 Jika guru sudah 2 kali vote -> logout otomatis
        if ($isGuru && $jumlahVote + 1 >= 2) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('login')->with('success', 'Terima kasih! Anda telah menyelesaikan 2 kali voting dan telah logout otomatis.');
        }

        // 🔸 Jika siswa -> logout setelah 1 kali vote
        if (!$isGuru) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('login')->with('success', 'Terima kasih! Suara Anda telah tercatat.');
        }

        // Jika guru masih punya 1 kesempatan lagi (belum 2 kali)
        return redirect()->back()->with('success', 'Suara Anda telah tercatat. Anda masih memiliki 1 kesempatan voting lagi.');
    }
}
