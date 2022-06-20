@extends('app.gallery')
@section('title', 'Gallery')
@section('main-title', 'Resources')
@section('breadcrumb', 'Gallery')
@section('page-content')
    <div class="card">
        <div class="card-body">
            <h3 class="card-title text-center">{{ $galleries->title }}</h3>
            <p class="card-text">{{ $galleries->caption }}</p>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach (File::glob('uploads/galleries/' . Carbon\Carbon::createFromFormat('Y-m-d', $galleries->date)->format('Y') . '/' . request()->segment(count(request()->segments())) . '/*') as $path)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset($path) }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
