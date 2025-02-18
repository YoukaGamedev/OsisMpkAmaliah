<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); 
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Ambil role pengguna yang sedang login
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->intended('/admin');
            } else {
                return redirect()->intended('/user/welcome');
            }
        }

        return back()->withErrors([
            'email' => 'error', 'Akun tidak terdaftar.',
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
