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

// ===================== HALAMAN UTAMA (REDIRECT OTOMATIS) ===================== //
Route::get('/', function () {
    // Jika sudah login, arahkan ke home
    if (auth()->check()) {
        return redirect('/home');
    }
    // Jika belum login, arahkan ke login
    return redirect('/login');
});

// ===================== ROUTE YANG BUTUH LOGIN ===================== //
Route::middleware(['auth'])->group(function () {

    // Halaman setelah login
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    // CRUD Buku
    Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
    Route::get('/tambah-buku', [BukuController::class, 'create'])->name('buku.create');
    Route::post('/simpan-buku', [BukuController::class, 'store'])->name('buku.store');
    Route::get('/edit-buku/{id}', [BukuController::class, 'edit'])->name('buku.edit');
    Route::put('/update-buku/{id}', [BukuController::class, 'update'])->name('buku.update');
    Route::delete('/hapus-buku/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');
});