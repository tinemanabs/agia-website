@extends('layouts.main')
@section('title', 'Edit Secretariat')
@section('content')
    <div class="container px-lg-5">
        <a class="btn btn-primary  btn-sm mb-3" href="{{ route('admin.view-all-secretariat') }}" role="button">Back</a>
        <div class="card">
            <div class="card-body">
                <h3 class="mb-3">Edit Secretariat</h3>
                <form action="{{ route('admin.update-secretariat') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{ $secretariat->id }}">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control"
                            value="{{ $secretariat->name }}">
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Position</label>
                        <input type="text" name="position" id="position" class="form-control" value="{{ $secretariat->position }}">
                    </div>

                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Image Upload</label>

                        <input class="form-control form-control" name="image" id="image" type="file"
                                    onchange="fileImageValidation()">

                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary" type="submit" id="edit-secretariat-btn">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
