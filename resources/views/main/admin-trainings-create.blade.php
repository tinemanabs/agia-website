@extends('layouts.main')
@section('title', 'Create Training')
@section('content')
    <div class="container px-lg-5">
        <a class="btn btn-primary  btn-sm mb-3" href="{{ route('admin.view-all-training') }}" role="button">Back</a>
        <div class="card">
            <div class="card-body">
                <h3 class="mb-3">Create a Training Event</h3>
                <form action="{{ route('add.training') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Start Date</label>
                            <input type="date" name="startDate" id="startDate" class="form-control">
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">End Date</label>
                            <input type="date" name="endDate" id="endDate" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Venue</label>
                        <input type="text" name="venue" id="venue" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Course Objective</label>
                        <textarea class="form-control" name="courseObj" id="courseObj" rows="5"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Body</label>
                        <textarea class="form-control" name="body" id="body" rows="10"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">File Upload</label>
                        <input class="form-control form-control" name="image" id="image" type="file" onchange="fileImageValidation()">
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                        <button class="btn btn-primary" type="submit" id="add-training-btn">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
