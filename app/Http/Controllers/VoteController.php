<?php

namespace App\Http\Controllers;

use App\Models\Datakandidat;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $kandidatId)
    {
        // Cek apakah pengguna login
        if (!Auth::check()) {
            // Simpan kandidat yang dipilih di sesi dan arahkan ke login
            session(['selected_kandidat' => $kandidatId]);
            return redirect()->route('login');
        }

        $siswa = Auth::user(); // Mengambil siswa yang login

        // Ambil kandidat yang dipilih
        $kandidat = Datakandidat::find($kandidatId);

        // Pastikan data kandidat ada dan pengguna belum pernah voting sebelumnya
        if (!$kandidat || Vote::where('datadpt_id', $siswa->id)->exists()) {
            return redirect()->back()->with('error', 'Kandidat tidak ditemukan atau Anda sudah pernah voting!');
        }

        // Simpan vote ke database
        Vote::create([
            'datadpt_id' => $siswa->id,
            'datakandidat_id' => $kandidatId,
        ]);

        // Logout pengguna setelah voting berhasil
        Auth::logout();

        return redirect()->route('login')->with('success', 'Voting berhasil dan Anda telah logout.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
