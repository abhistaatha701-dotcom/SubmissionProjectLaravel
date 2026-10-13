@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
    <h1>Detail Mahasiswa</h1>
    <p>NIM: {{ $nim }}</p>
    <p>Nama: {{ $mhs['nama'] }}</p>
    <p>Prodi: {{ $mhs['prodi'] }}</p>
    <p>IPK: {{ $mhs['ipk'] }}</p>
    <br>
    <a href="{{ route('mahasiswa.daftar') }}">Kembali ke Daftar</a>
@endsection