<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('store')}}" method="POST">
        @method('POST')
        @csrf
        <input type="text" name="judul" placeholder="masukkan judul">
        <input type="text" name="penulis" placeholder="masukkan judul">
        <input type="text" name="penerbit" placeholder="masukkan judul">
        <input type="text" name="sinopsis" placeholder="masukkan judul">
        <input type="date" name="tahun" placeholder="masukkan judul">
        <input type="number" name="stok" placeholder="masukkan judul">
        <select name="status">
            <option value="Tersedia">Tersedia</option>
            <option value="Tidak Tersedia">Tidak Tersedia</option>
        </select>
        <input type="submit" value="simpan">
    </form>
</body>
</html>
