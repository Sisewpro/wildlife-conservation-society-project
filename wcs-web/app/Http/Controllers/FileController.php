<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Article;

class FileController extends Controller
{
    // Menampilkan file audio
    public function showAudios()
    {
        // Ambil semua file audio dari storage
        $audios = Storage::disk('public')->files('uploads/audios');
        return view('viewupload.audios.audiosView', compact('audios'));
    }

    // Menampilkan file foto
    public function showPhotos()
    {
        // Ambil semua file foto dari storage
        $photos = Storage::disk('public')->files('uploads/photos');
        return view('viewupload.photos.photosView', compact('photos'));
    }

    // Menampilkan file video
    public function showVideos()
    {
        // Ambil semua file video dari storage
        $videos = Storage::disk('public')->files('uploads/videos');
        return view('viewupload.videos.videosView', compact('videos'));
    }
}