<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntriTransaksiController extends Controller
{
    public function index() {
        if(auth()->guard('user')->user()->role != 'kasir') {
            return redirect('/dashboard')->with('error', 'Anda tidak mempunyai permission untuk masuk ke halaman Transaksi!');
        }
        return view('entriTransaksi');
    }
}
