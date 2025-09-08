<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $nama = "Siti Fatimah";
        $jurusan = "Akuntansi";

        return view('controllerView', compact('nama', 'jurusan'));
    }
}
