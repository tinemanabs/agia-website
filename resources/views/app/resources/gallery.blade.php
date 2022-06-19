@extends('app.gallery')
@section('title', 'Gallery')
@section('main-title', 'Resources')
@section('breadcrumb', 'Gallery')
@section('page-content')
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($galleries as $gallery)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('uploads/' . $gallery->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $gallery->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            {{ \Carbon\Carbon::parse($gallery->created_at)->toFormattedDateString() }}</h6>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('resouces.gallery-single', $gallery->id) }}"
                                class="btn btn-primary stretched-link">View</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

@endsection
