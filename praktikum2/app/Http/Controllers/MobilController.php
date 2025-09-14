<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MobilController extends Controller
{
    public function index()
    {
        $mobils = DB::table('mobils')->get();
        return view('mobil.index', compact('mobils'));
    }

    public function show($id)
    {
        $mobil = DB::table('mobils')->find($id);
        return view('mobil.show', compact('mobil'));
    }

    public function create()
    {
        return view('mobil.create');
    }

    public function store(Request $request)
    {
        // simpan ke session (bukan database)
        $mobils = session('mobils', []);

        $newMobil = [
            'id' => count($mobils) + 1,
            'merk' => $request->merk,
            'model' => $request->model,
            'tahun' => $request->tahun,
        ];

        $mobils[] = $newMobil;
        session(['mobils' => $mobils]);

        return redirect('/');
    }
}
