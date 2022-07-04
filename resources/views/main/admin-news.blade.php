@extends('layouts.main')
@section('title', 'News Updates')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h5>List of Uploaded News</h5>
                <a class="btn btn-primary" href="{{ route('admin.create-news') }}" role="button"><i
                        class="fa-solid fa-plus"></i></a>
            </div>
            <button class="btn btn-danger" id="multi-delete" data-route="{{ route('multi-delete.news') }}">Delete All
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
                        @forelse ($news as $n)
                            <tr>
                                <td><input type="checkbox" class="check" value="{{ $n->id }}"></td>
                                <th>{{ $n->id }}</th>
                                <td>{{ $n->title }}</td>
                                <td>{{ \Carbon\Carbon::parse($n->date)->format('F d, Y') }}</td>
                                <td>updated at</td>
                                <td>
                                    <button type="button" class="btn btn-circle btn-sm btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#id{{ $n->id }}">
                                        <i class="fa-solid fa-search"></i>
                                    </button>
                                    <a class="btn btn-circle btn-sm btn-success"
                                        href="{{ route('admin.edit-news', $n->id) }}" role="button"><i
                                            class="fa-solid fa-pencil"></i></a>
                                    <form style="display: inline;" action="{{ route('delete.news') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" id="id" value="{{ $n->id }}">
                                        <button class="btn btn-circle btn-sm btn-danger" type="submit">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="id{{ $n->id }}" tabindex="-1" aria-hidden="true">
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
                                                    <div class="col-9">{{ $n->id }}</div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-3"> <strong>Title</strong></div>
                                                    <div class="col-9">{{ $n->title }}</div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-3"> <strong>Date</strong></div>
                                                    <div class="col-9">
                                                        {{ \Carbon\Carbon::parse($n->date)->format('F d, Y') }}</div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-3"> <strong>Body</strong></div>
                                                    <div class="col-9">{{ $n->message }}</div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-3"> <strong>Image</strong></div>
                                                    <div class="col-9"><img
                                                            src="{{ asset('uploads/news/' . \Carbon\Carbon::createFromFormat('Y-m-d', $n->date)->format('Y') . '/' . \Illuminate\Support\Str::slug($n->title, '-') . '/' . $n->image) }}"
                                                            class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

    {{-- FOR VIEW BUTTON --}}

    <!--<button type="button" class="btn btn-circle btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#view-btn">
                                            <i class="fa-solid fa-search"></i>
                                        </button>-->

    <!-- Modal -->
    <div class="modal fade" id="view-btn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row mb-3">
                            <div class="col-3"> <strong>ID</strong></div>
                            <div class="col-9">1</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3"> <strong>Title</strong></div>
                            <div class="col-9">2022 ANNUAL NATIONAL CONVENTION CUM SEMINAR</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3"> <strong>Date</strong></div>
                            <div class="col-9"> June 30, 2022 to June 29, 2022</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3"> <strong>Body</strong></div>
                            <div class="col-9">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis veniam
                                temporibus omnis corrupti neque accusamus nesciunt, id, nobis quia nam ipsam eius beatae
                                incidunt illum debitis asperiores fuga delectus? Libero?</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3"> <strong>Image</strong></div>
                            <div class="col-9"><img src="{{ asset('img/landing-page-img.jpg') }}" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection
