@extends('app.trainingevents')
@section('title', 'Training Events')
@section('main-title', 'Training')
@section('breadcrumb', 'Training Events')
@section('page-content')
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @forelse ($trainings as $training)
            <div class="col">
                <a href="{{ route('training.training-events-single', $training->id) }}" style="text-decoration: none">
                    <div class="card h-100 training-event-card border-0">
                        <img src="{{ asset('uploads/training/' . $training->image) }}" class="card-img-top" alt="...">
                        <div class="card-body training-event-card-body">
                            <h5 class="card-title mb-4">{{ $training->title }}</h5>
                            <p class="card-text">
                                @if ($training->end != null)
                                <i
                                    class="fa-regular fa-calendar me-2"></i>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $training->start)->format('F d, Y') }}
                                -
                                {{ \Carbon\Carbon::createFromFormat('Y-m-d', $training->end)->format('F d, Y') }}
                                @else
                                <i
                                    class="fa-regular fa-calendar me-2"></i>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $training->start)->format('F d, Y') }}
                                @endif

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

@endsection
