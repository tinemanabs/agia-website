@extends('layouts.app')
@section('content')
    <div class="container">
        <?php $role = Auth::user()->user_role; ?>
            @if (isset(Auth::user()->username) && $role === "0")
                <a href="{{ url('/logout') }}">Logout</a>
            @else
                <?php Auth::logout(); ?>
                <script>window.location = "/member-login";</script>
            @endif
    </div>
@endsection