<?php

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

Route::get('/contactus', [PagesController::class, 'contactUspage'])->name('contactus');

Route::get('/member-login', [MemberController::class, 'index'])->name('member-login');
Route::post('/checklogin', [MemberController::class, 'checkLogin']);
Route::get('/successlogin', [MemberController::class, 'successLogin']);
Route::get('/logout', [MemberController::class, 'logout']);

Route::post('/send-contact', [MailController::class, 'sendContact'])->name('send.contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
