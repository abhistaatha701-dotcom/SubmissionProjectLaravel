<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProductController;

// 1. Route Dasar

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sapa', function () {
    return 'Selamat datang di Aplikasi Perpustakaan Kampus!';
});

Route::get('/tanggal', fn () => now()->translatedFormat('l, d F Y'));

Route::get('/info', fn () => [
    'aplikasi' => 'Perpustakaan Kampus',
    'versi' => '1.0',
    'framework' => 'Laravel 13',
]);


// 2. Route Parameter

Route::get('/anggota/{nama}', function (string $nama) {
    return "Anggota perpustakaan: {$nama}";
});

Route::get('/rak/{genre?}', function (?string $genre = 'umum') {
    return "Menampilkan rak buku genre: {$genre}";
});

Route::get('/buku/{kategori}/tahun/{tahun}', function (string $kategori, int $tahun) {
    return "Buku kategori {$kategori} terbitan tahun {$tahun}";
});


// 3. Route Constraint

Route::get('/peminjaman/{id}', function (int $id) {
    return "Detail peminjaman nomor {$id}";
})->whereNumber('id');

Route::get('/penulis/{nama}', function (string $nama) {
    return "Penulis: {$nama}";
})->whereAlpha('nama');

Route::get('/isbn/{isbn}', function (string $isbn) {
    return "ISBN: {$isbn}";
})->where('isbn', '[0-9]{13}');

Route::get('/status/{status}', function (string $status) {
    return "Status peminjaman: {$status}";
})->whereIn('status', [
    'dipinjam',
    'dikembalikan',
    'terlambat'
]);


// 4. Named Route dan View Route

Route::view('/layanan', 'layanan')->name('layanan');

Route::get('/bantuan', function () {
    return view('bantuan', [
        'telepon' => '(024) 1234567'
    ]);
})->name('bantuan');


// 5. Route Group dan Prefix

Route::prefix('petugas')->name('petugas.')->group(function () {

    Route::get('/beranda', fn () => 'Beranda Petugas')
        ->name('beranda');

    Route::get('/laporan', fn () => 'Laporan Peminjaman')
        ->name('laporan');

    Route::get('/anggota/{id}', fn (int $id) => "Anggota dengan ID: {$id}")
        ->name('anggota');

});


// 6. Redirect dan Fallback

Route::redirect('/home', '/');

Route::permanentRedirect('/katalog-lama', '/info');

Route::fallback(function () {
    return response(
        'Maaf, halaman yang Anda cari tidak tersedia.',
        404
    );
});


// 7. Route Controller Produk

Route::get('/produk', [ProdukController::class, 'index'])
    ->name('produk.index');

Route::get('/produk/{id}', [ProdukController::class, 'show'])
    ->whereNumber('id')
    ->name('produk.show');


// 8. Route Controller Mahasiswa

Route::get('/profil', [MahasiswaController::class, 'profil'])
    ->name('mahasiswa.profil');

Route::get('/mahasiswa', [MahasiswaController::class, 'daftar'])
    ->name('mahasiswa.daftar');

Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'detail'])
    ->name('mahasiswa.detail');


// 9. Route Menuju Controller Product

Route::get('/product', [ProductController::class, 'index'])
    ->name('product.index');

Route::get('/products/{id}',function ($id) {
    return 'Produk #' . $id;
});

Route::get('/products/{id}',[ProductController::class,'show']);