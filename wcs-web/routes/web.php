<?php
// routes/web.php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

// Route for the home page
Route::get('/', function () {
    // Fetch images from storage
    $files = \Illuminate\Support\Facades\Storage::disk('public')->files('uploads'); // Fetch files from the 'uploads' directory on the public disk

    // Generate URLs for each file
    $images = array_map(function($file) {
        return url('storage/' . $file); // Generate public URL for each file
    }, $files);

    return view('welcome', compact('images')); // Pass the images to the welcome view
});

// Route for the dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Protected routes for authenticated users
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Upload routes
Route::post('/upload', [UploadController::class, 'upload'])->name('upload.file'); // Handle file upload
Route::get('/upload', function () {
    return view('upload'); // Return the upload view
});

// Route to show uploaded images
Route::get('/images', [UploadController::class, 'showImages'])->name('images.show'); // This assumes you have a method in UploadController to show images

// Require authentication routes
require __DIR__ . '/auth.php';