<?php

namespace App\Http\Controllers;

use File;
use URL;
use App\Models\Gallery;
use App\Models\News;
use App\Models\User;
use App\Models\Training;
use App\Models\Download;

use App\Mail\AcceptMail;

use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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

    public function multiDeleteNews(Request $req)
    {
        foreach ($req->get('selected') as $ids) {
            $data = News::find($ids);
            $yearFolder = Carbon::createFromFormat('Y-m-d', $data->date)->format('Y');
            $path = public_path('uploads/news/' . $yearFolder);
            File::deleteDirectory($path . '/' . Str::slug($data->title, '-'));
        }

        News::whereIn('id', $req->get('selected'))->delete();

        return redirect('admin-news');
    }

    public function deleteNews(Request $req)
    {
        $data = News::find($ids);
        $yearFolder = Carbon::createFromFormat('Y-m-d', $data->date)->format('Y');
        $path = public_path('uploads/news/' . $yearFolder);
        File::deleteDirectory($path . '/' . Str::slug($data->title, '-'));
        $data->delete();
        return redirect('admin-news');
    }

    public function multiDeleteGallery(Request $req)
    {
        foreach ($req->get('selected') as $ids) {
            $data = Gallery::find($ids);
            $yearFolder = Carbon::createFromFormat('Y-m-d', $data->date)->format('Y');
            $path = public_path('uploads/galleries/' . $yearFolder);
            unlink($path . '/' . $data->image);
            File::deleteDirectory($path . '/' . $data->id);
        }
        Gallery::whereIn('id', $req->get('selected'))->delete();

        return redirect('admin-gallery');
    }

    public function deleteGallery(Request $req)
    {
        $data = Gallery::find($req->id);
        $yearFolder = Carbon::createFromFormat('Y-m-d', $data->date)->format('Y');
        //echo $yearFolder;
        $path = public_path('uploads/galleries/' . $yearFolder);
        unlink($path . '/' . $data->image);
        File::deleteDirectory($path . '/' . $data->id);

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
        $trainings->start = $data['start_date'];
        $trainings->end = $data['end_date'];
        $trainings->venue = $data['venue'];
        $trainings->objective = $data['objective'];
        $trainings->message = $data['message'];
        $trainings->image = $name;

        $trainings->save();

        $updateTraining = Training::find($trainings->id);
        $updateTraining->url = URL::to('/') . '/' . 'trainings-seminars/training-events/' . $trainings->id;
        $updateTraining->update();

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

    public function acceptApplication(Request $req)
    {
        $data = User::find($req->id);
        $data->active = 1;
        Mail::to($data->email)->send(new AcceptMail($data));
        $data->update();
        return redirect('admin-membership-applications');
    }

    public function viewAllDownloads()
    {
        $downloads = DB::table('downloads')
            ->latest()
            ->get();

        return view('main.admin-download', [
            'downloads' => $downloads
        ]);
    }

    public function createDownloads()
    {
        return view('main.admin-download-create');
    }

    public function addDownloads(Request $req)
    {
        $data = [
            'title' => $req->title,
            'category' => $req->category,
        ];

        $path = public_path('uploads/downloads/' . $data['category'] . '/' . $data['title']);

        // create folder
        if (!File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }

        $attachments = $req->file('files');
        foreach ($attachments as $attachment) {
            $name = $attachment->getClientOriginalName();
            $attachment->move($path, $name);
        }

        $downloads = new Download();
        $downloads->title = $data['title'];
        $downloads->category = $data['category'];

        $downloads->save();

        return redirect('admin-downloads');
    }

    public function multiDeleteTraining(Request $req)
    {
        Training::whereIn('id', $req->get('selected'))->delete();

        return redirect('admin-trainings');
    }

    public function deleteTraining(Request $req)
    {
        $data = Training::find($req->id);
        $data->delete();
        return redirect('admin-trainings');
    }

    public function multiDeleteDownload(Request $req)
    {
        Download::whereIn('id', $req->get('selected'))->delete();

        return redirect('admin-downloads');
    }

    public function deleteDownload(Request $req)
    {
        $data = Download::find($req->id);
        $data->delete();
        return redirect('admin-downloads');
    }

    public function multiDeleteApplication(Request $req)
    {
        User::whereIn('id', $req->get('selected'))->delete();

        return redirect('admin-membership-applications');
    }

    public function deleteApplication(Request $req)
    {
        $data = User::find($req->id);
        $data->delete();
        return redirect('admin-membership-applications');
    }

    public function editGallery($id)
    {
        $gallery = Gallery::find($id);
        return view('main.admin-gallery-edit', [
            'gallery' => $gallery
        ]);
    }

    public function editNews($id)
    {
        $news = News::find($id);
        return view('main.admin-news-edit', [
            'news' => $news
        ]);
    }

    public function editTraining($id)
    {
        $training = Training::find($id);
        return view('main.admin-trainings-edit', [
            'training' => $training
        ]);
    }

    public function editDownloads($id)
    {
        $download = Download::find($id);
        return view('main.admin-download-edit', [
            'download' => $download
        ]);
    }
}
