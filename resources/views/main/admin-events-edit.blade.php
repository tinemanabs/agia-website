@extends('layouts.main')
@section('title', 'Edit Event')
@section('content')
    <div class="container px-lg-5">
        <a class="btn btn-primary  btn-sm mb-3" href="{{ route('admin.view-all-events') }}" role="button">Back</a>
        <div class="card">
            <div class="card-body">
                <h3 class="mb-3">Edit an Event</h3>
                <form action="{{ route('admin.update-events') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{ $event->id }}">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ $event->title }}">
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Category</label>
                        <select class="form-select" name="category" id="category">
                            <option selected disabled value="">Select Category</option>
                            <option value="CAE Forum" {{ $event->category == 'CAE Forum' ? 'selected' : '' }}>
                                CAE Forum
                            </option>
                            <option value="CSR"
                                {{ $event->category == 'CSR' ? 'selected' : '' }}>CSR</option>
                            <option value="Convention"
                                {{ $event->category == 'Convention' ? 'selected' : '' }}>Convention</option>
                            <option value="Strategic Planning"
                                {{ $event->category == 'Strategic Planning' ? 'selected' : '' }}>Strategic Planning</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Venue</label>
                        <input type="text" name="venue" id="venue" class="form-control" value="{{ $event->venue }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Date</label>
                        <input type="date" name="date" id="date" class="form-control" value="{{ $event->date }}">
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary" type="submit" id="add-events-btn">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
