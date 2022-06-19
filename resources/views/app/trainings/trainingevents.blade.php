@extends('app.trainingevents')
@section('title', 'Training Events')
@section('main-title', 'Training')
@section('breadcrumb', 'Training Events')
@section('page-content')
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('img/banner/resources-img.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Training Event Title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Range Date of Training Event</h6>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('training.training-events-single') }}"
                            class="btn btn-primary stretched-link">View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
