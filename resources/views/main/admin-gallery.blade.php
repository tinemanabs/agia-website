@extends('layouts.main')
@section('title', 'Gallery')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h5>List of Uploaded Gallery</h5>
                <a class="btn btn-primary" href="{{ route('admin.create-gallery') }}" role="button"><i
                        class="fa-solid fa-plus"></i></a>
            </div>
            <button class="btn btn-danger" id="multi-delete" data-route="{{ route('multi-delete.gallery') }}">Delete All
                Selected</button>
            <div class="table-responsive">
                <table class="stripe" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col"><input type="checkbox" class="check-all" /></th>
                            <th scope="col">#</th>

                            <th scope="col">Title</th>
                            <th scope="col">Date Posted</th>
                            <th scope="col">Date Modified</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($galleries as $gallery)
                            <tr>
                                <td><input type="checkbox" class="check" value="{{ $gallery->id }}"></td>
                                <th>{{ $gallery->id }}</th>
                                <td>{{ \Illuminate\Support\Str::limit($gallery->title, 50, $end='...') }}</td>
                                <td>{{ \Carbon\Carbon::parse($gallery->created_at)->format('F d, Y H:i:s A') }}</td>
                                <td>{{ \Carbon\Carbon::parse($gallery->updated_at)->format('F d, Y  H:i:s A') }}</td>
                                <td><button class="btn btn-circle btn-sm btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#id{{ $gallery->id }}" role="button"><i
                                            class="fa-solid fa-search"></i></button>
                                    <a class="btn btn-circle btn-sm btn-success"
                                        href="{{ route('admin.edit-gallery', $gallery->id) }}" role="button"><i
                                            class="fa-solid fa-pencil"></i></a>
                                    <form action="{{ route('delete.gallery') }}" method="post" style="display: inline;">
                                        @csrf
                                        <input type="hidden" name="id" id="id" value="{{ $gallery->id }}">
                                        <button class="btn btn-circle btn-sm btn-danger" role="button"><i
                                                class="fa-solid fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>

                            <!-- Modal -->
                            <div class="modal fade" id="id{{ $gallery->id }}" tabindex="-1"
                                aria-labelledby="viewModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="row mb-3">
                                                    <div class="col-3"> <strong>ID</strong></div>
                                                    <div class="col-9">{{ $gallery->id }}</div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-3"> <strong>Title</strong></div>
                                                    <div class="col-9">{{ $gallery->title }}</div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-3"> <strong>Date</strong></div>
                                                    <div class="col-9">
                                                        {{ \Carbon\Carbon::parse($gallery->date)->format('F d, Y') }}
                                                    </div>
                                                </div>
                                                <form action="{{ route('add.images') }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id" id="id"
                                                        value="{{ $gallery->id }}">
                                                    <div class="mb-3">
                                                        <label for="formFileSm" class="form-label">File Upload</label>
                                                        <input class="form-control form-control-sm" name="images[]"
                                                            id="images" type="file" multiple
                                                            onchange="multipleImageValidation()">
                                                    </div>
                                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                        <a class="btn btn-primary me-md-2"
                                                            href="{{ route('admin.view-all-gallery') }}"
                                                            role="button">Cancel</a>
                                                        <button class="btn btn-primary" type="submit"
                                                            id="add-gallery-btn">Add to Gallery</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- End of Modal -->
                        @empty
                            <tr>
                                <td colspan="8">
                                    <div class="card-header border-0 text-center">No data available in table</div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
