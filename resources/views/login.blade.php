@extends('layouts.app')
@section('content')
    <section class="login-section" id="login-section">
        <div class="login-page-container">
            <div class="row d-flex justify-content-center align-items-center" style="height: 70vh">
                <div class="col-md-6 login-page-bg"></div>
                <div class="col-md-6 p-5">

                    <div class="card p-5 border-0">
                        <div class="card-body">
                            <h1 class="text-center">Welcome to AGIA</h1>
                            <p class="text-center">Login your account</p>
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

                                    <input id="password" type="password" class="form-control box-input-form "
                                        name="password" required="" autocomplete="current-password" placeholder="Password">
                                    <i class="fas fa-lock"></i>
                                    <div id="emailHelp" class="form-text">Enter the password that accompanies your
                                        username.</div>
                                </div>


                                <button type="submit" class="btn w-100 text-white mt-4 "
                                    style="background-color:#12519e;">Login</button>
                            </form>


                            {{-- <form method="post" action="">
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
                            </form> --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
