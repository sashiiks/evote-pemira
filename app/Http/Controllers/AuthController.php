<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function index()
    {
        return view('auth.login');
    }


    function login(Request $request)
    {
        $request->validate([
            'nim' => 'required|max:30',
            'password' => 'required|min:8',
        ], [
            'nim.required' => 'nim harus diisi',
            'password.required' => 'Password harus diisi'
        ]);
        $infologin = [
            'nim' => $request->nim,
            'password' => $request->password,
        ];
        if (Auth::attempt($infologin)) {
            if (Auth::user()->level == 'admin') {
                return redirect('/adminpemira');
            } elseif (Auth::user()->level == 'user') {
                return redirect('/pemirauser');
            }
        } else {
            return redirect('')->withErrors('Username atau Password salah')->withInput();
        }
    }


    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
