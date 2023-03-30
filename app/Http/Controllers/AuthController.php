<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index_login() {
        return view('dasboard.login_user');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'nik' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->level == "Karyawan") {
                return redirect()->intended('/karyawan');
            }

            if ($user->level == "Pengguna") {
                return redirect()->intended('/');
            }

            return back()->withErrors([
                'roles' => 'anda tidak punya roles.',
            ]);
        }

        return back()->withErrors([
            'login' => 'nik atau password tidak cocok.',
        ]);
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
