<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

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

        $role = User::find($user_data['username']);

        if (Auth::attempt($user_data) && $role == 0) {
            return redirect('/successlogin');
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

}
