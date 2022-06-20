@extends('app.news')
@section('title', 'AGIA News')
@section('main-title', 'Resources')
@section('breadcrumb', 'AGIA News')
@section('page-content')
    <div class="container px-5">
        <div class="card border-0">
            <div class="card-header bg-transparent p-0 mb-3">
                <h3>{{ $news->title }}</h3>
                <small class="card-subtitle  text-muted">Date Posted:
                    {{ \Carbon\Carbon::parse($news->created_at)->format('M d Y h:i a') }}</small>
            </div>
            <img src="{{ asset('uploads/news/' . Carbon\Carbon::createFromFormat('Y-m-d', $news->date)->format('Y') . '/' . \Illuminate\Support\Str::slug($news->title, '-')  . '/' . $news->image) }}" class="card-img-top" alt="...">
            <div class="card-body p-0 mt-3">

                <p class="card-text">{{ $news->message }}</p>
            </div>
        </div>
    </div>
@endsection
