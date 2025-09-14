<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobilController;

Route::get('/', [MobilController::class, 'index']); // Page 1
Route::get('/mobil/{id}', [MobilController::class, 'show']); // Page 2
Route::get('/tambah', [MobilController::class, 'create']); // Page 3
Route::post('/tambah', [MobilController::class, 'store']);
