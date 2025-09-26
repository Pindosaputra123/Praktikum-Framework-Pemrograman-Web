<?php

// namespace sesuai struktur folder laravel
namespace App\Http\Controllers;

// import model buku dan class request
use App\Models\Buku;
use Illuminate\Http\Request;

// membuat class BukuController yang extends Controller
class BukuController extends Controller
{
    // method index untuk menampilkan semua data buku
    public function index(){
        $data = Buku::all(); // ambil semua data buku dari tabel buku
        // kirim data ke view buku.blade.php
        return view('buku', compact('data'));
    }

    // method create untuk menampilkan form tambah buku
    public function create(){
        // menampilkan view tambah-buku.blade.php
        return view('tambah-buku');
    }

    // method store untuk menyimpan data buku baru
    public function store(Request $request){
        // validasi input
        $validasi = $request->validate([
            'judul' => 'required|string|max:255',
            'pengarang' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
        ]);

        Buku::create($validasi); // simpan data ke tabel buku
        return redirect('/buku'); // redirect ke halaman daftar buku
    }

    // method edit untuk menampilkan form edit buku
    public function edit($id) {
        // cari data buku berdasarkan id
        $buku = Buku::find($id);
        // tampilkan view edit-buku.blade.php dengan data buku
        return view('edit-buku', compact('buku'));
    }

    // method update untuk memperbarui data buku
    public function update(Request $request, $id) {
        // validasi input
        $validasi = $request->validate([
            'judul' => 'required|string|sometimes|max:255',
            'pengarang' => 'required|string|sometimes|max:255',
            'penerbit' => 'required|string|sometimes|max:255',
        ]);

        // update data buku seuai id
        Buku::where('id', $id)->update($validasi);
        // redirect ke halaman daftar buku
        return redirect('/buku');
    }

    // method destroy untuk menghapus data buku
    public function destroy($id) {
        // hapus data buku sesuai id
        Buku::destroy($id);
        // redirect ke halaman daftar buku
        return redirect('/buku');
    }
}
