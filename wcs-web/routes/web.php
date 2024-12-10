<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;

// Route untuk Dashboard default
Route::get('/', function () {
    return view('dashboard');
});

// Route untuk Dashboard (Login)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route untuk Artikel
Route::get('/', [ArticleController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [ArticleController::class, 'index'])->name('dashboard');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');

// Route untuk upload artikel
Route::middleware(['auth'])->group(function () {
    Route::get('/uploads', [ArticleController::class, 'create'])->name('upload.uploadArticle');
    Route::post('/uploads', [ArticleController::class, 'store'])->name('upload.store');
});

// Route untuk menampilkan file hasil upload
Route::middleware(['auth'])->group(function () {
    Route::get('/audios', [FileController::class, 'showAudios'])->name('audios.view');
    Route::get('/photos', [FileController::class, 'showPhotos'])->name('photos.view');
    Route::get('/videos', [FileController::class, 'showVideos'])->name('videos.view');
    Route::get('/media/{type}', [ArticleController::class, 'showMedia'])
        ->where('type', 'audios|photos|videos')
        ->name('media.show');
    Route::get('/article/{id}', [ArticleController::class, 'show'])->name('details');
});

// Route untuk Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';