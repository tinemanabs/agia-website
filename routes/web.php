<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MemberController;

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\CustomForgotPasswordController;

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
        ->whereDate('start', '>=', date('c'))
        ->orderBy('start', 'asc')
        ->limit(4)
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

/* EVENTS */

Route::get('/events/caeforum', [PagesController::class, 'caeForumPage'])->name('events.caeforum');
Route::get('/events/csr', [PagesController::class, 'csrPage'])->name('events.csr');
Route::get('/events/convention', [PagesController::class, 'conventionPage'])->name('events.convention');
Route::get('/events/strategicplanning', [PagesController::class, 'strategicPlanningPage'])->name('events.strategicplanning');

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
Route::get('/resources/downloads/', [PagesController::class, 'downloadsPage'])->name('resources.downloads');

/* CONTACT US NAVIGATION */
Route::get('/contactus', [PagesController::class, 'contactUspage'])->name('contactus');
Route::post('/send-contact', [MailController::class, 'sendContact'])->name('send.contact');

/* MEMBER LOGIN NAVIGATION */
Route::get('/member-login', [MemberController::class, 'index'])->name('member-login');
Route::post('/checklogin', [MemberController::class, 'checkLogin']);
Route::get('/successlogin', [MemberController::class, 'successLogin']);
Route::post('/change-password', [MemberController::class, 'changePassword'])->name('change.password');
Route::get('/logout', [MemberController::class, 'logout']);

/* ADMIN-GALLERY NAVIGATION */
Route::get('/admin-gallery', [AdminController::class, 'viewAllGallery'])->name('admin.view-all-gallery');
Route::get('/admin-create-gallery', [AdminController::class, 'createGallery'])->name('admin.create-gallery');
Route::post('/add-gallery', [AdminController::class, 'addGallery'])->name('add.gallery');
Route::get('/admin-edit-gallery/{id}', [AdminController::class, 'editGallery'])->name('admin.edit-gallery');
Route::post('/add-images', [AdminController::class, 'addImages'])->name('add.images');
Route::post('/multi-delete-gallery', [AdminController::class, 'multiDeleteGallery'])->name('multi-delete.gallery');
Route::post('/delete-gallery', [AdminController::class, 'deleteGallery'])->name('delete.gallery');
Route::post('/admin-update-gallery', [AdminController::class, 'updateGallery'])->name('admin.update-gallery');

/* ADMIN-NEWS NAVIGATION */
Route::get('/admin-news', [AdminController::class, 'viewAllnews'])->name('admin.view-all-news');
Route::get('/admin-create-news', [AdminController::class, 'createNews'])->name('admin.create-news');
Route::post('/add-news', [AdminController::class, 'addNews'])->name('add.news');
Route::get('/admin-edit-news/{id}', [AdminController::class, 'editNews'])->name('admin.edit-news');
Route::post('/multi-delete-news', [AdminController::class, 'multiDeleteNews'])->name('multi-delete.news');
Route::post('/delete-news', [AdminController::class, 'deleteNews'])->name('delete.news');
Route::post('/admin-update-news', [AdminController::class, 'updateNews'])->name('admin.update-news');

/* ADMIN-TRAININGS NAVIGATION */
Route::get('/admin-trainings', [AdminController::class, 'viewAlltraining'])->name('admin.view-all-training');
Route::get('/admin-create-training', [AdminController::class, 'createTraining'])->name('admin-create-training');
Route::post('/add-training', [AdminController::class, 'addTraining'])->name('add.training');
Route::get('/admin-edit-training/{id}', [AdminController::class, 'editTraining'])->name('admin-edit-training');
Route::post('/multi-delete-training', [AdminController::class, 'multiDeleteTraining'])->name('multi-delete.training');
Route::post('/delete-training', [AdminController::class, 'deleteTraining'])->name('delete.training');
Route::post('/admin-update-training', [AdminController::class, 'updateTraining'])->name('admin.update-training');

/* ADMIN-MEMBERSHIP APPLICATIONS NAVIGATION */
Route::get('/admin-membership-applications', [AdminController::class, 'viewAllmemberapplication'])->name('admin.view-all-applications');
Route::post('/accept-application', [AdminController::class, 'acceptApplication'])->name('accept.application');
Route::post('/multi-delete-application', [AdminController::class, 'multiDeleteApplication'])->name('multi-delete.application');
Route::post('/delete-application', [AdminController::class, 'deleteApplication'])->name('delete.application');

/* ADMIN-USERS MANAGEMENT NAVIGATION */
Route::get('/admin-users-management', [AdminController::class, 'viewAllmembers'])->name('admin.view-all-members');
Route::get('/admin-users-management/register', [AdminController::class, 'registerMember'])->name('admin.register-member');
Route::post('/multi-delete-member', [AdminController::class, 'multiDeleteMember'])->name('multi-delete.member');
Route::post('/delete-member', [AdminController::class, 'deleteMember'])->name('delete.member');

/* ADMIN-DOWNLOADS NAVIGATION */
Route::get('/admin-downloads', [AdminController::class, 'viewAllDownloads'])->name('admin.view-all-downloads');
Route::get('/admin-create-downloads', [AdminController::class, 'createDownloads'])->name('admin.create-downloads');
Route::post('/add-downloads', [AdminController::class, 'addDownloads'])->name('add.downloads');
Route::get('/admin-edit-downloads/{id}', [AdminController::class, 'editDownloads'])->name('admin.edit-downloads');
Route::post('/multi-delete-download', [AdminController::class, 'multiDeleteDownload'])->name('multi-delete.download');
Route::post('/delete-download', [AdminController::class, 'deleteDownload'])->name('delete.download');
Route::post('/admin-update-downloads', [AdminController::class, 'updateDownloads'])->name('admin.update-downloads');

/* ADMIN BOARD OF DIRECTORS NAVIGATION */
Route::get('/admin-boardofdirectors', [AdminController::class, 'viewAllDirectors'])->name('admin.view-all-directors');
Route::get('/admin-create-boardofdirectors', [AdminController::class, 'createDirectors'])->name('admin.create-directors');
Route::post('/add-boardofdirectors', [AdminController::class, 'addDirectors'])->name('add.directors');
Route::get('/admin-edit-boardofdirectors/{id}', [AdminController::class, 'editDirectors'])->name('admin.edit-directors');
Route::post('/admin-update-boardofdirectors', [AdminController::class, 'updateDirectors'])->name('admin.update-directors');
Route::post('/delete-boardofdirector', [AdminController::class, 'deleteDirector'])->name('delete.director');
Route::post('/multi-delete-boardofdirectors', [AdminController::class, 'multiDeleteDirectors'])->name('multi-delete.directors');

/* ADMIN ADVISORY COUNCIL NAVIGATION */
Route::get('/admin-advisorycouncil', [AdminController::class, 'viewAllCouncil'])->name('admin.view-all-council');
Route::get('/admin-create-advisorycouncil', [AdminController::class, 'createCouncil'])->name('admin.create-council');
Route::post('/add-advisorycouncil', [AdminController::class, 'addCouncil'])->name('add.council');
Route::get('/admin-edit-advisorycouncil/{id}', [AdminController::class, 'editCouncil'])->name('admin.edit-council');
Route::post('/admin-update-advisorycouncil', [AdminController::class, 'updateCouncil'])->name('admin.update-council');
Route::post('/delete-advisorycouncil', [AdminController::class, 'deleteCouncil'])->name('delete.council');
Route::post('/multi-delete-advisorycouncil', [AdminController::class, 'multiDeleteCouncil'])->name('multi-delete.council');

/* ADMIN THE SECRETARIAT NAVIGATION */
Route::get('/admin-thesecretariat', [AdminController::class, 'viewAllSecretariat'])->name('admin.view-all-secretariat');
Route::get('/admin-create-thesecretariat', [AdminController::class, 'createSecretariat'])->name('admin.create-secretariat');
Route::post('/add-thesecretariat', [AdminController::class, 'addSecretariat'])->name('add.secretariat');
Route::get('/admin-edit-thesecretariat/{id}', [AdminController::class, 'editSecretariat'])->name('admin.edit-secretariat');
Route::post('/admin-update-thesecretariat', [AdminController::class, 'updateSecretariat'])->name('admin.update-secretariat');
Route::post('/delete-thesecretariat', [AdminController::class, 'deleteSecretariat'])->name('delete.secretariat');
Route::post('/multi-delete-thesecretariat', [AdminController::class, 'multiDeleteSecretariat'])->name('multi-delete.secretariat');

/* ADMIN EVENTS NAVIGATION */
Route::get('/admin-events', [AdminController::class, 'viewAllEvents'])->name('admin.view-all-events');
Route::get('/admin-create-events', [AdminController::class, 'createEvents'])->name('admin.create-events');
Route::post('/add-events', [AdminController::class, 'addEvents'])->name('add.events');
Route::get('/admin-edit-events/{id}', [AdminController::class, 'editEvents'])->name('admin.edit-events');
Route::post('/admin-update-events', [AdminController::class, 'updateEvents'])->name('admin.update-events');
Route::post('/delete-events', [AdminController::class, 'deleteEvents'])->name('delete.events');
Route::post('/multi-delete-events', [AdminController::class, 'multiDeleteEvents'])->name('multi-delete.events');

//Auth::routes();

Route::get('admin-panel', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('admin-panel', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [CustomForgotPasswordController::class, 'submitForgetPasswordForm'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
