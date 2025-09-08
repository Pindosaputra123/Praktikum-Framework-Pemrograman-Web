<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/route-view', function () {
    $nama = "Pindo Saputra Harmanto";
    $jurusan = "Informatika";

    return view('routeView', compact('nama', 'jurusan'));
});


use App\Http\Controllers\MahasiswaController;

Route::get('/controller-view', [MahasiswaController::class, 'index']);

