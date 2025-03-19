<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function gallery()
    {
        $images = Image::all();
        return view('gallery', compact('images'));
    }

    public function contact()
    {
        return view('contact');
    }

  
}