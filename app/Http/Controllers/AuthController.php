<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Dashboard;

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
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        $user = Auth::user();

        // Jika admin atau admin_osis diarahkan ke halaman admin pembina
        if ($user->role === 'admin' || $user->role === 'admin_osis') {
            return redirect()->intended('/admin');  // Halaman admin pembina
        } else {
            // Ambil status pemilu
            $dashboard = Dashboard::first();

            if ($dashboard && $dashboard->status_pemilu) {
                return redirect()->intended('user/pemilu/pilihkandidat');
            } else {
                return redirect()->intended('/user');
            }
        }
    }

    return back()->withErrors([
        'email' => 'Akun tidak terdaftar atau password salah.',
    ])->withInput($request->only('email'));
}

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('status', 'Anda telah logout.');
    }
}
