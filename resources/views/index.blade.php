@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <section id="jumbotron-section">
        <div class="jumbotron homepage">
            <div class="container d-flex align-items-center h-100">
                <div class="landing-page-content">
                    <h1>Verifying Compliance, <br>Partnering for Improvement.</h1>
                    <p>The Association of Government Internal Auditors, Inc. (AGIA) is a Non- Government Organization (NGO)
                        that
                        aims to provide quality seminars and trainings to internal auditors in the Philippines.</p>
                    <a class="btn" href="#" role="button">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-section">
        <div class="container feature-section">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body feature-section-body">
                            <div class="feature-section-icon">
                                <span class="fa-stack fa-2x">
                                    <i class="fa-solid fa-circle fa-stack-2x"></i>
                                    <i class="fa-solid fa-arrow-trend-up fa-stack-1x fa-inverse"></i>
                                </span>
                            </div>
                            <div class="feature-section-content">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum
                                    maxime
                                    harum consequatur amet?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body feature-section-body">
                            <div class="feature-section-icon">
                                <span class="fa-stack fa-2x">
                                    <i class="fa-solid fa-circle fa-stack-2x"></i>
                                    <i class="fa-solid fa-coins fa-stack-1x fa-inverse"></i>
                                </span>
                            </div>
                            <div class="feature-section-content">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum
                                    maxime
                                    harum consequatur amet?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body feature-section-body">
                            <div class="feature-section-icon">
                                <span class="fa-stack fa-2x">
                                    <i class="fa-solid fa-circle fa-stack-2x"></i>
                                    <i class="fa-solid fa-landmark fa-stack-1x fa-inverse"></i>
                                </span>
                            </div>
                            <div class="feature-section-content">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum
                                    maxime
                                    harum consequatur amet?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-us-quick-section">
        <div class="container mt-5">
            <div class="row d-flex justify-content-start align-items-start">
                <div class="col-lg-6 order-lg-last">
                    <img src="{{ asset('img/banner/about-us-img.jpg') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-lg-6 about-us-quick-left">
                    <h2 class="mt-3 mt-lg-0">About Us</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nobis impedit culpa obcaecati,
                        corporis omnis, nostrum rerum accusamus distinctio accusantium id voluptate, sunt veritatis
                        temporibus iste ducimus unde deserunt animi?</p>
                    <div class="card border-0 mb-3 mt-5">
                        <div class="card-body p-0 about-us-quick-card">
                            <div class="about-us-quick-card-icon">
                                <i class="fa-solid fa-diagram-project"></i>
                            </div>
                            <div class="about-us-quick-card-content">
                                <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, quideme</p>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 mb-3">
                        <div class="card-body p-0 about-us-quick-card">
                            <div class="about-us-quick-card-icon">
                                <i class="fa-solid fa-scale-balanced"></i>
                            </div>
                            <div class="about-us-quick-card-content">
                                <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, quideme</p>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 mb-3">
                        <div class="card-body p-0 about-us-quick-card">
                            <div class="about-us-quick-card-icon">
                                <i class="fa-solid fa-bullseye"></i>
                            </div>
                            <div class="about-us-quick-card-content">
                                <h5 class="p-0 m-0">Voluptatem et qui exercitationem</h5>
                                <p class="p-0 m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, quideme</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="message-section">
        <div class="container-fluid divider-message">

            <div class="container divider-message-container">
                <div class="row divider-message-box ">
                    <div class="col-md-8 divider-message-left-content">
                        <span class="fa-stack fa-2x" style="margin-top: -100px">
                            <i class="fa-solid fa-circle fa-stack-2x" style="color: #0077BC"></i>
                            <i class="fa-solid fa-quote-left fa-stack-1x fa-inverse text-center"></i>
                        </span>
                        <h5>President's Message</h5>
                        <p>Greetings of peace, my dear AGIA members, fellow Internal Auditors and co-workers in government!
                            Through the years, AGIA has faced all kinds of challenges and difficulties, including the
                            COVID-19 pandemic which has been assailing our country and the rest of the world for two years
                            now.</p>
                        <div class="d-flex justify-content-end align-items-center flex-row read-more-link">
                            <a href="{{ route('resources.president-message') }}">Read More <span><i
                                        class="fa-solid fa-arrow-right-long ms-2"></i></span></a>
                        </div>

                    </div>
                    <div class="col-md-4 divider-message-right-content text-center d-none d-lg-block">
                        <img src="{{ asset('img/president-img.jpg') }}" alt="">
                        <h4>Marissa N. Fabricante, CICA</h4>
                        <p>AGIA President</p>
                        <p>CY 2022-2023</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    @if (count($news) > 0){{-- NO NEWS SECTION WILL BE SHOWN IF THERE ARE NO RECORDS --}}
        <section id="latest-news-section">
            <div class="container latest-news-section mt-md-5">
                <h2>Latest News</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                <div class="row mt-5">
                    <div class="col-lg-11 col-12">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                            @forelse ($news as $n)
                                <div class="col">
                                    <a href="{{ route('resources.news-single', $n->id) }}" style="text-decoration: none">
                                        <div class="card h-100 latest-news-card border-0">
                                            <img src="{{ asset('/uploads/news/' . \Carbon\Carbon::createFromFormat('Y-m-d', $n->date)->format('Y') . '/' . \Illuminate\Support\Str::slug($n->title, '-') . '/' . $n->image) }}"
                                                class="card-img-top" alt="...">
                                            <div class="card-body latest-news-card-body">
                                                <h5 class="card-title">{{ $n->title }}</h5>

                                                <span class="date">
                                                    <i class="fa-solid fa-calendar me-1"></i>
                                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $n->created_at)->format('F d, Y') }}

                                                    <i class="fa-solid fa-clock ms-3 me-1"></i>
                                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $n->created_at)->format('h:i A') }}
                                                </span>
                                                <p class="card-text">
                                                    {{ \Illuminate\Support\Str::limit($n->message, 150, $end = '...') }}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @empty
                                <div class="card">
                                    <div class="card-body">
                                        There are no latest news.
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>
                    <div class="col-lg-1 col-12 d-flex justify-content-center align-items-center mt-3">

                        <div class="d-lg-block d-none">
                            <a href="{{ route('resources.news', 2022) }}">
                                <span class="fa-stack fa-2x latest-view-all-icon">
                                    <i class="fa-solid fa-circle fa-stack-2x"></i>
                                    <i class="fa-solid fa-arrow-right fa-stack-1x fa-inverse text-center"></i>
                                </span>
                            </a>
                        </div>
                        <div class="d-block d-lg-none">
                            <a href="{{ route('resources.news', 2022) }}" class="btn latest-view-all-btn">View
                                All</a>
                        </div>

                    </div>
                </div>

            </div>
        </section>
    @endif

    <section id="latest-events-section">
        <div class="container latest-events-section mt-5">
            <h2>Scheduled Events</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>

            <div class="row mt-3">
                <div class="col-lg-11 col-12">
                    <div class="row row-cols-1 row-cols-md-4 g-4 mt-3">
                        @forelse ($trainings as $training)
                            <div class="col">
                                <a href="{{ route('training.training-events-single', $training->id) }}"
                                    style="text-decoration: none">
                                    <div class="card h-100 latest-events-card border-0">
                                        <img src="{{ asset('uploads/training/' . $training->image) }}"
                                            class="card-img-top" alt="...">
                                        <div class="card-body latest-events-card-body">
                                            <h5 class="card-title">{{ $training->title }}</h5>
                                            <span class="date">
                                                <i class="fa-solid fa-calendar me-1"></i>
                                                {{ $training->start_date }} to {{ $training->end_date }}
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @empty
                            <div class="card">
                                <div class="card-body">
                                    There are no latest news.
                                </div>
                            </div>
                        @endforelse
                    </div>

                </div>
                <div class="col-lg-1 col-12 d-flex justify-content-center align-items-center mt-3">

                    <div class="d-lg-block d-none">
                        <a href="{{ route('training.training-events') }}">
                            <span class="fa-stack fa-2x latest-view-all-icon">
                                <i class="fa-solid fa-circle fa-stack-2x"></i>
                                <i class="fa-solid fa-arrow-right fa-stack-1x fa-inverse text-center"></i>
                            </span>
                        </a>
                    </div>
                    <div class="d-block d-lg-none">
                        <a href="{{ route('training.training-events') }}" class="btn latest-view-all-btn">View
                            All</a>
                    </div>

                </div>
            </div>


        </div>
    </section>
@endsection
