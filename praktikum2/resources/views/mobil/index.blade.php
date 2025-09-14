<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mobil</title>
</head>
<body>
    <h1>Daftar Mobil</h1>
    <a href="/tambah">+ Tambah Mobil</a>
    <ul>
        @foreach($mobils as $mobil)
            <li>
                <a href="/mobil/{{ $mobil->id }}">
                    {{ $mobil->merk }} - {{ $mobil->model }} ({{ $mobil->tahun }})
                </a>
            </li>
        @endforeach

        {{-- Mobil tambahan dari session --}}
        @if(session('mobils'))
            @foreach(session('mobils') as $mobil)
                <li>
                    <a href="/mobil/{{ $mobil['id'] }}">
                        {{ $mobil['merk'] }} - {{ $mobil['model'] }} ({{ $mobil['tahun'] }})
                    </a>
                </li>
            @endforeach
        @endif
    </ul>
</body>
</html>
