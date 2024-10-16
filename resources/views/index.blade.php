<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <H1>halaman awal</H1>
    <a href="{{ route('create') }}">Tambah+</a>
    <table>
        <thead>
            <tr>
                <th>judul</th>
                <th>penulis</th>
                <th>penerbit</th>
                <th>sinopsis</th>
                <th>tahun</th>
                <th>stok</th>
                <th>status</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $dt)
                <tr>
                    <td>{{ $dt->judul }}</td>
                    <td>{{ $dt->penulis->nama }}</td>
                    <td>{{ $dt->penerbit }}</td>
                    <td>{{ $dt->sinopsis }}</td>
                    <td>{{ $dt->tahun }}</td>
                    <td>{{ $dt->stok }}</td>
                    <td>{{ $dt->status }}</td>
                    <td>
                        <a href="{{ route('edit', $dt->id) }}">edit</a>
                        <form action="{{ route('destroy', $dt->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button>hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
