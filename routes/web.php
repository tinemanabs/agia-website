<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $news = DB::table('news')
        ->orderBy('created_at', 'desc')
        ->limit(4)
        ->get();
    $trainings = DB::table('trainings')
        ->latest()
        ->get();

    return view('index')->with('news', $news)->with('trainings', $trainings);
});

/* ABOUT US NAVIGATION */
Route::get('/about-us/what-is-agia', [PagesController::class, 'whatIsAGIApage'])->name('aboutus.what-is-agia');
Route::get('/about-us/vision-mission', [PagesController::class, 'visionMissionpage'])->name('aboutus.vision-mission');
Route::get('/about-us/strategy-map', [PagesController::class, 'strategyMappage'])->name('aboutus.strategy-map');
Route::get('/about-us/board-directors', [PagesController::class, 'boardOfdirectorspage'])->name('aboutus.board-directors');
Route::get('/about-us/advisory-council', [PagesController::class, 'advisoryCouncilpage'])->name('aboutus.advisory-council');
Route::get('/about-us/secretariat', [PagesController::class, 'secretariatpage'])->name('aboutus.secretariat');

/* MEMBERSHIP NAVIGATION */

Route::get('/membership/classification-members', [PagesController::class, 'classificationMember'])->name('membership.classification-membership');
Route::get('/membership/membership-application', [PagesController::class, 'membershipApplication'])->name('membership.membership-application');
Route::get('/membership/update-membership-profile', [PagesController::class, 'updateMembership'])->name('membership.update-membership-profile');
Route::post('/send-application', [MemberController::class, 'sendApplication'])->name('send.application');

/* TRAINING & SEMINARS */
Route::get('/trainings-seminars/training-calendar', [PagesController::class, 'trainingCalendar'])->name('training.calendar');
Route::get('/trainings-seminars/training-events', [PagesController::class, 'listTraining'])->name('training.training-events');
Route::get('/trainings-seminars/training-events/{id}', [PagesController::class, 'singleTrainingEvent'])->name('training.training-events-single');
Route::get('/trainings-seminars/training-cpd-units', [PagesController::class, 'trainingCDPunit'])->name('training.training-cpd-units');
Route::get('/trainings-seminars/in-house-trainings', [PagesController::class, 'inHousetraining'])->name('training.in-house-trainings');
Route::get('/trainings-seminars/mobile-training', [PagesController::class, 'mobileTraining'])->name('training.mobile-training');

/* LAWS & ISSUANCES */
Route::get('/laws-issuances/republic-act', [PagesController::class, 'republicActpage'])->name('laws.republic-act');
Route::get('/laws-issuances/presidential-decree', [PagesController::class, 'presidentialDecreepage'])->name('laws.presidential-decree');
Route::get('/laws-issuances/executive-order', [PagesController::class, 'executiveOrderpage'])->name('laws.executive-order');
Route::get('/laws-issuances/administrative-orders', [PagesController::class, 'administrativeOrderpage'])->name('laws.administrative-orders');
Route::get('/laws-issuances/dbm-circulars', [PagesController::class, 'dbmCircularspage'])->name('laws.dbm-circulars');
Route::get('/laws-issuances/memorandum-circulars', [PagesController::class, 'memorandumCircularspage'])->name('laws.memorandum-circulars');

/* RESOURCES NAVIGATION */
//Route::get('/resources/news', [PagesController::class, 'newsPage'])->name('resources.news');
Route::get('/resources/news/{year}', [PagesController::class, 'newsPage'])->name('resources.news');
Route::get('/resources/news/archive/{id}', [PagesController::class, 'singleNewsPage'])->name('resources.news-single');
Route::get('/resources/gallery/{year}', [PagesController::class, 'galleryPage'])->name('resources.gallery');
Route::get('/resouces/gallery/images/{id}', [PagesController::class, 'singleGalleryPage'])->name('resouces.gallery-single');
Route::get('/resources/president-message', [PagesController::class, 'presidentMessagepage'])->name('resources.president-message');

/* CONTACT US NAVIGATION */
Route::get('/contactus', [PagesController::class, 'contactUspage'])->name('contactus');
Route::post('/send-contact', [MailController::class, 'sendContact'])->name('send.contact');

/* MEMBER LOGIN NAVIGATION */
Route::get('/member-login', [MemberController::class, 'index'])->name('member-login');
Route::post('/checklogin', [MemberController::class, 'checkLogin']);
Route::get('/successlogin', [MemberController::class, 'successLogin']);
Route::get('/logout', [MemberController::class, 'logout']);

/* ADMIN-GALLERY NAVIGATION */
Route::get('/admin-gallery', [AdminController::class, 'viewAllGallery'])->name('admin.view-all-gallery');
Route::get('/admin-create-gallery', [AdminController::class, 'createGallery'])->name('admin.create-gallery');
Route::post('/add-gallery', [AdminController::class, 'addGallery'])->name('add.gallery');
Route::post('/add-images', [AdminController::class, 'addImages'])->name('add.images');
Route::post('/delete-gallery', [AdminController::class, 'deleteGallery'])->name('delete.gallery');

/* ADMIN-NEWS NAVIGATION */
Route::get('/admin-news', [AdminController::class, 'viewAllnews'])->name('admin.view-all-news');
Route::get('/admin-create-news', [AdminController::class, 'createNews'])->name('admin.create-news');
Route::post('/add-news', [AdminController::class, 'addNews'])->name('add.news');
Route::post('/delete-news', [AdminController::class, 'deleteNews'])->name('delete.news');

/* ADMIN-TRAININGS NAVIGATION */
Route::get('/admin-trainings', [AdminController::class, 'viewAlltraining'])->name('admin.view-all-training');
Route::get('/admin-create-training', [AdminController::class, 'createTraining'])->name('admin-create-training');
Route::post('/add-training', [AdminController::class, 'addTraining'])->name('add.training');

/* ADMIN-MEMBERSHIP APPLICATIONS NAVIGATION */
Route::get('/admin-membership-applications', [AdminController::class, 'viewAllmemberapplication'])->name('admin.view-all-applications');

/* ADMIN-USERS MANAGEMENT NAVIGATION */
Route::get('/admin-users-management', [AdminController::class, 'viewAllmembers'])->name('admin.view-all-members');
Route::get('/admin-users-management/register', [AdminController::class, 'registerMember'])->name('admin.register-member');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
