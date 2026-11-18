<!DOCTYPE html>
<html>
<head>
    <title>Tambah Jurusan</title>
</head>
<body>

    <h1>Tambah Data Jurusan</h1>

    <form action="{{ route('jurusan.store') }}" method="POST">
        @csrf

        <label>Kode Jurusan</label>
        <input type="text" name="kode"
            value="{{ old('kode') }}">
        @error('kode')
            <span style="color:red">{{ $message }}</span>
        @enderror

        <br>

        <label>Nama Jurusan</label>
        <input type="text" name="nama"
            value="{{ old('nama') }}">
        @error('nama')
            <span style="color:red">{{ $message }}</span>
        @enderror

        <br>

        <button type="submit">Simpan</button>
        <a href="{{ route('jurusan.index') }}">Kembali</a>

    </form>

</body>
</html>
