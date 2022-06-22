@extends('app.trainingevents')
@section('title', 'Training Events')
@section('main-title', 'Training')
@section('breadcrumb', 'Training Events')
@section('page-content')
    <div class="row row-cols-1 row-cols-md-3 g-4">
    @forelse ($trainings as $training)
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('uploads/training/' . $training->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $training->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ \Carbon\Carbon::parse($training->start)->format('F d, Y') }} to {{ \Carbon\Carbon::parse($training->end)->format('F d, Y')  }}</h6>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('training.training-events-single', $training->id) }}"
                            class="btn btn-primary stretched-link">View</a>
                    </div>
                </div>
            </div>
        </div>
    @empty

    @endforelse
    </div>

@endsection
