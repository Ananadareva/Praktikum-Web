<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticating(Request $request)
    {
        /* $credentials = $request->validate([
            'email' => ['required', 'email'],
        ]); */

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }


        session()->flash('status', 'gagal');
        session()->flash('message', 'Email tidak terdaftar');


        return redirect()->route('login');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        session()->flush();
        return redirect('login');
    }
}
