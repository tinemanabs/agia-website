@extends('layouts.main')
@section('title', 'Events')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h5>List of Events</h5>
                <a class="btn btn-primary" href="{{ route('admin.create-events') }}" role="button"><i
                        class="fa-solid fa-plus"></i></a>
            </div>
            <button class="btn btn-danger" id="multi-delete" data-route="{{ route('multi-delete.events') }}">Delete All
                Selected</button>
            <div class="table-responsive">
                <table class="stripe" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col"><input type="checkbox" class="check-all" /></th>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Venue</th>
                            <th scope="col">Date</th>
                            <th scope="col">Date Modified</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($events as $event)
                            <tr>
                                <td><input type="checkbox" class="check" value="{{ $event->id }}"></td>
                                <th>{{ $event->id }}</th>
                                <td>{{ $event->title }}</td>
                                <td>{{ $event->category }}</td>
                                <td>{{ $event->venue }}</td>
                                <td>{{ $event->date }}</td>
                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $event->updated_at)->format('F d, Y h:i:s A') }}
                                </td>
                                <td>
                                    <a class="btn btn-circle btn-sm btn-success"
                                        href="{{ route('admin.edit-events', $event->id) }}" role="button"><i
                                            class="fa-solid fa-pencil"></i></a>
                                    <form style="display: inline;" action="{{ route('delete.events') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" id="id" value="{{ $event->id }}">
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
