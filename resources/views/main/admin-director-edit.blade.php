@extends('layouts.main')
@section('title', 'Edit Board of Director')
@section('content')
    <div class="container px-lg-5">
        <a class="btn btn-primary  btn-sm mb-3" href="{{ route('admin.view-all-directors') }}" role="button">Back</a>
        <div class="card">
            <div class="card-body">
                <h3 class="mb-3">Edit Board of Director</h3>
                <form action="{{ route('admin.update-directors') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{ $director->id }}">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control"
                            value="{{ $director->name }}">
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Category</label>
                        <select class="form-select" name="category" id="category">
                            <option selected disabled value="">Select Category</option>
                            <option value="officer" {{ $director->category == 'officer' ? 'selected' : '' }}>
                                Officer
                            </option>
                            <option value="board-member"
                                {{ $director->category == 'board-member' ? 'selected' : '' }}>Board Member</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Position</label>
                        <input type="text" name="position" id="position" class="form-control" value="{{ $director->position }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Details 1</label>
                        <input type="text" name="details1" id="details1" class="form-control" value="{{ $director->detail1 }}">
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Details 2</label>
                        <input type="text" name="details2" id="details2" class="form-control" value="{{ $director->detail2 }}">
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Details 3</label>
                        <input type="text" name="details3" id="details3" class="form-control" value="{{ $director->detail3 }}">
                    </div>

                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Image Upload</label>

                        <input class="form-control form-control" name="image" id="image" type="file"
                                    onchange="fileImageValidation()">

                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary" type="submit" id="edit-directors-btn">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
