@extends('layouts.main')
@section('title', 'Create Event')
@section('content')
    <div class="container px-lg-5">
        <a class="btn btn-primary  btn-sm mb-3" href="{{ route('admin.view-all-events') }}" role="button">Back</a>
        <div class="card">
            <div class="card-body">
                <h3 class="mb-3">Add an Event</h3>
                <form action="{{ route('add.events') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Category</label>
                        <select class="form-select" name="category" id="category">
                            <option selected disabled value="">Select Category</option>
                            <option value="CAE Forum">CAE Forum</option>
                            <option value="CSR">CSR</option>
                            <option value="Convention">Convention</option>
                            <option value="Strategic Planning">Strategic Planning</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Venue</label>
                        <input type="text" name="venue" id="venue" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Date</label>
                        <input type="date" name="date" id="date" class="form-control">
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary" type="submit" id="add-events-btn">Add to Events</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
