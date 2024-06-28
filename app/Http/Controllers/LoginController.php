<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $request->validate([
            'username' => 'required|min:5|max:10',
            'password' => 'required|min:8'
        ]);

        $credentials = $request->only('username','password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('main');
        }

        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ])->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/login');
    }

}