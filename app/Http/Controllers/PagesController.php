<?php

namespace App\Http\Controllers;

use App\Models\Event;
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
        $directors = DB::table('boardofdirectors')
            ->latest()
            ->get();

        return view('app.aboutus.boardofdirectors', [
            'directors' => $directors
        ]);
    }
    public function advisoryCouncilpage()
    {
        $council = DB::table('advisorycouncil')
            ->latest()
            ->get();

        return view('app.aboutus.advisorycouncil', [
            'council' => $council
        ]);
    }
    public function secretariatpage()
    {
        $secretariat = DB::table('secretariat')
            ->latest()
            ->get();

        return view('app.aboutus.thesecretariat', [
            'secretariat' => $secretariat
        ]);
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
        $trainings = DB::table('trainings')
            ->latest()
            ->get(['title', 'start', 'end', 'url']);

        return view('app.trainings.trainingcalendar', [
            'trainings' => $trainings
        ]);
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
            'trainingLists' => $trainings
        ]);
    }
    public function singleTrainingEvent($id)
    {
        $trainingList = DB::table('trainings')
            ->latest()
            ->get();
        if (Training::where('id', '=', $id)->exists()) {
            $trainings = Training::find($id);
            return view('app.trainings.trainingevents-single', [
                'trainings' => $trainings,
                'trainingLists' => $trainingList,
            ]);
        } else {
            return redirect('/');
        }
    }

    /* EVENTS NAVIGATION */

    public function caeForumPage()
    {
        $caeEvents = DB::table('events')
            ->where('category', 'CAE Forum')
            ->latest()
            ->get();
        return view(
            'app.events.caeforum',
            [
                'cae' => $caeEvents
            ]
        );
    }

    public function csrPage()
    {
        $csrEvents = DB::table('events')
            ->where('category', 'CSR')
            ->latest()
            ->get();
        return view('app.events.csr', [
            'csr' => $csrEvents
        ]);
    }

    public function conventionPage()
    {
        $conventionEvents = DB::table('events')
            ->where('category', 'Convention')
            ->latest()
            ->get();
        return view('app.events.convention', [
            'convention' => $conventionEvents
        ]);
    }

    public function strategicPlanningPage()
    {
        $stpEvents = DB::table('events')
            ->where('category', 'Strategic Planning')
            ->latest()
            ->get();
        return view('app.events.strategicplanning', [
            'stp' => $stpEvents
        ]);
    }

    /*LAWS AND ISSUANCES NAVIGATION */
    public function republicActpage()
    {
        $republicAct = DB::table('laws')
            ->where('category', 'Republic Act')
            ->latest()
            ->get();
        return view(
            'app.laws.republicact',
            [
                'republicAct' => $republicAct
            ]
        );
    }

    public function presidentialDecreepage()
    {
        $presidentialDecree = DB::table('laws')
            ->where('category', 'Presidential Decree')
            ->latest()
            ->get();
        return view(
            'app.laws.presidentialdecree',
            [
                'presidentialDecree' => $presidentialDecree
            ]
        );
    }

    public function executiveOrderpage()
    {
        $executiveOrder = DB::table('laws')
            ->where('category', 'Executive Order')
            ->latest()
            ->get();
        return view(
            'app.laws.executiveorder',
            [
                'executiveOrder' => $executiveOrder
            ]
        );
    }

    public function administrativeOrderpage()
    {
        $administrativeOrder = DB::table('laws')
            ->where('category', 'Administrative Orders')
            ->latest()
            ->get();
        return view(
            'app.laws.administrativeorders',
            [
                'administrativeOrder' => $administrativeOrder
            ]
        );
    }

    public function dbmCircularspage()
    {
        $dbmCircular = DB::table('laws')
            ->where('category', 'DBM Circulars')
            ->latest()
            ->get();
        return view(
            'app.laws.dbmcirculars',
            [
                'dbmCircular' => $dbmCircular
            ]
        );
    }

    public function memorandumCircularspage()
    {
        $memorandumCircular = DB::table('laws')
            ->where('category', 'Memorandum Circulars')
            ->latest()
            ->get();
        return view(
            'app.laws.memorandumcirculars',
            [
                'memorandumCircular' => $memorandumCircular
            ]
        );
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
        if (News::where('id', '=', $id)->exists()) {
            $news = News::find($id);
            return view('app.resources.news-single', [
                'news' => $news,
            ]);
        } else {
            return redirect('/');
        }
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
        if (Gallery::where('id', '=', $id)->exists()) {
            $galleries = Gallery::find($id);
            return view('app.resources.gallery-single', [
                'galleries' => $galleries,
            ]);
        } else {
            return redirect('/');
        }
    }

    public function presidentMessagepage()
    {
        return view('app.resources.president-message');
    }

    public function downloadsPage()
    {
        if (isset($_GET['category'])) {
            $downloads = DB::table('downloads')
                ->where('category', $_GET['category'])
                ->get();

            return view('app.resources.downloads', [
                'downloads' => $downloads
            ]);
        }
    }

    /*CONTACT US NAVIGATION */
    public function contactUspage()
    {
        return view('app.contactus');
    }
}
