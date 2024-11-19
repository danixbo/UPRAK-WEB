<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntriBarangController extends Controller
{
    public function index() {
        return view('entriBarang');
    }
}
