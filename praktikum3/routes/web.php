<?php

// import BukuController
use App\Http\Controllers\BukuController;
// import HomeController
use App\Http\Controllers\HomeController;
// import Route facade untuk mendefinisikan route di laravel
use Illuminate\Support\Facades\Route;

// jika mengakses url root (/), tampilkan view app.blade.php
Route::get('/', function () {
    return view('app');
});

// jika akses "/home", tampilan view "home.blade.php"
Route::get('/home', function () {
    return view('home');
});

// tampilkan daftar semua buku (panggil method index di BukuController)
Route::get('/buku', [BukuController::class, 'index']);
// tampilkan form tambah buku baru (method create di BukuController)
Route::get('/tambah-buku', [BukuController::class, 'create']);
// simpan data buku baru (method store di BukuController)
Route::post('/simpan-buku', [BukuController::class, 'store']);
// tampilkan form edit buku berdasarkan id (method edit di BukuController)
Route::get('/edit-buku/{id}', [BukuController::class, 'edit']); 
// update data buku berdasarkan id (method update di BukuController)
Route::put('/update-buku/{id}', [BukuController::class, 'update']);
// hapus data buku berdasarkan id (method destroy di BukuController)
Route::delete('/hapus-buku/{id}', [BukuController::class, 'destroy']);