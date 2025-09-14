<!DOCTYPE html>
<html>
<head>
    <title>Detail Mobil</title>
</head>
<body>
    <h1>Detail Mobil</h1>
    <p>Merk: {{ $mobil->merk ?? $mobil['merk'] }}</p>
    <p>Model: {{ $mobil->model ?? $mobil['model'] }}</p>
    <p>Tahun: {{ $mobil->tahun ?? $mobil['tahun'] }}</p>
    <a href="/">Kembali</a>
</body>
</html>
