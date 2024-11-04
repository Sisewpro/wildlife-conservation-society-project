<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    // Function to show the welcome page with uploaded images
    public function index()
    {
        // Retrieve all files from the 'uploads' directory on the public disk
        $images = Storage::disk('public')->files('uploads');

        // Pass the images to the view
        return view('welcome', ['images' => $images]);
    }
}