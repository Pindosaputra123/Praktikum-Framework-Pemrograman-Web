<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\UserController;
use Illuminate\Support\Facades\Route;

// ===================== ROUTE LOGIN & REGISTER ===================== //
Route::get('/login', [UserController::class, 'showLoginForm'])->name('user.login');
Route::post('/login', [UserController::class, 'login'])->name('user.login.submit');
Route::get('/register', [UserController::class, 'showRegisterForm'])->name('user.register');
Route::post('/register', [UserController::class, 'register'])->name('user.register.submit');
Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');

// ===================== ROUTE YANG BUTUH LOGIN ===================== //
Route::middleware(['auth'])->group(function () {

    // halaman utama (setelah login)
    Route::get('/', function () {
        return view('auth.login');
    });

    Route::get('/home', function () {
        return view('home');
    });

    // CRUD Buku
    Route::get('/buku', [BukuController::class, 'index']);
    Route::get('/tambah-buku', [BukuController::class, 'create']);
    Route::post('/simpan-buku', [BukuController::class, 'store']);
    Route::get('/edit-buku/{id}', [BukuController::class, 'edit']);
    Route::put('/update-buku/{id}', [BukuController::class, 'update']);
    Route::delete('/hapus-buku/{id}', [BukuController::class, 'destroy']);
});