@extends('layouts.app')
@section('title', 'Member Login')
@section('content')
    <section class="login-section" id="login-section">
        <div class="container auth-container mt-5">
            <div class="card auth-card border-0">
                <div class="card-body auth-card-body">
                    <div class="text-center">
                        <img src="{{ asset('img/agia-logo-2020.png') }}" alt="">
                    </div>

                    <h5>Log In</h5>
                    <p>Login to your Account</p>

                    @if (isset(Auth::user()->email))
                        <script>
                            window.location = "/successlogin";
                        </script>
                    @endif

                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    <form method="POST" action="{{ url('/checklogin') }}">
                        @csrf
                        <div class="form-group mb-3 input-form d-flex justify-content-start flex-column">

                            <input id="uname" type="text" class="form-control box-input-form" name="username"
                                autofocus="" placeholder="Username">
                            <i class="fas fa-envelope"></i>
                            <div id="emailHelp" class="form-text">Enter your Association of Government Internal
                                Auditors, Inc. username.</div>
                        </div>
                        <div class="form-group input-form d-flex justify-content-start flex-column">
                            <input id="password" type="password" class="form-control box-input-form " name="password"
                                required="" autocomplete="current-password" placeholder="Password">
                            <i class="fas fa-lock"></i>
                            <div id="emailHelp" class="form-text">Enter the password that accompanies your
                                username.</div>
                        </div>

                        <div class="d-flex justify-content-end mt-4">
                            <a href="{{ route('password.request') }}" class="forgot-pw-link">Forgot your password?</a>
                        </div>

                        <button type="submit" class="btn w-100 mt-4 auth-btn" id="login-btn">Login</button>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
