<?php

namespace App\Http\Controllers;

use File;
use Hash;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Auth;


class MemberController extends Controller
{
    function index()
    {
        return view('login');
    }

    function checkLogin(Request $req)
    {
        $user_data = array(
            'username' => $req->get('username'),
            'password' => $req->get('password')
        );

        /*$role = User::find($user_data['username']);
        dd($role);*/
        if (Auth::attempt(['username' => $user_data['username'], 'password' => $user_data['password'], 'user_role' => '0', 'active' => 1])) {
            return redirect('/');
        } else {
            return back()->with('error', 'Wrong login details!');
        }
    }

    function successLogin()
    {
        return view('testsuccess');
    }

    function logout()
    {
        Auth::logout();
        return redirect('member-login');
    }

    function sendApplication(Request $req)
    {
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'username' => $req->username,
            'password' => $req->password,
            'cover' => $req->cover,
            'cv' => $req->cv
        ];

        $path = public_path('uploads/resume'); //change to "/" when uploaded to web host
        $attachment = $req->file('cv');

        $name = Str::slug($data['name']) . '-resume-' . time() . '.' . $attachment->getClientOriginalExtension();

        if (!File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }
        $attachment->move($path, $name);

        $data['cv'] = $path . '\\' . $name; //change to "/" when uploaded to web host

        $users = new User();
        $users->name = $data['name'];
        $users->email = $data['email'];
        $users->username = $data['username'];
        $users->password = Hash::make($data['password']);
        $users->cover = $data['cover'];
        $users->cv = $name;
        $users->user_role = "0";
        $users->active = 0;

        $users->save();
        return back()->with('success','Your membership application has been submitted!');
    }

}
