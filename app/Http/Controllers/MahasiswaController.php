<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function profil()
    {
        $nama = 'Abhista Atha';
        $nim = '242520082';
        $prodi = 'Teknologi Informasi';

        return view('mahasiswa.profil', compact('nama', 'nim', 'prodi'));
    }

    public function daftar()
    {
        $mahasiswa = [
            ['nim' => '242520081', 'nama' => 'Aditya Wahyu', 'ipk' => 3.75],
            ['nim' => '242520082', 'nama' => 'Abhista Atha', 'ipk' => 3.85],
            ['nim' => '242520083', 'nama' => 'Fidiqteraya', 'ipk' => 3.20],
            ['nim' => '242520084', 'nama' => 'Dzakwan', 'ipk' => 2.90],
            ['nim' => '242520085', 'nama' => 'Vito', 'ipk' => 1.95],
        ];

        return view('mahasiswa.daftar', compact('mahasiswa'));
    }

    public function detail($nim)
    {
        $dataMahasiswa = [
            ['nim' => '242520081', 'nama' => 'Aditya Wahyu', 'ipk' => 3.75],
            ['nim' => '242520082', 'nama' => 'Abhista Atha', 'ipk' => 3.85],
            ['nim' => '242520083', 'nama' => 'Fidiqteraya', 'ipk' => 3.20],
            ['nim' => '242520084', 'nama' => 'Dzakwan', 'ipk' => 2.90],
            ['nim' => '242520085', 'nama' => 'Vito', 'ipk' => 1.95],
        ];

        // Jika NIM tidak terdaftar, tampilkan error 404
        abort_unless(isset($dataMahasiswa[$nim]), 404);

        $mhs = $dataMahasiswa[$nim];

        return view('mahasiswa.detail', compact('nim', 'mhs'));
    }
}