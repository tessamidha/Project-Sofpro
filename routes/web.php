<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; // Tambahkan ini untuk pakai Request

// Route ke halaman utama
Route::get('/', function () {
    return view('home');
});

// Route ke halaman menu
Route::get('/menu', function () {
    return view('menu');
})->name('menu');

// 🔍 Route untuk fitur pencarian menu
Route::get('/menu/search', function (Request $request) {
    $query = $request->input('query');
    // Nanti di sini bisa kamu tambahkan logika pencarian menu dari database
    return view('menu', ['query' => $query]);
})->name('menu.search');

// Route ke halaman cara pesan
Route::get('/cara-pesan', function () {
    return view('cara-pesan');
});

// Route ke halaman tentang
Route::get('/tentang', function () {
    return view('tentang');
});
