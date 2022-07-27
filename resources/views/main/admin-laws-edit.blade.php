@extends('layouts.main')
@section('title', 'Edit Laws and Issuances')
@section('content')
    <div class="container px-lg-5">
        <a class="btn btn-primary  btn-sm mb-3" href="{{ route('admin.view-all-laws') }}" role="button">Back</a>
        <div class="card">
            <div class="card-body">
                <h3 class="mb-3">Edit Law/Issuance</h3>
                <form action="{{ route('admin.update-laws') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{ $law->id }}">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">No.</label>
                        <input type="text" name="number" id="number" class="form-control"
                            value="{{ $law->number }}">
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Category</label>
                        <select class="form-select" name="category" id="category">
                            <option selected disabled value="">Select Category</option>
                            <option value="Republic Act" {{ $law->category == 'Republic Act' ? 'selected' : '' }}>
                                Republic Act
                            </option>
                            <option value="Presidential Decree"
                                {{ $law->category == 'Presidential Decree' ? 'selected' : '' }}>Presidential Decree</option>
                            <option value="Executive Order"
                                {{ $law->category == 'Executive Order' ? 'selected' : '' }}>Executive Order</option>
                            <option value="Administrative Orders"
                                {{ $law->category == 'Administrative Orders' ? 'selected' : '' }}>Administrative Orders</option>
                            <option value="DBM Circulars"
                                {{ $law->category == 'DBM Circulars' ? 'selected' : '' }}>DBM Circulars</option>
                            <option value="Memorandum Circulars"
                                {{ $law->category == 'Memorandum Circulars' ? 'selected' : '' }}>Memorandum Circulars</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Date</label>
                        <input type="date" name="date" id="date" class="form-control" value="{{ $law->date }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Subject</label>
                        <input type="text" name="subject" id="subject" class="form-control" value="{{ $law->subject }}">
                    </div>

                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">File Upload</label>

                        <input class="form-control form-control" name="files" id="files" type="file" onchange="fileValidation()">

                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary" type="submit" id="add-laws-btn">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
