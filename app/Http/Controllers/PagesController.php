<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /* ABOUT US NAVIGATION */
    public function whatIsAGIApage()
    {
        return view('app.aboutus.whatisagia');
    }
    public function visionMissionpage()
    {
        return view('app.aboutus.visionandmission');
    }
    public function strategyMappage()
    {
        return view('app.aboutus.strategymap');
    }
    public function boardOfdirectorspage()
    {
        return view('app.aboutus.boardofdirectors');
    }
    public function advisoryCouncilpage()
    {
        return view('app.aboutus.advisorycouncil');
    }
    public function secretariatpage()
    {
        return view('app.aboutus.thesecretariat');
    }

    /* RESOURCES NAVIGATION */
    public function galleryPage()
    {
        return view('app.resources.gallery');
    }

    public function singleGalleryPage()
    {
        return view('app.resources.gallery-single');
    }

    /*CONTACT US NAVIGATION */
    public function contactUspage()
    {
        return view('app.contactus');
    }
}
