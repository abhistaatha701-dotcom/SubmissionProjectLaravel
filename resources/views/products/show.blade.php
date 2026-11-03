<!DOCTYPE html>
<html>
<head>
    <title>Detail Jurusan</title>
</head>
<body>

    <h1>Detail Jurusan</h1>

    <p>Kode Jurusan: {{ $jurusan->kode }}</p>

    <p>Nama Jurusan: {{ $jurusan->nama }}</p>

    <p>Dibuat:
        {{ $jurusan->created_at->format('d-m-Y H:i') }}
    </p>

    <a href="{{ url('/jurusan') }}">Kembali</a>

</body>
</html>
