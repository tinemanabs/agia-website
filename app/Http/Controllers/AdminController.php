<?php

namespace App\Http\Controllers;

use File;
use App\Models\Gallery;
use App\Models\News;
use App\Models\User;
use App\Models\Training;

use Carbon\Carbon;

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
            'date' => $req->date,
            'image' => $req->image
        ];

        $yearFolder = Carbon::createFromFormat('Y-m-d', $data['date'])->format('Y');

        $path = public_path('uploads/galleries/' . $yearFolder . '/');
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
        $galleries->date = $data['date'];
        $galleries->image = $fileName;

        $galleries->save();
        return redirect('admin-gallery');
    }

    public function addImages(Request $req)
    {
        $galleries = Gallery::find($req->id);

        $yearFolder = Carbon::createFromFormat('Y-m-d', $galleries->date)->format('Y');

        $path = public_path('uploads/galleries/' . $yearFolder . '/' . $req->id);

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
        $news = DB::table('news')
            ->latest()
            ->get();

        return view('main.admin-news', [
            'news' => $news
        ]);
    }

    public function createNews()
    {
        return view('main.admin-news-create');
    }

    public function addNews(Request $req)
    {
        $data = [
            'title' => $req->title,
            'message' => $req->body,
            'date' => $req->date,
            'image' => $req->image
        ];

        $yearFolder = Carbon::createFromFormat('Y-m-d', $data['date'])->format('Y');
        $titleFolder = Str::slug($data['title'], '-');

        $path = public_path('uploads/news/' . $yearFolder . '/' . $titleFolder);
        $attachment = $req->file('image');

        $fileName = Str::slug($data['title']) . '-' . time() . '.' . $attachment->getClientOriginalExtension();

        // create folder
        if (!File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }
        $attachment->move($path, $fileName);

        $data['title'] = $path . '/' . $fileName;

        $news = new News();
        $news->title = $req->title;
        $news->message = $data['message'];
        $news->date = $data['date'];
        $news->image = $fileName;

        $news->save();
        return redirect('admin-news');
    }

    public function deleteNews(Request $req)
    {
        $data = News::find($req->id);
        $data->delete();
        return redirect('admin-news');
    }

    public function deleteGallery(Request $req)
    {
        $data = Gallery::find($req->id);
        $data->delete();
        return redirect('admin-gallery');
    }

    public function viewAlltraining()
    {
        $trainings = DB::table('trainings')
            ->latest()
            ->get();

        return view('main.admin-trainings', [
            'trainings' => $trainings
        ]);
    }

    public function createTraining()
    {
        return view('main.admin-trainings-create');
    }

    public function addTraining(Request $req)
    {
        $data = [
            'title' => $req->title,
            'start_date' => $req->startDate,
            'end_date' => $req->endDate,
            'venue' => $req->venue,
            'objective' => $req->courseObj,
            'message' => $req->body,
            'image' => $req->image
        ];

        $path = public_path('uploads/training'); //change to "/" when uploaded to web host
        $attachment = $req->file('image');

        $name = Str::slug($data['title']) . time() . '.' . $attachment->getClientOriginalExtension();

        if (!File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }
        $attachment->move($path, $name);

        $trainings = new Training();
        $trainings->title = $data['title'];
        $trainings->start_date = $data['start_date'];
        $trainings->end_date = $data['end_date'];
        $trainings->venue = $data['venue'];
        $trainings->objective = $data['objective'];
        $trainings->message = $data['message'];
        $trainings->image = $name;

        $trainings->save();

        return redirect('admin-trainings');
    }

    public function viewAllmembers()
    {
        $users = DB::table('users')
            ->where('active', 1)
            ->get();

        return view('main.admin-manage-members', [
            'users' => $users
        ]);
    }

    public function registerMember()
    {
        return view('main.admin-manage-members-register');
    }

    public function viewAllmemberapplication()
    {
        $users = DB::table('users')
            ->where('user_role', '0')
            ->where('active', 0)
            ->get();

        return view('main.admin-member-application', [
            'users' => $users
        ]);
    }
}