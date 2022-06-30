@extends('layouts.email')
@section('content')
    <tr>
        <td style="background-color: #fff; padding: 30px 30px 0px; ">
            <img src="{{ $message->embed('img/auth-logo.png') }}" alt="Email Icon" srcset=""
                style="display: block; margin-left: auto; margin-right: auto; max-width: 200px">
        </td>
    </tr>
    <tr>
        <td style="background-color: #fff; padding: 10px 30px 0px; ">
            <h1
                style="margin-top:0;font-size:25px; font-weight:bold;letter-spacing:-0.02em; padding:0px 0px 20px; margin:0px; ">
                Account Activated</h1>

            <p
                style=" font-size: 16px; margin-top:15px; color: #6c757d; font-weight:400; margin-right:auto; margin-left:auto; text-align:justify;">
                <strong> Hello! </strong><br><br>Your application has already been approved and you are now a member of
                Association of Government Internal Auditors, Inc.
                Please use the link below to login your account.
            </p>
        </td>
    </tr>
    <tr>
        <td style="background-color: #fff; padding: 0px 30px; border-collapse: collapse;">
            <button style="border: none; background-color:#2A2F89; padding:0.8rem; border-radius: 5px"><a
                    href="{{ url('/member-login') }}" style="text-decoration: none; color:#fff; font-weight:bold;">Login
                    to your account</a></button>
        </td>
    </tr>

    <tr>
        <td style="background-color: #fff; padding: 30px 30px 0px; ">
            <p
                style=" font-size: 16px; margin-top:15px; color: #6c757d; font-weight:400; margin-right:auto; margin-left:auto; text-align:justify;">
                Thanks, <br> AGIA Team</p>
        </td>
    </tr>
@endsection
