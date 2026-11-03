
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Jurusan</title>
</head>
<body>

    <h1>Daftar Jurusan</h1>

    <table border="1" cellpadding="6">
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Jurusan</th>
            <th>Dibuat</th>
            <th>Aksi</th>
        </tr>

        @forelse ($jurusans as $j)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $j->kode }}</td>
                <td>{{ $j->nama }}</td>
                <td>{{ $j->created_at->format('d-m-Y H:i') }}</td>

                <td>
                    <a href="{{ url('/jurusan/' . $j->id) }}">
                        Detail
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data.</td>
            </tr>
        @endforelse

    </table>

</body>
</html>
