<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Menampilkan Dashboard dengan Artikel
    public function index()
    {
        $articles = Article::with('user')->latest()->get(); // Ambil semua artikel dengan user terkait
        return view('dashboard', compact('articles'));
    }

    // Menyimpan Artikel Baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'file' => 'nullable|file|mimes:jpg,png,jpeg,mp4,mp3|max:2048', // Validasi file opsional
            'date' => 'required|date',
            'location' => 'required|string|max:255',
        ]);

        $filePath = null;

        // Simpan file jika ada
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('uploads', 'public');
        }

        Article::create([
            'title' => $request->title,
            'content' => $request->description,
            'file' => $filePath,
            'date' => $request->date,
            'location' => $request->location,
            'user_id' => auth()->id(), // Ambil ID pengguna yang sedang login
        ]);

        return redirect()->route('dashboard')->with('success', 'Article added successfully!');
    }
}
