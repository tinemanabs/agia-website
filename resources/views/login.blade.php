@extends('layouts.app')
@section('content')
    <div class="container">
        @if(isset(Auth::user()->email))
            <script>window.location="/successlogin";</script>
        @endif

        @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">	
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <form method="post" action="{{ url('/checklogin') }}">
            @csrf
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" />
            </div>
            <div class="form-group"><button type="submit" id="login-btn">Login</button></div>
        </form>
    </div>
@endsection