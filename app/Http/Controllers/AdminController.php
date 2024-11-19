<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login() {
        return view('login');
    }

    public function cekUser(Request $request) {
        $request->validate([
            'username'=>'required',
            'password'=>'required',
        ]);

        $request->session()->regenerate();
        $data_user = $request->only(['username','password']);

        if(auth()->guard('user')->attempt($data_user)){
            $user = auth()->guard('user')->user();
            $request->session()->put('user', $user);
            $request->session()->put('role', $user->role);
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    public function logout(Request $request) {
        auth()->guard('user')->logout();
        $request->session()->invalidate();
        return redirect('/login');
    }
}
