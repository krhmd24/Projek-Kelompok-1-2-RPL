<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodDiaryController;

// === Dashboard ===
Route::get('/', function () {
    return view('dashboard');
});

// === Kalkulator Gizi ===
use App\Http\Controllers\GiziController;
Route::get('/kalkulator-gizi', function () {
    return view('kalkulator');
});
Route::post('/hitung-gizi', [GiziController::class, 'hitung'])->name('hitung.gizi');

// === Menu Sehat ===
Route::get('/menu-sehat', function () {
    return view('menu-sehat');
});

// === Food Diary ===
Route::get('/food-diary', [FoodDiaryController::class, 'index'])->name('food-diary');
Route::post('/food-diary/tambah', [FoodDiaryController::class, 'tambah'])->name('food-diary.tambah');
Route::delete('/food-diary/hapus/{id}', [FoodDiaryController::class, 'hapus'])->name('food-diary.hapus');

// ====pemantauan pertumbuhan ====///

use App\Http\Controllers\PertumbuhanController;

Route::get('/pemantauan-pertumbuhan', [PertumbuhanController::class, 'index'])->name('pemantauan');
Route::post('/pemantauan-pertumbuhan', [PertumbuhanController::class, 'store'])->name('pemantauan.store');

// === edukasi gizi ===//
Route::get('/edukasi-gizi', function () {
    return view('edukasi-gizi');
})->name('edukasi-gizi');


Route::get('/login', function () {
    return view('login');
})->name('login');

// Proses form login (sementara belum pakai controller)
Route::post('/login', function (Request $request) {
    // Sementara ini hanya simulasi login sederhana
    $email = $request->input('email');
    $password = $request->input('password');

    if ($email === 'admin@nutricare.com' && $password === 'admin123') {
        return redirect('/dashboard')->with('success', 'Login berhasil!');
    } else {
        return back()->with('error', 'Email atau kata sandi salah.');
    }
})->name('login.submit');

// Halaman dashboard contoh (sementara)
Route::get('/dashboard', function () {
    return "<h1 style='font-family:sans-serif;text-align:center;margin-top:100px;'>Selamat datang di Dashboard Nutricare!</h1>";
});