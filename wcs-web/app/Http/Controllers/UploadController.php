<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048', // Example validation
        ]);

        // Store the file in the 'uploads' directory within the public disk
        $path = $request->file('file')->store('uploads', 'public');

        // Return a response or redirect after the upload
        return back()->with('success', 'File uploaded successfully! Path: ' . $path);
    }

    public function showImages()
    {
        // Fetch images from storage
        $files = Storage::disk('public')->files('uploads');

        // Generate URLs for each file
        $images = array_map(function($file) {
            return url('storage/' . $file);
        }, $files);

        return view('images', compact('images')); 
    }
}