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

    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'alt_text' => 'nullable|string|max:255',
            'link' => 'nullable|url|max:255',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Image::create([
            'path' => $imageName,
            'alt_text' => $request->alt_text,
            'link' => $request->link,
        ]);

        return redirect()->route('gallery')->with('success', 'Image uploaded successfully.');
    }
}