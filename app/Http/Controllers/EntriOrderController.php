<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntriOrderController extends Controller
{
    public function index() {
        return view('entriOrder');
    }
}
