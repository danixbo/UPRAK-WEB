<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index() {
        if(auth()->guard('user')->user()->role != 'owner' && auth()->guard('user')->user()->role != 'kasir' && auth()->guard('user')->user()->role != 'waiter') {
            return redirect('/dashboard')->with('error', 'Anda tidak mempunyai permission untuk masuk ke halaman Barang!');
        }
        return view('generateLaporan');
    }
}
