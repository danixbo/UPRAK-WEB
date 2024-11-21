<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntriMejaController extends Controller
{
    
    public function index() {
        if(auth()->guard('user')->user()->role != 'admin') {
            return redirect('/dashboard')->with('error', 'Anda tidak mempunyai permission untuk masuk ke halaman Meja!');
        }
        return view('entriMeja');
    }
}
