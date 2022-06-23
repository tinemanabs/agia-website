@extends('layouts.app')
@section('title', 'Reset Password')
@section('content')
    <div class="container auth-container">
        <div class="card auth-card border-0">
            <div class="card-body auth-card-body">
                <div class="text-center">
                    <img src="{{ asset('img/agia-logo-2020.png') }}" alt="">
                </div>

                <h5>Forgot your Password?</h5>
                <p>Enter your email address</p>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-group mb-3 input-form d-flex justify-content-start flex-column">

                        <input id="email" type="email" class="form-control box-input-form" name="email"
                            autofocus="" placeholder="Email Address" value="{{ old('email') }}">
                        <i class="fas fa-envelope"></i>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn w-100 mt-4 auth-btn">Send Password Link</button>
                </form>
            </div>
        </div>
    </div>
@endsection
