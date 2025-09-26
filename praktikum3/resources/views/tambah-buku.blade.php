@extends('app')

@section('content')
    <h1>Welcome to Tambah Buku page</h1>

    <!-- form untuk menambahkan buku baru -->
    <!-- action → mengarah ke route "/simpan-buku" (fungsi store di BukuController) -->
    <!-- method → POST (karena menambah data baru) -->
    <form action="/simpan-buku" method="post">
        @csrf
        <div>
            <label for="">Judul</label>
            <input type="text" name="judul">
        </div>
        <div>
            <label for="">Pengarang</label>
            <input type="text" name="pengarang">
        </div>
        <div>
            <label for="">Penerbit</label>
            <input type="text" name="penerbit">
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
@endsection