{{-- menggunakan layout utama "app.blade.php" --}}
@extends('app')

{{-- mengisi section "content" pada layout --}}
@section('content')
    <h1>Welcome to Buku page</h1>
    <div>
        <a href="/tambah-buku"><button>Tambah buku</button></a>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <!--  cek apakah data ada atau tidak ---->
            @if ($data == 'null')
                <!-- jika variabel $data kosong, tampilkan pesan ini -->
                <td>Tidak ada data</td>
            @else
                <!-- jika variabel $data ada isinya, lakukan looping untuk menampilkan buku -->
                @foreach ($data as $buku)
                    <tr>
                        <td>{{ $buku->judul }}</td>
                        <td>{{ $buku->pengarang }}</td>
                        <td>{{ $buku->penerbit }}</td>
                        <td>
                            <!-- tombol untuk mengedit data buku berdasarkan ID -->
                            <a href="/edit-buku/{{ $buku->id }}"><button>Edit</button></a>
                            <form action="/hapus-buku/{{ $buku->id }}" method="post" style="display:inline;"
                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                <!-- token csrf agar aman dari serangan csrf -->
                                @csrf

                                <!-- mengubah method post menjadi delete -->
                                @method('DELETE')
                                <button type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
