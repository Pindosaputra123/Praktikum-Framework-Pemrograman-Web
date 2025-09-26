@extends('app')

@section('content')
    <h1>Welcome to Edit Buku page</h1>
    <!-- form untuk mengupdate data buku berdasarkan ID -->
    <form action="/update-buku/{{$buku->id}}" method="post">
        <!-- mencegah serangan csrf -->
        @csrf
        <!-- laravel tidak mendukung method put di form html langsung, override agar jadi method put -->
        @method('PUT')
        <div>
            <label for="">Judul</label>
            <!-- input untuk tabel judul, otomatis terisi dengan judul lama -->
            <input type="text" name="judul" value="{{$buku->judul}}">
        </div>
        <div>
            <label for="">Pengarang</label>
            <!-- input untuk tabel pengarang, otomatis terisi dengan pengarang lama -->
            <input type="text" name="pengarang" value="{{$buku->pengarang}}">
        </div>
        <div>
            <label for="">Penerbit</label>
            <!-- input untuk tabel penerbit, otomatis terisi dengan penerbit lama -->
            <input type="text" name="penerbit" value="{{$buku->penerbit}}">
        </div>
        <div>
            <!-- tombol untuk mengirim form -->
            <button type="submit">Ubah</button>
        </div>
    </form>
@endsection