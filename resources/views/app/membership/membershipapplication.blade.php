@extends('app.membership')
@section('title', 'Membership Application')
@section('main-title', 'Membership')
@section('breadcrumb', 'Membership Application')
@section('page-content')

    <h1 class="page-heading m-0 p-0">Membership Application</h1>
    <small class="text-muted m-0 p-0">To apply for membership, please complete the following details.</small>

    <div class="container px-0 px-lg-5">
        <div class="card mt-4">
            <div class="card-body">
                <form action="" method="post">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label"> <strong> Name</strong></label>
                            <input type="text" class="form-control" name="name" id="">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"> <strong>Email</strong> </label>
                            <input type="email" class="form-control" name="email" id="">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> <strong> Cover Letter</strong></label>
                        <textarea class="form-control" rows="3" name="cv"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> <strong>Resume</strong></label>
                        <input class="form-control" type="file" id="formFile" name="resumeFile">
                        <small class="text-muted">Only: doc / docx / pdf, less ?mb</small>
                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-membership" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection
