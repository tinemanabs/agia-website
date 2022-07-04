@extends('layouts.main')
@section('title', 'Edit Downloads')
@section('content')
    <div class="container px-lg-5">
        <a class="btn btn-primary  btn-sm mb-3" href="{{ route('admin.view-all-downloads') }}" role="button">Back</a>
        <div class="card">
            <div class="card-body">
                <h3 class="mb-3">Edit Downloads</h3>
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ $download->title }}">
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Category</label>
                        <select class="form-select" name="category" id="category">
                            <option selected disabled value="">Select Category</option>
                            <option value="forms" {{ $download->category == 'forms' ? 'selected' : '' }}>Forms</option>
                            <option value="invitation" {{ $download->category == 'invitation' ? 'selected' : '' }}>
                                Invitation
                            </option>
                            <option value="lecture-materials"
                                {{ $download->category == 'lecture-materials' ? 'selected' : '' }}>Lecture
                                Materials</option>
                            <option value="others" {{ $download->category == 'others' ? 'selected' : '' }}>Others</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">File Upload</label>
                        {{-- incase; the file uploaded should be edited
                        <div class="row d-flex align-items-center">
                            <div class="col-md-6 mb-3">
                                <a href="{{ asset('uploads/downloads/' . $download->category . '/' . $download->title) }}"
                                    target="_blank" rel="noopener noreferrer">
                                    name of the file
                                </a>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input class="form-control form-control" name="files[]" id="files" type="file"
                                    onchange="multipleFileValidation()" multiple>
                            </div>
                        </div> --}}

                        <input class="form-control form-control" name="files[]" id="files" type="file"
                            onchange="multipleFileValidation()" multiple>

                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary" type="submit" id="edit-downloads-btn">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
