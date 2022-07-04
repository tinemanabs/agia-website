@extends('layouts.main')
@section('title', 'Edit Gallery')
@section('content')
    <div class="container px-lg-5">
        <a class="btn btn-primary  btn-sm mb-3" href="{{ route('admin.view-all-gallery') }}" role="button">Back</a>
        <div class="card">
            <div class="card-body">
                <h3 class="mb-3">Edit Gallery</h3>
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label"></label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ $gallery->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Caption</label>
                        <textarea class="form-control" name="caption" id="caption">{{ $gallery->caption }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput3" class="form-label">Date</label>
                        <input type="date" class="form-control" name="date" id="date"
                            value="{{ $gallery->date }}">
                    </div>
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">File Upload</label>
                        <div class="row d-flex align-items-center">
                            <div class="col-md-6 mb-3">
                                <img src="{{ asset('uploads/galleries/' . \Carbon\Carbon::parse($gallery->date)->format('Y') . '/' . $gallery->image) }}"
                                    alt="current uploaded image" srcset="" class="img-fluid">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input class="form-control form-control" name="image" id="image" type="file"
                                    onchange="fileImageValidation()">
                            </div>
                        </div>


                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary" type="submit" id="edit-gallery-btn">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
