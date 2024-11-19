<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

// Halaman Utama (Dashboard sebagai default)
Route::get('/', function () {
    return view('dashboard');
});

// Dashboard (hanya untuk pengguna yang sudah terautentikasi dan terverifikasi)
Route::get('/dashboard', [ArticleController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Route untuk Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route untuk Artikel
Route::middleware('auth')->group(function () {
    Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
});

// Include Routes untuk Auth
require __DIR__ . '/auth.php';