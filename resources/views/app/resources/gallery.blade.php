@extends('app.resources')
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
                    <h6 class="card-subtitle mb-2 text-muted">{{ \Carbon\Carbon::parse($gallery->created_at)->toFormattedDateString() }}</h6>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('resouces.gallery-single', $gallery->id) }}" class="btn btn-primary stretched-link">View</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- <div class="col">
            <div class="card h-100">
                <img src="{{ asset('img/banner/resources-img.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Convention Souvenir Program</h5>
                    <h6 class="card-subtitle mb-2 text-muted">November 17, 2020</h6>
                    <div class="d-flex justify-content-end">
                        <a href="#" class="btn btn-primary stretched-link">View</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('img/banner/resources-img.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Convention Souvenir Program</h5>
                    <h6 class="card-subtitle mb-2 text-muted">November 17, 2020</h6>
                    <div class="d-flex justify-content-end">
                        <a href="#" class="btn btn-primary stretched-link">View</a>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

@endsection
