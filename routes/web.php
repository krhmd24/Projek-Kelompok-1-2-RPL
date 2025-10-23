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

use App\Http\Controllers\AuthController;


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//====kebebasan admin====///
use App\Http\Controllers\EducationController;

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/educations', [EducationController::class, 'index'])->name('admin.education.index');
    Route::get('/admin/educations/create', [EducationController::class, 'create'])->name('admin.education.create');
    Route::post('/admin/educations', [EducationController::class, 'store'])->name('admin.education.store');
    Route::get('/admin/educations/{education}/edit', [EducationController::class, 'edit'])->name('admin.education.edit');
    Route::put('/admin/educations/{education}', [EducationController::class, 'update'])->name('admin.education.update');
    Route::delete('/admin/educations/{education}', [EducationController::class, 'destroy'])->name('admin.education.destroy');
});
