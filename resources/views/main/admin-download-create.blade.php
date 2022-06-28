@extends('layouts.main')
@section('title', 'Create Downloads')
@section('content')
    <div class="container px-lg-5">
        <a class="btn btn-primary  btn-sm mb-3" href="{{ route('admin.view-all-downloads') }}" role="button">Back</a>
        <div class="card">
            <div class="card-body">
                <h3 class="mb-3">Create a Downloads</h3>
                <form action="{{ route('add.downloads') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Category</label>
                        <select class="form-select" name="category" id="category">
                            <option selected disabled value="">Select Category</option>
                            <option value="forms">Forms</option>
                            <option value="invitation">Invitation</option>
                            <option value="lecture-materials">Lecture Materials</option>
                            <option value="others">Others</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">File Upload</label>
                        <input class="form-control form-control" name="files[]" id="files" type="file" onchange="multipleFileValidation()" multiple>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary" type="submit" id="add-downloads-btn">Add to Downloads</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
