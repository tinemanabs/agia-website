@extends('layouts.main')
@section('title', 'Create Gallery')
@section('content')
    <div class="container px-lg-5">
        <a class="btn btn-primary  btn-sm mb-3" href="{{ route('admin.view-all-gallery') }}" role="button">Back</a>
        <div class="card">
            <div class="card-body">
                <h3 class="mb-3">Create a Gallery</h3>
                <form action="{{ route('add.gallery') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Caption</label>
                        <textarea class="form-control" name="caption" id="caption"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput3" class="form-label">Date</label>
                        <input type="date" class="form-control" name="date" id="date"></input>
                    </div>
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">File Upload</label>
                        <input class="form-control form-control" name="image" id="image" type="file" onchange="fileImageValidation()">
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary" type="submit" id="add-gallery-btn">Add to Gallery</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
