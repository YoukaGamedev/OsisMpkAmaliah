<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    protected function authenticated(Request $request, $user)
    {
        // Periksa apakah ada kandidat yang dipilih sebelumnya di sesi
        if (session()->has('selected_kandidat')) {
            // Ambil kandidat yang dipilih dari sesi
            $kandidatId = session('selected_kandidat');
            session()->forget('selected_kandidat'); // Hapus data dari sesi
            return redirect()->route('vote.store', $kandidatId);
        }

        // Jika tidak ada kandidat di sesi, arahkan ke dashboard atau halaman default
        return redirect()->intended('/home');
    }
}
