@extends('app.trainings')
@section('title', 'Mobile Trainings')
@section('main-title', 'Training and Seminars')
@section('breadcrumb', 'Mobile Trainings')
@section('page-content')

    <h1 class="page-heading mb-4">Mobile Trainings</h1>
    <div class="card border-0">
        <div class="card-body p-0">
            Planned and scheduled by the AGIA and conducted outside of the regular AGIA training venue, with participants
            coming from different government agencies.
            <br>
            <br>
            For more details, please <a href="{{ route('contactus') }}"> CONTACT US</a>.
        </div>
    </div>

@endsection
