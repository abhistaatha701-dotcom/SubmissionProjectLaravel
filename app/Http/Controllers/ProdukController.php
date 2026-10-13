<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        @forelse ($produk as $p)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p['nama'] }}</td>
            <td>Rp {{ number_format($p['harga'], 0, ',', '.') }}</td>
            <td>{{ $p['stok'] }}</td>
            <td><a href="{{ route('produk.show', $p['id']) }}">Detail</a></td>
        </tr>
        @empty
        <tr>
            <td colspan="5">Belum ada produk.</td>
        </tr>
        @endforelse
    </table>
</body>
</html>