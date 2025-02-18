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
        // Validasi input dengan memastikan bahwa kandidat_id ada di tabel kandidat
        $request->validate([
            'kandidat_id' => 'required|exists:kandidat,id',
        ]);

        // Cek apakah kandidat dengan ID tersebut benar-benar ada
        $kandidat = DataKandidat::find($request->kandidat_id);
        if (!$kandidat) {
            return redirect()->back()->with('error', 'Kandidat tidak ditemukan.');
        }

        // Cek apakah user sudah memilih sebelumnya (opsional)
        $user = Auth::user();
        if (Vote::where('user_id', $user->id)->exists()) {
            return redirect()->back()->with('error', 'Anda sudah memilih!');
        }

        // Simpan vote baru
        Vote::create([
            'kandidat_id' => $request->kandidat_id,
            'user_id' => $user->id,
        ]);

        // Update jumlah suara di hasil pemilihan
        $hasil = HasilPemilihan::where('kandidat_id', $request->kandidat_id)->first();

        if ($hasil) {
            $hasil->increment('jumlah_suara');
        } else {
            HasilPemilihan::create([
                'kandidat_id' => $request->kandidat_id,
                'jumlah_suara' => 1
            ]);
        }

        return redirect()->back()->with('success', 'Vote berhasil dikirim!');
    }
}

