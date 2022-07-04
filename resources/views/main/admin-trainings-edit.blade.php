@extends('layouts.main')
@section('title', 'Edit a Training Event')
@section('content')
    <div class="container px-lg-5">
        <a class="btn btn-primary  btn-sm mb-3" href="{{ route('admin.view-all-training') }}" role="button">Back</a>
        <div class="card">
            <div class="card-body">
                <h3 class="mb-3">Edit a Training Event</h3>
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ $training->title }}">
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Start Date</label>
                            <input type="datetime-local" name="startDate" id="startDate" class="form-control"
                                value="{{ $training->start }}">
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">End Date</label>
                            <input type="datetime-local" name="endDate" id="endDate" class="form-control"
                                value="{{ $training->end }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Venue</label>
                        <input type="text" name="venue" id="venue" class="form-control"
                            value="{{ $training->venue }}">
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Course Objective</label>
                        <textarea class="form-control" name="courseObj" id="courseObj" rows="5">{{ $training->objective }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Body</label>
                        <textarea class="form-control" name="body" id="body" rows="10">{{ $training->message }}</textarea>
                    </div>

                    <div class="mb-3"><label for="formFileSm" class="form-label">File Upload</label>
                        <div class="row d-flex align-items-center">
                            <div class="col-md-6 mb-3">
                                <img src="{{ asset('uploads/training/' . $training->image) }}"
                                    alt="current uploaded image" class="img-fluid">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input class="form-control form-control" name="image" id="image" type="file"
                                    onchange="fileImageValidation()">
                            </div>
                        </div>


                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                        <button class="btn btn-primary" type="submit" id="edit-training-btn">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
