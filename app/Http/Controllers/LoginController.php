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

        if (!Auth::attempt($credentials)) {
            return back()->with('mensaje','Credenciales Incorrectas');
        }

        return redirect()->route('main');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/login');
    }

}