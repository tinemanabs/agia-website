@extends('layouts.main')
@section('title', 'The Secretariat')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h5>List of The Secretariat</h5>
                <a class="btn btn-primary" href="{{ route('admin.create-secretariat') }}" role="button"><i
                        class="fa-solid fa-plus"></i></a>
            </div>
            <button class="btn btn-danger" id="multi-delete" data-route="{{ route('multi-delete.secretariat') }}">Delete All
                Selected</button>
            <div class="table-responsive">
                <table class="stripe" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col"><input type="checkbox" class="check-all" /></th>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Position</th>
                            <th scope="col">Date Modified</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($secretariat as $s)
                            <tr>
                                <td><input type="checkbox" class="check" value="{{ $s->id }}"></td>
                                <th>{{ $s->id }}</th>
                                <td>{{ $s->name }}</td>
                                <td>{{ $s->position }}</td>
                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $s->updated_at)->format('F d, Y h:i:s A') }}
                                </td>
                                <td>
                                    <a class="btn btn-circle btn-sm btn-success"
                                        href="{{ route('admin.edit-secretariat', $s->id) }}" role="button"><i
                                            class="fa-solid fa-pencil"></i></a>
                                    <form style="display: inline;" action="{{ route('delete.secretariat') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" id="id" value="{{ $s->id }}">
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
