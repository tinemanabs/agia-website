@extends('app.news')
@section('title', 'AGIA News')
@section('main-title', 'Resources')
@section('breadcrumb', 'AGIA News')
@section('page-content')

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('img/banner/resources-img.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">News Heading</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error earum tempore cum
                        soluta possimus fugit eum non, cumque ratione ullam facilis molestiae, quis repudiandae voluptates.
                        Quos dignissimos consectetur iure porro!</p>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('resources.news-single') }}" class="btn btn-primary stretched-link">View</a>
                    </div>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('img/banner/resources-img.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">News Heading</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error earum tempore cum
                        soluta possimus fugit eum non, cumque ratione ullam facilis molestiae, quis repudiandae voluptates.
                        Quos dignissimos consectetur iure porro!</p>
                    <div class="d-flex justify-content-end">
                        <a href="" class="btn btn-primary stretched-link">View</a>
                    </div>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('img/banner/resources-img.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">News Heading</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error earum tempore cum
                        soluta possimus fugit eum non, cumque ratione ullam facilis molestiae, quis repudiandae voluptates.
                        Quos dignissimos consectetur iure porro!</p>
                    <div class="d-flex justify-content-end">
                        <a href="" class="btn btn-primary stretched-link">View</a>
                    </div>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div>
@endsection
