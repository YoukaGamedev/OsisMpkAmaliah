<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    protected function authenticated(Request $request, $user)
{
    if (session()->has('selected_kandidat')) {
        return redirect()->route('after-login-vote');
    }

    return redirect()->intended($this->redirectPath());
}

}
