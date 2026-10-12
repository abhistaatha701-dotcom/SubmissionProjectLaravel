<?php

use Illuminate\Support\Facades\Route;

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