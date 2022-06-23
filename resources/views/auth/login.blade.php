@extends('layouts.app')
@section('title', 'Admin Login')
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

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mb-3 input-form d-flex justify-content-start flex-column">
                            <input id="email" type="email"
                                class="form-control box-input-form  @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="Email Address">
                            <i class="fas fa-envelope"></i>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group input-form d-flex justify-content-start flex-column">
                            <input id="password" type="password"
                                class="form-control box-input-form @error('password') is-invalid @enderror" name="password"
                                required="" autocomplete="current-password" placeholder="Password">
                            <i class="fas fa-lock"></i>


                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
