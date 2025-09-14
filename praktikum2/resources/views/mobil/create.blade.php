<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mobil</title>
</head>
<body>
    <h1>Tambah Mobil</h1>
    <form action="/tambah" method="post">
        @csrf
        <label>Merk:</label><br>
        <input type="text" name="merk"><br>
        <label>Model:</label><br>
        <input type="text" name="model"><br>
        <label>Tahun:</label><br>
        <input type="number" name="tahun"><br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
