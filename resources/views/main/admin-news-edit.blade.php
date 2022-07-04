@extends('layouts.main')
@section('title', 'Edit News Update')
@section('content')
    <div class="container px-lg-5">
        <a class="btn btn-primary btn-sm mb-3" href="{{ route('admin.view-all-news') }}" role="button">Back</a>
        <div class="card">
            <div class="card-body">
                <h3 class="mb-3">Edit a News</h3>
                <form action="{{ route('admin.update-news') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{ $news->id }}">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ $news->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Body</label>
                        <textarea class="form-control" name="body" id="body" rows="15">{{ $news->message }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput3" class="form-label">Date</label>
                        <input type="date" class="form-control" name="date" id="date"
                            value="{{ $news->date }}">
                    </div>
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">File Upload</label>
                        <div class="row d-flex align-items-center">
                            <div class="col-md-6 mb-3">
                                <img src="{{ asset('uploads/news/' . \Carbon\Carbon::parse($news->date)->format('Y') . '/' . \Illuminate\Support\Str::slug($news->title, '-') . '/' . $news->image) }}"
                                    alt="current uploaded image" class="img-fluid">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input class="form-control form-control" name="image" id="image" type="file"
                                    onchange="fileImageValidation()">
                            </div>
                        </div>


                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary" type="submit" id="edit-news-btn">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
