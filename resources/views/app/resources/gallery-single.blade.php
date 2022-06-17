@extends('app.resources')
@section('title', 'Gallery')
@section('main-title', 'Resources')
@section('breadcrumb', 'Gallery')
@section('page-content')
    <div class="card">
        <div class="card-body">
            <h3 class="card-title text-center">CONVENTION SOUVENIR PROGRAM</h3>
            <p class="card-text">Captions</p>
            <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach(File::glob('uploads/galleries/' . request()->segment(count(request()->segments())).'/*') as $path)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset($path) }}" class="card-img-top" alt="...">
                    </div>
                </div>
            <!--    <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('img/banner/resources-img.jpg') }}" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('img/banner/resources-img.jpg') }}" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('img/banner/resources-img.jpg') }}" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('img/banner/resources-img.jpg') }}" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('img/banner/resources-img.jpg') }}" class="card-img-top" alt="...">
                    </div>
                </div> -->
            @endforeach
            </div>
        </div>
    </div>
@endsection
