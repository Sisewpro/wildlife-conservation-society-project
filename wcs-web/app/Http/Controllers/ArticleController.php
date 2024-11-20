<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Menampilkan Dashboard dengan Artikel
    public function index()
    {
        $articles = Article::with('user')->latest()->get(); // Ambil semua artikel dengan user terkait
        return view('dashboard', compact('articles'));
    }

    // Menampilkan halaman upload artikel
    public function create()
    {
        return view('upload.uploadArticle'); // Pastikan view berada di resources/views/upload/uploadArticle.blade.php
    }

    // Menyimpan Artikel Baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'file' => 'nullable|file|mimes:jpg,png,jpeg,mp4,mp3|max:512000',
            'location' => 'required|string|max:255',
        ]);

        // Menyimpan file jika ada
        $filePath = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
    
            // Mendapatkan MIME type file untuk menentukan tipe file
            $mimeType = $file->getMimeType();
    
            // Tentukan direktori penyimpanan file berdasarkan jenis MIME
            if (strpos($mimeType, 'audio') !== false) {
                // Jika file adalah audio, simpan di 'uploads/audios'
                $filePath = $file->store('uploads/audios', 'public');
            } elseif (strpos($mimeType, 'image') !== false) {
                // Jika file adalah gambar (photo), simpan di 'uploads/photos'
                $filePath = $file->store('uploads/photos', 'public');
            } elseif (strpos($mimeType, 'video') !== false) {
                // Jika file adalah video, simpan di 'uploads/videos'
                $filePath = $file->store('uploads/videos', 'public');
            }
        }

        // Menyimpan artikel ke database
        Article::create([
            'title' => $request->title,
            'content' => $request->description,
            'file' => $filePath, // Menyimpan path file
            'location' => $request->location,
            'user_id' => auth()->id(),
            'date' => now(), // Tanggal saat ini
            'time' => now()->format('H:i:s'), // Waktu saat ini dalam format jam:menit:detik
        ]);        

        return redirect()->route('dashboard')->with('success', 'Article added successfully!');
    }
}