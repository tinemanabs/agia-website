@extends('app.news')
@section('title', 'AGIA News')
@section('main-title', 'Resources')
@section('breadcrumb', 'AGIA News')
@section('page-content')
    @if (count($news) > 0)
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($news as $n)
                <div class="col">
                    <a href="{{ route('resources.news-single', $n->id) }}" style="text-decoration: none">
                        <div class="card h-100 latest-news-card border-0">
                            <img src="{{ asset('uploads/news/' . request()->segment(count(request()->segments())) . '/' . \Illuminate\Support\Str::slug($n->title, '-') . '/' . $n->image) }}"
                                class="card-img-top" alt="...">
                            <div class="card-body latest-news-card-body">
                                <h5 class="card-title">{{ $n->title }}</h5>
                                <span class="date">
                                    <i class="fa-regular fa-calendar me-1"></i>
                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $n->created_at)->format('F d, Y') }}

                                    <i class="fa-regular fa-clock ms-3 me-1"></i>
                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $n->created_at)->format('h:i A') }}
                                </span>
                                {{-- <p class="card-text">{{ \Illuminate\Support\Str::limit($n->message, 150, $end = '...') }}
                                </p> --}}

                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    @else
        <div class="card">
            <div class="card-body">There are no records available.</div>
        </div>
    @endif
@endsection
