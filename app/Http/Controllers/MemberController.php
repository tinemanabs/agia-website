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
        $user = User::where('username', $req->username)->first();

        if ($user) {
            $user_data = array(
                'username' => $req->get('username'),
                'password' => $req->get('password')
            );

            $auth = Auth::attempt($user_data);

            if ($auth) {
                $currentUser = Auth::user();
                if ($currentUser->user_role == '0' && $currentUser->active == 0) {
                    Auth::logout();
                    return back()->with('error', 'Your account is not yet activated!');
                } else if ($currentUser->user_role == '1') {
                    Auth::logout();
                    return back()->with('error', 'The entered credentials does not exist in our records. Please apply for a membership.');
                }
            } else {
                return back()->with('error', 'Invalid login credentials!');
            }

            return redirect('/');

        } else {
            return back()->with('error', 'The entered credentials does not exist in our records. Please apply for a membership.');
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
