<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

/* ABOUT US NAVIGATION */
Route::get('/about-us/what-is-agia', [PagesController::class, 'whatIsAGIApage'])->name('aboutus.what-is-agia');
Route::get('/about-us/vision-mission', [PagesController::class, 'visionMissionpage'])->name('aboutus.vision-mission');
Route::get('/about-us/strategy-map', [PagesController::class, 'strategyMappage'])->name('aboutus.strategy-map');
Route::get('/about-us/board-directors', [PagesController::class, 'boardOfdirectorspage'])->name('aboutus.board-directors');
Route::get('/about-us/advisory-council', [PagesController::class, 'advisoryCouncilpage'])->name('aboutus.advisory-council');
Route::get('/about-us/secretariat', [PagesController::class, 'secretariatpage'])->name('aboutus.secretariat');

/* RESOURCES NAVIGATION */
Route::get('/resources/news', [PagesController::class, 'newsPage'])->name('resources.news');
Route::get('/resouces/news/id', [PagesController::class, 'singleNewsPage'])->name('resources.news-single');
Route::get('/resources/gallery', [PagesController::class, 'galleryPage'])->name('resources.gallery');
Route::get('/resouces/gallery/{id}', [PagesController::class, 'singleGalleryPage'])->name('resouces.gallery-single');

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

/* ADMIN-NEWS NAVIGATION */
Route::get('/admin-news', [AdminController::class, 'viewAllnews'])->name('admin.view-all-news');
Route::get('/admin-create-news', [AdminController::class, 'createNews'])->name('admin.create-news');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
