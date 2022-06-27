@extends('layouts.main')
@section('title', 'Downloads')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h5>List of Uploaded Files</h5>
                <a class="btn btn-primary" href="{{ route('admin.create-downloads') }}" role="button"><i
                        class="fa-solid fa-plus"></i></a>
            </div>
            <div class="table-responsive">
                <table class="stripe" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($downloads as $download)
                            <tr>
                                <th>{{ $download->id }}</th>
                                <td>{{ $download->title }}</td>
                                <td>{{ ucfirst($download->category) }}</td>
                                <td><a class="btn btn-circle btn-sm btn-primary" href="#" role="button"><i
                                            class="fa-solid fa-search"></i></a>

                                    <a class="btn btn-circle btn-sm btn-danger" href="#" role="button"><i
                                            class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
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
