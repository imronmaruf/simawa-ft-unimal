<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->level == '1' || $user->level == '2') {
                return redirect()->intended('dashboard');
            }
        }
        $title = 'Login';
        return view('auth.login', compact('title'));
    }


    public function authenticate(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ],
            [
                'email.required' => 'Email harus diisi',
                'password.required' => 'Password harus diisi'
            ]
        );

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->role == '1') {
                return redirect()->intended('dashboard');
            } elseif ($user->role == '2') {
                return redirect()->intended('admin/dashboard');
            }
        }

        return back()->withErrors([
            'records' => 'Email atau Password Salah',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
