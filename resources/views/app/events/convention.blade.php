@extends('app.events')
@section('title', 'Convention')
@section('main-title', 'Events')
@section('breadcrumb', 'Convention')
@section('page-content')
    <h1 class="page-heading mb-4">Convention</h1>

    <div class="table-responsive">
        <table class="stripe" id="eventsTable">
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Title of Event</th>
                    <th scope="col">Venue</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($convention as $evt)
                    <tr>
                        <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $evt->date)->format('F d, Y') }}</td>
                        <td>{{ $evt->title }}</td>
                        <td>{{ $evt->venue }}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection
