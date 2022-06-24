<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ForgotPasswordMail;

use DB;
use Mail; 
use Hash;
use Illuminate\Support\Str;

class CustomForgotPasswordController extends Controller
{
    public function submitForgetPasswordForm(Request $req) 
    {
        $req->validate([
            'email' => 'required|email|exists:users'
        ]);

        $token = Str::random(64);
        $replacedEmail = str_replace("@", "%40", $req->email);

        $data = [
            'email' => $replacedEmail,
            'token' => $token
        ];
  
        DB::table('password_resets')->insert([
            'email' => $req->email, 
            'token' => bcrypt($token)
        ]);

        Mail::to($req->email)->send(new ForgotPasswordMail($data));

        return back()->with('success', 'We have e-mailed your password reset link!');
    }
}
