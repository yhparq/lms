<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class GalleryController extends Controller
{
    public function index()
    {
        $imagePath = public_path('assets/gallery');
        $images = array_diff(scandir($imagePath), ['.', '..']);
        return view('home', compact('images'));
    }
}
