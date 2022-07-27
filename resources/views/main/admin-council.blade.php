@extends('layouts.main')
@section('title', 'Advisory Council')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h5>List of Advisory Council</h5>
                <a class="btn btn-primary" href="{{ route('admin.create-council') }}" role="button"><i
                        class="fa-solid fa-plus"></i></a>
            </div>
            <button class="btn btn-danger" id="multi-delete" data-route="{{ route('multi-delete.council') }}">Delete All
                Selected</button>
            <div class="table-responsive">
                <table class="stripe" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col"><input type="checkbox" class="check-all" /></th>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Detail</th>
                            <th scope="col">Date Modified</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($council as $c)
                            <tr>
                                <td><input type="checkbox" class="check" value="{{ $c->id }}"></td>
                                <th>{{ $c->id }}</th>
                                <td>{{ $c->name }}</td>
                                <td>{{ $c->detail }}</td>
                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $c->updated_at)->format('F d, Y h:i:s A') }}
                                </td>
                                <td>
                                    <a class="btn btn-circle btn-sm btn-success"
                                        href="{{ route('admin.edit-council', $c->id) }}" role="button"><i
                                            class="fa-solid fa-pencil"></i></a>
                                    <form style="display: inline;" action="{{ route('delete.council') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" id="id" value="{{ $c->id }}">
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
