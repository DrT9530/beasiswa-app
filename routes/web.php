<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftarController; // <-- Tambahkan baris ini

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

// Rute untuk menangani pengiriman form (POST)
Route::post('/daftar', [PendaftarController::class, 'store']);
Route::post('/pendaftaran', [PendaftarController::class, 'store'])->name('simpan.pendaftaran');