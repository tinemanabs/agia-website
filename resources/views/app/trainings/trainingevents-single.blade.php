@extends('app.trainingevents')
@section('title', 'Training Events')
@section('main-title', 'Training and Seminars')
@section('breadcrumb', 'Training Events')
@section('page-content')
    <div class="card">
        <div class="card-header">
            <h5>{{ $trainings->title }}</h5>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Date: {{ \Carbon\Carbon::parse($trainings->start)->format('l, F d, Y')  }} to {{ \Carbon\Carbon::parse($trainings->end)->format('l, F d, Y') }}</li>
            <li class="list-group-item">Venue: {{ $trainings->venue }}</li>
            <li class="list-group-item">Course Objective: {{ $trainings->objective }}</li>
        </ul>
        <div class="card-body">{{ $trainings->message }}
            <div class="training-event-img mt-3">
                <img src="{{ asset('uploads/training/' . $trainings->image) }}" class="img-fluid" alt="...">
            </div>
        </div>
    </div>
@endsection
