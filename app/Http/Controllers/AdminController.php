<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewAllGallery()
    {
        return view('main.admin-gallery');
    }

    public function createGallery()
    {
        return view('main.admin-gallery-create');
    }
}
