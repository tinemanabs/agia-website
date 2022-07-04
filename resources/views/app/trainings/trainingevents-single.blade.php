@extends('app.trainingevents')
@section('title', 'Training Events')
@section('main-title', 'Training and Seminars')
@section('breadcrumb', 'Training Events')
@section('page-content')

    {{-- <div class="card">
        <div class="card-header">
            <h5>{{ $trainings->title }}</h5>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Date: {{ \Carbon\Carbon::parse($trainings->start)->format('H:i A')  }} to {{ \Carbon\Carbon::parse($trainings->end)->format('H:i A') }}</li>
            <li class="list-group-item">Venue: {{ $trainings->venue }}</li>
            <li class="list-group-item">Course Objective: {{ $trainings->objective }}</li>
        </ul>
        <div class="card-body">{{ $trainings->message }}
            <div class="training-event-img mt-3">
                <img src="{{ asset('uploads/training/' . $trainings->image) }}" class="img-fluid" alt="...">
            </div>
        </div>
    </div> --}}

    <div class="container">
        <div class="card single-training-evt border-0">
            <div class="card-body">
                <h3 class="mb-4">{{ $trainings->title }}</h3>
                <h5 class="mb-4">AGIA Training Events and Seminars</h5>

                <div class="single-training-evt-details">
                    <strong>Date:</strong> {{ \Carbon\Carbon::parse($trainings->start)->format('l, F d, Y H:i A') }} to
                    {{ \Carbon\Carbon::parse($trainings->end)->format('l, F d, Y H:i A') }}
                </div>

                <hr>

                <div class="single-training-evt-details">
                    <strong>Venue:</strong> {{ $trainings->venue }}
                </div>
                <hr>


                <div class="single-training-evt-details">
                    <strong>Course Objective:</strong>
                    <p>{{ $trainings->objective }}</p>
                </div>
                <hr>

                <div class="single-training-evt-details">
                    <p>{{ $trainings->message }}</p>
                </div>

                <div class="single-training-evt-img">
                    <img src="{{ asset('uploads/training/' . $trainings->image) }}" class="img-fluid" alt="...">
                </div>


            </div>
        </div>
    </div>
@endsection
