<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendContact(Request $req) {
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'subject' => $req->subject,
            'message' => $req->message
        ];

        Mail::to('emailtestercorp@gmail.com')->send(new ContactMail($data));

        return back()->with('success','Your inquiry has been submitted!');
    }
}
