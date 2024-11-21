<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntriOrderController extends Controller
{
    public function index() {
        if(auth()->guard('user')->user()->role != 'waiter') {
            return redirect('/dashboard')->with('error', 'Anda tidak mempunyai permission untuk masuk ke halaman Order!');
        }
        return view('entriOrder');
    }
}
