<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function aboutusPage()
    {
        return view('app.aboutus');
    }
    public function contactUspage()
    {
        return view('app.contactus');
    }
}
