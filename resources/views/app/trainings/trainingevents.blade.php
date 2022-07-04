@extends('app.trainingevents')
@section('title', 'Training Events')
@section('main-title', 'Training')
@section('breadcrumb', 'Training Events')
@section('page-content')
    @if (count($trainings) > 0)
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @forelse ($trainings as $training)
                <div class="col">
                    <a href="{{ route('training.training-events-single', $training->id) }}" style="text-decoration: none">
                        <div class="card h-100 training-event-card border-0">
                            <img src="{{ asset('uploads/training/' . $training->image) }}" class="card-img-top"
                                alt="...">
                            <div class="card-body training-event-card-body">
                                <h5 class="card-title mb-4">{{ $training->title }}</h5>
                                <p class="card-text">
                                    <i
                                        class="fa-regular fa-calendar me-2"></i>{{ \Carbon\Carbon::createFromFormat('Y-m-d\TH:i', $training->start)->format('F d, Y h:i A') }}
                                    -
                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d\TH:i', $training->end)->format('F d, Y h:i A') }}

                                </p>
                                <p class="card-text">
                                    <i class="fa-solid fa-location-arrow"></i> {{ $training->venue }}
                                </p>

                            </div>
                        </div>
                    </a>
                </div>
            @empty
            @endforelse
        </div>
    @else
        <div class="card">
            <div class="card-body">There are no records available.</div>
        </div>
    @endif

@endsection
