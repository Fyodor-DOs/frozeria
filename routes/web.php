<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController; 
use App\Http\Controllers\BarangController;

Route::get('/', [BarangController::class, 'index'])->name('dashboard');
Route::resource('barang', BarangController::class);
Route::resource('kategori', KategoriController::class);
Route::get('/bantuan', function () {
    return view('bantuan.index');
})->name('bantuan.index');