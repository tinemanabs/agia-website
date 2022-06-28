@extends('app.gallery')
@section('title', 'Gallery')
@section('main-title', 'Resources')
@section('breadcrumb', 'Gallery')
@section('page-content')
    @if (count($galleries) > 0)
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($galleries as $gallery)
                <div class="col">
                    <div class="card h-100 gallery-card">
                        <img src="{{ asset('uploads/galleries/' . request()->segment(count(request()->segments())) . '/' . $gallery->image) }}"
                            class="card-img-top" alt="...">
                        <div class="card-body gallery-card-body">
                            <h5 class="card-title">{{ $gallery->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted mt-2">
                                <i class="fa-regular fa-calendar me-1"></i>
                                {{ \Carbon\Carbon::parse($gallery->date)->toFormattedDateString() }}
                            </h6>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('resouces.gallery-single', $gallery->id) }}"
                                    class="btn stretched-link">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="card">
            <div class="card-body">There are no records available.</div>
        </div>
    @endif

@endsection
