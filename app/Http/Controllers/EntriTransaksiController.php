<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntriTransaksiController extends Controller
{
    public function index() {
        return view('entriTransaksi');
    }
}
