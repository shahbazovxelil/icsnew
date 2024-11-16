<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {

        return view('backend.Auth.login');

    }

    public function login(Request $request)
    {

        $remember = $request->has('remember');

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            return redirect()->route('backend.dashboard');
        } else {

            return redirect()->route('loginView')->withErrors('Email adresi və ya şifrə yalnışdır');
        }


    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('loginView');
    }

}
