<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Gallery;
use App\Models\Training;

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

    /* MEMBERSHIP NAVIGATION */

    public function classificationMember()
    {
        return view('app.membership.classificationofmembers');
    }

    public function membershipApplication()
    {
        return view('app.membership.membershipapplication');
    }

    public function updateMembership()
    {
        return view('app.membership.updatemymembership');
    }

    /* TRAININGS AND SEMINARS NAVIGATION */
    public function trainingCalendar()
    {
        return view('app.trainings.trainingcalendar');
    }
    public function trainingCDPunit()
    {
        return view('app.trainings.trainingwithcdp');
    }
    public function inHousetraining()
    {
        return view('app.trainings.inhousetraining');
    }
    public function mobileTraining()
    {
        return view('app.trainings.mobiletraining');
    }
    public function listTraining()
    {
        $trainings = DB::table('trainings')
            ->latest()
            ->get();

        return view('app.trainings.trainingevents', [
            'trainings' => $trainings
        ]);
    }
    public function singleTrainingEvent($id)
    {
        $trainings = Training::find($id);
        return view('app.trainings.trainingevents-single', [
            'trainings' => $trainings,
        ]);
    }

    /*LAWS AND ISSUANCES NAVIGATION */
    public function republicActpage()
    {
        return view('app.laws.republicact');
    }

    public function presidentialDecreepage()
    {
        return view('app.laws.presidentialdecree');
    }

    public function executiveOrderpage()
    {
        return view('app.laws.executiveorder');
    }

    public function administrativeOrderpage()
    {
        return view('app.laws.administrativeorders');
    }

    public function dbmCircularspage()
    {
        return view('app.laws.dbmcirculars');
    }

    public function memorandumCircularspage()
    {
        return view('app.laws.memorandumcirculars');
    }

    /* RESOURCES NAVIGATION */
    /*public function newsPage()
    {
        $news = DB::table('news')
            ->latest()
            ->get();

        return view('app.resources.news', [
            'news' => $news
        ]);
    }*/

    public function newsPage($year)
    {
        $news = DB::table('news')
            ->where('date', 'like', '%' . $year . '%')
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

    public function galleryPage($year)
    {
        $galleries = DB::table('galleries')
            ->where('date', 'like', '%' . $year . '%')
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
