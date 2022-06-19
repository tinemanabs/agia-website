@extends('app.trainingevents')
@section('title', 'Training Events')
@section('main-title', 'Training and Seminars')
@section('breadcrumb', 'Training Events')
@section('page-content')
    <div class="card">
        <div class="card-header">
            <h5>Training Title</h5>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Date: </li>
            <li class="list-group-item">Venue:</li>
            <li class="list-group-item">Course Objective: </li>
        </ul>
        <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi similique debitis molestiae
            porro est iusto facilis, eligendi vitae mollitia distinctio corrupti. Facilis velit, culpa ducimus officia
            corrupti accusantium doloribus pariatur.
            <div class="training-event-img mt-3">
                <img src="{{ asset('img/banner/resources-img.jpg') }}" class="img-fluid" alt="...">
            </div>
        </div>
    </div>
@endsection
