@extends('layouts.main')
@section('title', 'Laws and Issuances')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h5>List of Laws and Issuances</h5>
                <a class="btn btn-primary" href="{{ route('admin.create-laws') }}" role="button"><i
                        class="fa-solid fa-plus"></i></a>
            </div>
            <button class="btn btn-danger" id="multi-delete" data-route="{{ route('multi-delete.laws') }}">Delete All
                Selected</button>
            <div class="table-responsive">
                <table class="stripe" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col"><input type="checkbox" class="check-all" /></th>
                            <th scope="col">#</th>
                            <th scope="col">Date</th>
                            <th scope="col">Category</th>
                            <th scope="col">Subject</th>
                            <th scope="col">File</th>
                            <th scope="col">Date Modified</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($laws as $law)
                            <tr>
                                <td><input type="checkbox" class="check" value="{{ $law->id }}"></td>
                                <th>{{ $law->number }}</th>
                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $law->date)->format('F d, Y') }}</td>
                                <td>{{ $law->category }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($law->subject, 50, $end='...') }}</td>
                                @if ($law->file != null)
                                    <td><a href="{{ asset('uploads/lawsandissuances/' . $law->file) }}" target='_blank'>{{ $law->number}}-{{ $law->category }}</a></td>
                                @else
                                    <td></td>
                                @endif
                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $law->updated_at)->format('F d, Y h:i:s A') }}
                                </td>
                                <td>
                                    <a class="btn btn-circle btn-sm btn-success"
                                        href="{{ route('admin.edit-laws', $law->id) }}" role="button"><i
                                            class="fa-solid fa-pencil"></i></a>
                                    <form style="display: inline;" action="{{ route('delete.laws') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" id="id" value="{{ $law->id }}">
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
