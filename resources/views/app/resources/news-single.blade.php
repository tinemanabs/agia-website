@extends('app.news')
@section('title', 'AGIA News')
@section('main-title', 'Resources')
@section('breadcrumb', 'AGIA News')
@section('page-content')
    <div class="container">
        <div class="card single-news-card border-0">
            <div class="card-body single-news-card-body">
                <h3 class="mb-4">{{ $news->title }}</h3>

                <div class="single-news-date mb-4">
                    <h5>AGIA News</h5>
                    <small class="text-muted">Posted at
                        {{ \Carbon\Carbon::parse($news->created_at)->format('M d Y h:i A') }}
                    </small>
                </div>

                <div class="single-news-img mb-4">
                    <img src="{{ asset('uploads/news/' . Carbon\Carbon::createFromFormat('Y-m-d', $news->date)->format('Y') . '/' . \Illuminate\Support\Str::slug($news->title, '-') . '/' . $news->image) }}"
                        class="img-fluid" alt="...">
                </div>

                <div class="single-news-details">
                    <p class="card-text">{{ $news->message }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
