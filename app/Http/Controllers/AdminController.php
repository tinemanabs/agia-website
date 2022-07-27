<?php

namespace App\Http\Controllers;

use File;
use URL;
use App\Models\Gallery;
use App\Models\News;
use App\Models\User;
use App\Models\Training;
use App\Models\Download;
use App\Models\BoardOfDirector;
use App\Models\AdvisoryCouncil;
use App\Models\Secretariat;
use App\Models\Event;
use App\Models\LawIssuance;

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
        $data = News::find($req->id);
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

    public function deleteMember(Request $req)
    {
        $data = User::find($req->id);
        $data->delete();
        return redirect('admin-users-management');
    }

    public function multiDeleteMember(Request $req)
    {
        User::whereIn('id', $req->get('selected'))->delete();

        return redirect('admin-membership-applications');
    }

    public function editGallery($id)
    {
        $gallery = Gallery::find($id);
        return view('main.admin-gallery-edit', [
            'gallery' => $gallery
        ]);
    }

    public function updateGallery(Request $req)
    {
        $gallery = Gallery::find($req->id);
        $gallery->title = $req->title;
        $gallery->caption = $req->caption;
        $gallery->date = $req->date;

        if ($req->image != null) {
            $yearFolder = Carbon::createFromFormat('Y-m-d', $req->date)->format('Y');

            $path = public_path('uploads/galleries/' . $yearFolder . '/');
            $attachment = $req->file('image');

            $fileName = Str::slug($req->title) . '-' . time() . '.' . $attachment->getClientOriginalExtension();

            // create folder
            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }
            $attachment->move($path, $fileName);
            $gallery->image = $fileName;
        }

        $gallery->save();
        return redirect('admin-gallery');

    }

    public function editNews($id)
    {
        $news = News::find($id);
        return view('main.admin-news-edit', [
            'news' => $news
        ]);
    }

    public function updateNews(Request $req)
    {
        $news = News::find($req->id);
        $news->title = $req->title;
        $news->message = $req->body;
        $news->date = $req->date;

        if ($req->image != null) {
            $yearFolder = Carbon::createFromFormat('Y-m-d', $req->date)->format('Y');
            $titleFolder = Str::slug($req->title, '-');

            $path = public_path('uploads/news/' . $yearFolder . '/' . $titleFolder);
            $attachment = $req->file('image');

            $fileName = Str::slug($req->title) . '-' . time() . '.' . $attachment->getClientOriginalExtension();

            // create folder
            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }
            $attachment->move($path, $fileName);

            $news->image = $fileName;
        }

        $news->save();
        return redirect('admin-news');
    }

    public function editTraining($id)
    {
        $training = Training::find($id);
        return view('main.admin-trainings-edit', [
            'training' => $training
        ]);
    }

    public function updateTraining(Request $req)
    {
        $training = Training::find($req->id);
        $training->title = $req->title;
        $training->start = $req->startDate;
        $training->end = $req->endDate;
        $training->venue = $req->venue;
        $training->objective = $req->courseObj;
        $training->message = $req->body;

        if ($req->image != null) {
            $path = public_path('uploads/training'); //change to "/" when uploaded to web host
            $attachment = $req->file('image');

            $name = Str::slug($req->title) . time() . '.' . $attachment->getClientOriginalExtension();

            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }
            $attachment->move($path, $name);

            $training->image = $name;
        }

        $training->save();
        return redirect('admin-trainings');
    }

    public function editDownloads($id)
    {
        $download = Download::find($id);
        return view('main.admin-download-edit', [
            'download' => $download
        ]);
    }

    public function updateDownloads(Request $req)
    {
        $download = Download::find($req->id);
        $download->title = $req->title;
        $download->category = $req->category;

        $attachments = $req->file('files');

        if ($attachments != null) {
            $path = public_path('uploads/downloads/' . $req->category . '/' . $req->title);

            // create folder
            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }
    
            foreach ($attachments as $attachment) {
                $name = $attachment->getClientOriginalName();
                $attachment->move($path, $name);
            }
        }

        $download->save();
        return redirect('admin-downloads');
    }

    public function viewAllDirectors()
    {
        $directors = DB::table('boardofdirectors')
            ->latest()
            ->get();

        return view('main.admin-director', [
            'directors' => $directors
        ]);
    }

    public function createDirectors()
    {
        return view('main.admin-director-create');
    }

    public function addDirectors(Request $req)
    {
        $data = [
            'name' => $req->name,
            'category' => $req->category,
            'position' => $req->position,
            'detail1' => $req->details1,
            'detail2' => $req->details2,
            'detail3' => $req->details3,
            'image' => $req->image
        ];

        $path = public_path('uploads/boardofdirectors/');
        $attachment = $req->file('image');

        $fileName = Str::slug($data['name']) . '-' . time() . '.' . $attachment->getClientOriginalExtension();

        // create folder
        if (!File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }
        $attachment->move($path, $fileName);

        $directors = new BoardOfDirector();
        $directors->name = $data['name'];
        $directors->category = $data['category'];
        $directors->position = $data['position'];
        $directors->detail1 = $data['detail1'];
        $directors->detail2 = $data['detail2'];
        $directors->detail3 = $data['detail3'];
        $directors->image = $fileName;

        $directors->save();
        return redirect('admin-boardofdirectors');
    }

    public function editDirectors($id)
    {
        $director = BoardOfDirector::find($id);
        return view('main.admin-director-edit', [
            'director' => $director
        ]);
    }

    public function updateDirectors(Request $req)
    {
        $directors = BoardofDirector::find($req->id);
        $directors->name = $req->name;
        $directors->category = $req->category;
        $directors->position = $req->position;
        $directors->detail1 = $req->details1;
        $directors->detail2 = $req->details2;
        $directors->detail3 = $req->details3;

        if ($req->image != null) {
            
            $path = public_path('uploads/boardofdirectors/');
            $attachment = $req->file('image');

            $fileName = Str::slug($req->name) . '-' . time() . '.' . $attachment->getClientOriginalExtension();

            // create folder
            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }
            $attachment->move($path, $fileName);

            $directors->image = $fileName;
        }

        $directors->save();
        return redirect('admin-boardofdirectors');
    }

    public function deleteDirector(Request $req)
    {
        $data = BoardOfDirector::find($req->id);
        $data->delete();
        return redirect('admin-boardofdirectors');
    }

    public function multiDeleteDirectors(Request $req)
    {
        BoardOfDirector::whereIn('id', $req->get('selected'))->delete();

        return redirect('admin-boardofdirectors');
    }

    public function viewAllCouncil()
    {
        $council = DB::table('advisorycouncil')
            ->latest()
            ->get();

        return view('main.admin-council', [
            'council' => $council
        ]);
    }

    public function createCouncil()
    {
        return view('main.admin-council-create');
    }

    public function addCouncil(Request $req)
    {
        $data = [
            'name' => $req->name,
            'detail' => $req->detail,
            'year' => $req->year,
            'image' => $req->image
        ];

        $path = public_path('uploads/advisorycouncil/');
        $attachment = $req->file('image');

        $fileName = Str::slug($data['name']) . '-' . time() . '.' . $attachment->getClientOriginalExtension();

        // create folder
        if (!File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }
        $attachment->move($path, $fileName);

        $council = new AdvisoryCouncil();
        $council->name = $data['name'];
        $council->detail = $data['detail'];
        $council->year = $data['year'];
        $council->image = $fileName;

        $council->save();
        return redirect('admin-advisorycouncil');
    }

    public function editCouncil($id)
    {
        $council = AdvisoryCouncil::find($id);
        return view('main.admin-council-edit', [
            'council' => $council
        ]);
    }

    public function updateCouncil(Request $req)
    {
        $council = AdvisoryCouncil::find($req->id);
        $council->name = $req->name;
        $council->detail = $req->detail;
        $council->year = $req->year;

        if ($req->image != null) {
            
            $path = public_path('uploads/advisorycouncil/');
            $attachment = $req->file('image');

            $fileName = Str::slug($req->name) . '-' . time() . '.' . $attachment->getClientOriginalExtension();

            // create folder
            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }
            $attachment->move($path, $fileName);

            $council->image = $fileName;
        }

        $council->save();
        return redirect('admin-advisorycouncil');
    }

    public function deleteCouncil(Request $req)
    {
        $data = AdvisoryCouncil::find($req->id);
        $data->delete();
        return redirect('admin-advisorycouncil');
    }

    public function multiDeleteCouncil(Request $req)
    {
        AdvisoryCouncil::whereIn('id', $req->get('selected'))->delete();

        return redirect('admin-advisorycouncil');
    }

    public function viewAllSecretariat()
    {
        $secretariat = DB::table('secretariat')
            ->latest()
            ->get();

        return view('main.admin-secretariat', [
            'secretariat' => $secretariat
        ]);
    }

    public function createSecretariat()
    {
        return view('main.admin-secretariat-create');
    }

    public function addSecretariat(Request $req)
    {
        $data = [
            'name' => $req->name,
            'position' => $req->position,
            'image' => $req->image
        ];

        $path = public_path('uploads/thesecretariat/');
        $attachment = $req->file('image');

        $fileName = Str::slug($data['name']) . '-' . time() . '.' . $attachment->getClientOriginalExtension();

        // create folder
        if (!File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }
        $attachment->move($path, $fileName);

        $secretariat = new Secretariat();
        $secretariat->name = $data['name'];
        $secretariat->position = $data['position'];
        $secretariat->image = $fileName;

        $secretariat->save();
        return redirect('admin-thesecretariat');
    }

    public function editSecretariat($id)
    {
        $secretariat = Secretariat::find($id);
        return view('main.admin-secretariat-edit', [
            'secretariat' => $secretariat
        ]);
    }

    public function updateSecretariat(Request $req)
    {
        $secretariat = Secretariat::find($req->id);
        $secretariat->name = $req->name;
        $secretariat->position = $req->position;

        if ($req->image != null) {
            
            $path = public_path('uploads/thesecretariat/');
            $attachment = $req->file('image');

            $fileName = Str::slug($req->name) . '-' . time() . '.' . $attachment->getClientOriginalExtension();

            // create folder
            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }
            $attachment->move($path, $fileName);

            $secretariat->image = $fileName;
        }

        $secretariat->save();
        return redirect('admin-thesecretariat');
    }

    public function deleteSecretariat(Request $req)
    {
        $data = Secretariat::find($req->id);
        $data->delete();
        return redirect('admin-thesecretariat');
    }

    public function multiDeleteSecretariat(Request $req)
    {
        Secretariat::whereIn('id', $req->get('selected'))->delete();

        return redirect('admin-thesecretariat');
    }

    public function viewAllEvents()
    {
        $events = DB::table('events')
            ->latest()
            ->get();

        return view('main.admin-events', [
            'events' => $events
        ]);
    }

    public function createEvents()
    {
        return view('main.admin-events-create');
    }

    public function addEvents(Request $req)
    {
        $data = [
            'title' => $req->title,
            'category' => $req->category,
            'venue' => $req->venue,
            'date' => $req->date,
        ];

        $events = new Event();
        $events->title = $data['title'];
        $events->category = $data['category'];
        $events->venue = $data['venue'];
        $events->date = $data['date'];

        $events->save();
        return redirect('admin-events');
    }

    public function editEvents($id)
    {
        $event = Event::find($id);
        return view('main.admin-events-edit', [
            'event' => $event
        ]);
    }

    public function updateEvents(Request $req)
    {
        $event = Event::find($req->id);
        $event->title = $req->title;
        $event->category = $req->category;
        $event->venue = $req->venue;
        $event->date = $req->date;

        $event->save();
        return redirect('admin-events');
    }

    public function deleteEvents(Request $req)
    {
        $data = Event::find($req->id);
        $data->delete();
        return redirect('admin-events');
    }

    public function multiDeleteEvents(Request $req)
    {
        Event::whereIn('id', $req->get('selected'))->delete();

        return redirect('admin-events');
    }

    public function viewAllLaws()
    {
        $laws = DB::table('laws')
            ->latest()
            ->get();

        return view('main.admin-laws', [
            'laws' => $laws
        ]);
    }

    public function createLaws()
    {
        return view('main.admin-laws-create');
    }

    public function addLaws(Request $req)
    {
        $data = [
            'number' => $req->number,
            'category' => $req->category,
            'subject' => $req->subject,
            'date' => $req->date,
            'file' => $req->files
        ];

        $law = new LawIssuance();

        if ($req->hasFile('files')) {
            
            $path = public_path('uploads/lawsandissuances/');
            $attachment = $req->file('files');

            $fileName = Str::slug($req->number) . '-' . time() . '.' . $attachment->getClientOriginalExtension();

            // create folder
            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }
            $attachment->move($path, $fileName);

            $law->file = $fileName;
        }

        $law->number = $data['number'];
        $law->category = $data['category'];
        $law->subject = $data['subject'];
        $law->date = $data['date'];

        $law->save();
        return redirect('admin-lawsandissuances');
    }
    
    public function editLaws($id)
    {
        $law = LawIssuance::find($id);
        return view('main.admin-laws-edit', [
            'law' => $law
        ]);
    }

    public function updateLaws(Request $req)
    {
        $law = LawIssuance::find($req->id);
        $law->number = $req->number;
        $law->category = $req->category;
        $law->date = $req->date;
        $law->subject = $req->subject;

        if ($req->hasFile('files')) {
            
            $path = public_path('uploads/lawsandissuances/');
            $attachment = $req->file('files');

            $fileName = Str::slug($req->number) . '-' . time() . '.' . $attachment->getClientOriginalExtension();

            // create folder
            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }
            $attachment->move($path, $fileName);

            $law->file = $fileName;
        }

        $law->save();
        return redirect('admin-lawsandissuances');
    }

    public function deleteLaws(Request $req)
    {
        $data = LawIssuance::find($req->id);
        $data->delete();
        return redirect('admin-lawsandissuances');
    }

    public function multiDeleteLaws(Request $req)
    {
        LawIssuance::whereIn('id', $req->get('selected'))->delete();

        return redirect('admin-lawsandissuances');
    }
}
