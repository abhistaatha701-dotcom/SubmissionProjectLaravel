<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = [
            [
                'id' => 1,
                'nama' => 'Keyboard',
                'harga' => 150000,
                'stok' => 12
            ],
            [
                'id' => 2,
                'nama' => 'Mouse',
                'harga' => 85000,
                'stok' => 0
            ]
        ];

        return view('produk.index', compact('produk'));
    }

    public function show($id)
    {
        return 'Detail Produk dengan ID: ' . $id;
    }
}