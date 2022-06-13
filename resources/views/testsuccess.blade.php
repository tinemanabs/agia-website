@extends('layouts.app')
@section('content')
    <div class="container">
        @if (isset(Auth::user()->username))
            <a href="{{ url('/logout') }}">Logout</a>
        @else
            <script>window.location = "/member-login";</script>
        @endif
    </div>
@endsection