<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Dashboard;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        $dashboard = Dashboard::first();
        $pemiluDimulai = $dashboard ? $dashboard->status_pemilu : false;

        return view('auth.login', compact('pemiluDimulai'));
    }

    public function login(Request $request)
    {
        $dashboard = Dashboard::first();
        $pemiluDimulai = $dashboard ? $dashboard->status_pemilu : false;

        // ================================
        // MODE PEMILU BERLANGSUNG → LOGIN PAKAI NIS SAJA
        // ================================
        if ($pemiluDimulai) {

            $request->validate([
                'nis' => 'required'
            ]);

            $user = User::where('nis', $request->nis)->first();

            if ($user) {
                Auth::login($user); // langsung login tanpa password

                return redirect()->intended('user/pemilu/pilihkandidat');
            }

            return back()->withErrors([
                'nis' => 'NIS tidak ditemukan dalam daftar pemilih.'
            ]);
        }

        // =======================================
        // MODE NORMAL (PEMILU BELUM DIMULAI)
        // Login menggunakan email + password
        // =======================================
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            $user = Auth::user();

            if ($user->role === 'admin_pembina' || $user->role === 'admin_osis') {
                return redirect()->intended('/admin');
            } else {
                return redirect()->intended('/user');
            }
        }

        return back()->withErrors([
            'email' => 'Akun tidak ditemukan atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('status', 'Anda telah logout.');
    }
}
