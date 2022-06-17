<?php

namespace App\Http\Controllers;

use File;
use App\Models\Gallery;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewAllGallery()
    {
        $galleries = DB::table('galleries')
            ->latest()
            ->get();

        return view('main.admin-gallery', [
            'galleries' => $galleries
        ]);
    }

    public function createGallery()
    {
        return view('main.admin-gallery-create');
    }

    public function addGallery(Request $req)
    {
        $data = [
            'title' => $req->title,
            'caption' => $req->caption,
            'image' => $req->image
        ];

        $path = public_path('uploads');
        $attachment = $req->file('image');

        $fileName = Str::slug($data['title']) . '-' . time() . '.' . $attachment->getClientOriginalExtension();

        // create folder
        if (!File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }
        $attachment->move($path, $fileName);

        $data['title'] = $path . '/' . $fileName;

        $galleries = new Gallery();
        $galleries->title = $req->title;
        $galleries->caption = $data['caption'];
        $galleries->image = $fileName;

        $galleries->save();
        return redirect('admin-gallery');
    }

    public function addImages(Request $req)
    {
        $path = public_path('uploads/galleries/' . $req->id);

        if (!File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }

        $attachments = $req->file('images');
        foreach ($attachments as $attachment) {
            $name = $attachment->getClientOriginalName();
            $attachment->move($path, $name);
        }

        return redirect('admin-gallery');
    }

    public function viewAllnews()
    {
        $galleries = DB::table('galleries')
            ->latest()
            ->get();

        return view('main.admin-news');
    }

    public function createNews()
    {
        return view('main.admin-news-create');
    }
}
