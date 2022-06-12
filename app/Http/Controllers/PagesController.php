<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contactUspage()
    {
        return view('app.contactus');
    }
}
