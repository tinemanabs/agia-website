<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Gallery;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function newsPage()
    {
        $news = DB::table('news')
            ->latest()
            ->get();

        return view('app.resources.news', [
            'news' => $news
        ]);
    }

    public function singleNewsPage($id)
    {
        $news = News::find($id);
        return view('app.resources.news-single', [
            'news' => $news,
        ]);
    }

    public function galleryPage()
    {
        $galleries = DB::table('galleries')
            ->latest()
            ->get();

        return view('app.resources.gallery', [
            'galleries' => $galleries
        ]);
    }

    public function singleGalleryPage($id)
    {
        $galleries = Gallery::find($id);
        return view('app.resources.gallery-single', [
            'galleries' => $galleries,
        ]);
    }

    /*CONTACT US NAVIGATION */
    public function contactUspage()
    {
        return view('app.contactus');
    }
}
