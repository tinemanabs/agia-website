@extends('app.membership')
@section('title', 'Membership Application')
@section('main-title', 'Membership')
@section('breadcrumb', 'Membership Application')
@section('page-content')

    @if (!(isset(Auth::user()->username)))

    <h1 class="page-heading m-0 p-0">Membership Application</h1>
    <small class="text-muted m-0 p-0">To apply for membership, please complete the following details.</small>

    <div class="container px-0 px-lg-5">
        <div class="card mt-4">
            <div class="card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <strong>{{ $message }}</strong>
                </div>
            @endif
                <form action="{{ route('send.application') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label"> <strong> Name</strong></label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"> <strong>Email</strong> </label>
                            <input type="email" class="form-control" name="email" id="email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> <strong> Username</strong></label>
                        <input type="text" class="form-control" name="username" id="username"></input>
                        @error('username')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> <strong> Password</strong></label>
                        <input type="password" class="form-control" name="password" id="password"></input>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> <strong>Application Form</strong></label>
                        <input class="form-control" type="file" id="cv" name="cv" onchange="fileValidation();"></input>
                        <small class="text-muted">Only: doc / docx / pdf, less 10mb</small>
                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-membership" type="submit" id="membership-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @else
        @if (Auth::user()->user_role == "0")
            <script>window.location = "/";</script>
        @else
            <h1 class="page-heading m-0 p-0">Membership Application</h1>
            <small class="text-muted m-0 p-0">To apply for membership, please complete the following details.</small>

            <div class="container px-0 px-lg-5">
                <div class="card mt-4">
                    <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                        <form action="{{ route('send.application') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label"> <strong> Name</strong></label>
                                    <input type="text" class="form-control" name="name" id="name">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"> <strong>Email</strong> </label>
                                    <input type="email" class="form-control" name="email" id="email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> <strong> Username</strong></label>
                                <input type="text" class="form-control" name="username" id="username"></input>
                                @error('username')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> <strong> Password</strong></label>
                                <input type="password" class="form-control" name="password" id="password"></input>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> <strong>Application Form</strong></label>
                                <input class="form-control" type="file" id="cv" name="cv" onchange="fileValidation();"></input>
                                <small class="text-muted">Only: doc / docx / pdf, less 10mb</small>
                            </div>

                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-membership" type="submit" id="membership-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    @endif



@endsection
