@extends('app.membership')
@section('title', 'Update Membership Profile')
@section('main-title', 'Membership')
@section('breadcrumb', 'Update Membership Profile')
@section('page-content')

    <h1 class="page-heading mb-4">Update Membership Profile</h1>

    <div class="container px-0 px-lg-5">
        <div class="card mt-4">
            <div class="card-body">

                <form action="" method="post">
                    @csrf

                    <h5 class="mb-4">Profile Information</h5>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label"> <strong> Name</strong></label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"> <strong>Username</strong> </label>
                            <input type="text" class="form-control" name="uname" id="uname">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> <strong> Email</strong></label>
                        <input type="email" class="form-control" name="email" id="email" disabled>
                    </div>

                    <hr>

                    <h5 class="mt-4 mb-4">Change Password</h5>

                    <div class="mb-3">
                        <label class="form-label"> <strong>Current Password</strong></label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"> <strong>New Password</strong></label>
                        <input type="password" class="form-control" name="newPassword" id="newPassword">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"> <strong>Confirm Password</strong></label>
                        <input type="password" class="form-control" name="confPassword" id="confPassword">
                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-membership" type="submit" id="update-membership-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
