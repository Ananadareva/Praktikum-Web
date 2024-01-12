<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();


        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Email atau Password Salah/ tidak ada.'],
            ]);
        }

        // Kode di bawah ini akan diakses jika autentikasi berhasil
        return $user->createToken('user login')->plainTextToken;
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'message' => 'Logout berhasil'
        ]);
    }



    public function me(Request $request)
    {
        // return $request->user();
        // return response()->json(Auth::user());
        $user = Auth::user()->only(['id', 'username', 'email', 'firstname', 'lastname']);
        return response()->json($user);
    }
}
