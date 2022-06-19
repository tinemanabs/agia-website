@extends('app.trainings')
@section('title', 'In-House Trainings')
@section('main-title', 'Training and Seminars')
@section('breadcrumb', 'In-House Trainings')
@section('page-content')

    <h1 class="page-heading mb-4">In-House Trainings</h1>
    <div class="card border-0">
        <div class="card-body p-0">
            Initiated by a requesting government agency, wherein the training modules are customized according to its
            requirements. The participants are purely officials/employees of the requesting agency, and may be conducted
            within or outside Metro Manila, upon the option of the requesting agency.
            <br>
            <br>
            For more details, please <a href="{{ route('contactus') }}"> CONTACT US</a>.
        </div>
    </div>

@endsection
