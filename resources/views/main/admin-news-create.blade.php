@extends('layouts.main')
@section('title', 'News Updates')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="mb-3">Create a News</h3>
            <form action="{{ route('add.news') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Body</label>
                    <textarea class="form-control" name="body" id="body" rows="15"></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFileSm" class="form-label">File Upload</label>
                    <input class="form-control form-control-sm" name="image" id="image" type="file">
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary me-md-2" href="{{ route('admin.view-all-news') }}" role="button">Cancel</a>
                    <button class="btn btn-primary" type="submit" id="add-news-btn">Post</button>
                </div>
            </form>
        </div>
    </div>

@endsection
