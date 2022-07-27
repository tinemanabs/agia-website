@extends('layouts.main')
@section('title', 'Edit Advisory Council')
@section('content')
    <div class="container px-lg-5">
        <a class="btn btn-primary  btn-sm mb-3" href="{{ route('admin.view-all-council') }}" role="button">Back</a>
        <div class="card">
            <div class="card-body">
                <h3 class="mb-3">Edit Advisory Council</h3>
                <form action="{{ route('admin.update-council') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{ $council->id }}">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control"
                            value="{{ $council->name }}">
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Detail</label>
                        <input type="text" name="detail" id="detail" class="form-control" value="{{ $council->detail }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Calendar Year</label>
                        <input type="text" name="year" id="year" class="form-control" value="{{ $council->year }}">
                    </div>

                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Image Upload</label>

                        <input class="form-control form-control" name="image" id="image" type="file"
                                    onchange="fileImageValidation()">

                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary" type="submit" id="edit-council-btn">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
