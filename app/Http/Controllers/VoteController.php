<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;
use App\Models\HasilPemilihan;
use App\Models\DataKandidat; // Pastikan Model Kandidat diimpor
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    
public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'kandidat_id' => 'required|exists:kandidat,id',
    ]);

    // Cek kandidat
    $kandidat = DataKandidat::find($request->kandidat_id);
    if (!$kandidat) {
        return redirect()->back()->with('error', 'Kandidat tidak ditemukan.');
    }

    // Cek apakah user sudah memilih
    $user = Auth::user();
    if (Vote::where('user_id', $user->id)->exists()) {
        return redirect()->route('login')->with('error', 'Anda sudah memilih!');
    }

    // Simpan vote
    Vote::create([
        'kandidat_id' => $request->kandidat_id,
        'user_id' => $user->id,
    ]);

    // Update hasil pemilihan
    $hasil = HasilPemilihan::where('kandidat_id', $request->kandidat_id)->first();

    if ($hasil) {
        $hasil->increment('jumlah_suara');
    } else {
        HasilPemilihan::create([
            'kandidat_id' => $request->kandidat_id,
            'jumlah_suara' => 1
        ]);
    }

    // ✅ Logout otomatis setelah voting
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    // Redirect ke halaman login dengan pesan sukses
    return redirect()->route('login')->with('success', 'Terima kasih! Anda telah berhasil memberikan suara dan telah logout.');
}

}
