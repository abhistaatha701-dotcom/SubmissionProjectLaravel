<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;

class JurusanController extends Controller
{
    // Menampilkan semua data jurusan
    public function index()
    {
        $jurusans = Jurusan::orderBy('nama')->get();

        return view('jurusan.index', compact('jurusans'));
    }

    // Menampilkan detail satu jurusan
    public function show($id)
    {
        $jurusan = Jurusan::findOrFail($id);

        return view('jurusan.show', compact('jurusan'));
    }
}
