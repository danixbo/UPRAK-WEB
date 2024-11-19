<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EntriMejaController;
use App\Http\Controllers\EntriBarangController;
use App\Http\Controllers\EntriOrderController;
use App\Http\Controllers\EntriTransaksiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login',[AdminController::class, 'login'])->name('login');
Route::post('login',[AdminController::class, 'cekUser']);
Route::get('logout',[AdminController::class, 'logout'])->name('logout');

Route::middleware('auth:user')->prefix('dashboard')->group(function() {
    Route::get('/', [AdminController::class, 'dashboardAdmin']);
    Route::get('/Meja', [EntriMejaController::class, 'index']);
    Route::get('/Barang', [EntriBarangController::class, 'index']);
    Route::get('/Order', [EntriOrderController::class, 'index']);
    Route::get('/Transaksi', [EntriTransaksiController::class, 'index']);
});
