@extends('layouts.app')
@section('title', 'Reset Password')
@section('content')
    <div class="container auth-container">
        <div class="card auth-card border-0">
            <div class="card-body auth-card-body">
                <div class="text-center">
                    <img src="{{ asset('img/agia-logo-2020.png') }}" alt="">
                </div>

                <h5>Reset your password</h5>
                <p>Enter a new password for your account</p>

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group mb-3 input-form d-flex justify-content-start flex-column">
                        <input id="email" type="email" class="form-control box-input-form" name="email"
                            autofocus="" placeholder="Email Address" value="{{ $email ?? old('email') }}">
                        <i class="fas fa-envelope"></i>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3 input-form d-flex justify-content-start flex-column">
                        <input id="password" type="password" class="form-control box-input-form " name="password"
                            required="" autocomplete="current-password" placeholder="Password">
                        <i class="fas fa-lock"></i>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group input-form d-flex justify-content-start flex-column">
                        <input id="password-confirm" type="password" class="form-control box-input-form"
                            name="password_confirmation" required autocomplete="new-password"
                            placeholder="Confirm Password">
                        <i class="fas fa-lock"></i>
                    </div>

                    <button type="submit" class="btn w-100 mt-4 auth-btn">Reset Password</button>
                </form>
            </div>
        </div>
    </div>
@endsection
