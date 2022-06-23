@extends('layouts.main')
@section('title', 'Trainings')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h5>List of Scheduled Trainings</h5>
                <a class="btn btn-primary" href="{{ route('admin-create-training') }}" role="button"><i
                        class="fa-solid fa-plus"></i></a>
            </div>
            <div class="table-responsive">
                <table class="stripe" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Training Date</th>
                            <th scope="col">Title</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($trainings as $training)
                            <tr>
                                <th>{{ $training->id }}</th>
                                @if ($training->end != null)
                                <td>{{ \Carbon\Carbon::parse($training->start)->format('F d, Y') }} to {{ \Carbon\Carbon::parse($training->end)->format('F d, Y') }}</td>
                                @else
                                <td>{{ \Carbon\Carbon::parse($training->start)->format('F d, Y') }}</td>
                                @endif
                                <td>{{ $training->title }}</td>
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
