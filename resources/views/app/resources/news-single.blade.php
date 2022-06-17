@extends('app.resources')
@section('title', 'AGIA News')
@section('main-title', 'Resources')
@section('breadcrumb', 'AGIA News')
@section('page-content')
    <div class="container px-5">
        <div class="card border-0">
            <div class="card-header bg-transparent p-0 mb-3">
                <h3>News Title</h3>
                <small class="card-subtitle  text-muted">Date Posted:</small>
            </div>
            <img src="{{ asset('img/banner/resources-img.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body p-0 mt-3">

                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur beatae est fugit
                    nobis
                    optio perferendis, magni voluptatibus quis, id delectus iure exercitationem nisi atque a illo, minus ea.
                    Repellendus, quo?</p>
            </div>
        </div>
    </div>
@endsection
