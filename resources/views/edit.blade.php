<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('update', $buku->id)}}" method="POST">
        @method('PUT')
        @csrf
        <input type="text" name="judul" placeholder="masukkan judul" value="{{ old('judul', $buku->judul) }}">
        @error('judul')
            {{ $message }}
        @enderror

        <input type="text" name="penulis" placeholder="masukkan penulis" value="{{ old('penulis', $buku->penulis) }}">
        @error('penulis')
            {{ $message }}
        @enderror

        <input type="text" name="penerbit" placeholder="masukkan penerbit" value="{{ old('penerbit', $buku->penerbit) }}">
        @error('penerbit')
            {{ $message }}
        @enderror

        <input type="text" name="sinopsis" placeholder="masukkan sinopsis" value="{{ old('sinopsis', $buku->sinopsis) }}">
        @error('sinopsis')
            {{ $message }}
        @enderror

        <input type="date" name="tahun" placeholder="masukkan tahun" value="{{ old('tahun', $buku->tahun) }}">
        @error('tahun')
            {{ $message }}
        @enderror

        <input type="number" name="stok" placeholder="masukkan stok" value="{{ old('stok', $buku->stok) }}">
        @error('stok')
            {{ $message }}
        @enderror

        <select name="status">
            <option value="Tersedia">Tersedia</option>
            <option value="Tidak Tersedia">Tidak Tersedia</option>
        </select>
        @error('status')
            {{ $message }}
        @enderror

        <input type="submit" value="simpan">
    </form>
</body>
</html>
