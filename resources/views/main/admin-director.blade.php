@extends('layouts.main')
@section('title', 'Board of Directors')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h5>List of Board of Directors</h5>
                <a class="btn btn-primary" href="{{ route('admin.create-directors') }}" role="button"><i
                        class="fa-solid fa-plus"></i></a>
            </div>
            <button class="btn btn-danger" id="multi-delete" data-route="{{ route('multi-delete.directors') }}">Delete All
                Selected</button>
            <div class="table-responsive">
                <table class="stripe" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col"><input type="checkbox" class="check-all" /></th>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Position</th>
                            <th scope="col">Date Modified</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($directors as $director)
                            <tr>
                                <td><input type="checkbox" class="check" value="{{ $director->id }}"></td>
                                <th>{{ $director->id }}</th>
                                <td>{{ $director->name }}</td>
                                <td>{{ str_replace('-', ' ', ucfirst($director->category)) }}</td>
                                <td>{{ $director->position }}</td>
                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $director->updated_at)->format('F d, Y h:i:s A') }}
                                </td>
                                <td>
                                    <a class="btn btn-circle btn-sm btn-success"
                                        href="{{ route('admin.edit-directors', $director->id) }}" role="button"><i
                                            class="fa-solid fa-pencil"></i></a>
                                    <form style="display: inline;" action="{{ route('delete.director') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" id="id" value="{{ $director->id }}">
                                        <button class="btn btn-circle btn-sm btn-danger" type="submit">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
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
