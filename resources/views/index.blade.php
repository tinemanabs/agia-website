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
                                                    <i class="fa-regular fa-calendar me-1"></i>
                                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $n->created_at)->format('F d, Y') }}

                                                    <i class="fa-regular fa-clock ms-3 me-1"></i>
                                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $n->created_at)->format('h:i A') }}
                                                </span>
                                                {{-- <p class="card-text">
                                                    {{ \Illuminate\Support\Str::limit($n->message, 150, $end = '...') }}
                                                </p> --}}
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
                    @if (count($news) >= 4)
                        {{-- show only if there are already 4 news --}}
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
                    @endif
                </div>

            </div>
        </section>
    @endif

    @if (count($trainings) > 0){{-- NO TRAINING SECTION WILL BE SHOWN IF THERE ARE NO RECORDS --}}
        <section id="latest-events-section">
            <div class="container latest-events-section mt-5">
                <h2>Upcoming Events</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>

                <div class="row row-cols-1 row-cols-lg-2 g-4 mt-4">
                    @forelse ($trainings as $training)
                        <div class="col">
                            <a href="{{ route('training.training-events-single', $training->id) }}"
                                style="text-decoration: none">
                                <div class="card mb-3 latest-events-card">
                                    <div class="row g-0">
                                        <div class="col-md-4 latest-events-card-img p-4"
                                            style=" background-image: linear-gradient(rgba(27, 47, 69, 0.70), rgba(27, 47, 69, 0.70)), url('uploads/training/{{ $training->image }}');">
                                            <h1>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $training->start)->format('d') }}
                                            </h1>
                                            <p>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $training->start)->format('M, Y') }}
                                            </p>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body latest-events-card-body h-100">
                                                <h5 class="card-title mb-4">{{ $training->title }}</h5>
                                                <p class="card-text">
                                                    @if ($training->end != null)
                                                        <i
                                                            class="fa-regular fa-calendar me-2"></i>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $training->start)->format('F d, Y') }}

                                                        -
                                                        {{ \Carbon\Carbon::createFromFormat('Y-m-d', $training->end)->format('F d, Y') }}
                                                    @else
                                                        <i
                                                            class="fa-regular fa-calendar me-2"></i>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $training->start)->format('F d, Y') }}
                                                    @endif

                                                </p>
                                                <p class="card-text">
                                                    <i class="fa-solid fa-location-arrow"></i> {{ $training->venue }}
                                                </p>


                                            </div>
                                        </div>
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

                {{-- @if (count($trainings) >= 4)
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="{{ route('training.training-events') }}" class="btn latest-view-all-btn">View
                            All</a>
                    </div>
                @endif --}}

            </div>
        </section>
    @endif


    <section id="contact-us-section">
        <div class="container mt-5 contact-us-section">
            <div class="card contact-us-card border-0 shadow p-3 mb-5 bg-body rounded">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <iframe style="border:0; width: 100%; height: 100%;"
                                src="https://maps.google.com/maps?q=association%of%government%internal Auditors&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="col-lg-6 p-2">
                            <h1 class="text-center">Contact Us</h1>
                            <h2 class="text-center mb-3">Send us a Message</h2>
                            @if (Session::get('success'))
                                <div class="alert alert-success">
                                    <strong>{{ Session::get('success') }}</strong>
                                </div>
                            @endif
                            <form action="{{ route('send.contact') }}" method="post">
                                @csrf
                                <div class="row mt-5">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Email">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject">
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" name="message" id="message" rows="10" placeholder="Message"></textarea>
                                </div>

                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-contact-us text-white" type="submit" id="contactus-btn">Send
                                        Message</button>
                                </div>

                            </form>
                        </div>
                    </div>

                    <div class="row row-cols-1 row-cols-lg-3 g-4 mt-3">
                        <div class="col">
                            <div class="card h-100 border-0">
                                <div class="card-body contact-us-card-body p-0">
                                    <div class="contact-us-card-icon">
                                        <span class="fa-stack fa-2x">
                                            <i class="fa-solid fa-circle fa-stack-2x"></i>
                                            <i class="fa-solid fa-location-dot fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </div>
                                    <div class="contact-us-card-content">
                                        <h5 class="card-title">Office Address</h5>
                                        <p class="card-text">Unit 402 Merchant Square Condominium,
                                            1386 E. Rodriguez Sr. Avenue Cor. Mabolo St.
                                            New Manila, Quezon City</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 border-0">
                                <div class="card-body contact-us-card-body p-0">
                                    <div class="contact-us-card-icon">
                                        <span class="fa-stack fa-2x">
                                            <i class="fa-solid fa-circle fa-stack-2x"></i>
                                            <i class="fa-solid fa-phone fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </div>
                                    <div class="contact-us-card-content">
                                        <h5 class="card-title">Contact</h5>
                                        <p class="card-text">(02) 7 739-0045 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 border-0">
                                <div class="card-body contact-us-card-body p-0">
                                    <div class="contact-us-card-icon">
                                        <span class="fa-stack fa-2x">
                                            <i class="fa-solid fa-circle fa-stack-2x"></i>
                                            <i class="fa-solid fa-envelope fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </div>
                                    <div class="contact-us-card-content">
                                        <h5 class="card-title">Email Addresses</h5>
                                        <p class="card-text m-0">info@agiaph.org</p>
                                        {{-- <p class="card-text m-0">membership@agiaph.org</p>
                                        <p class="card-text m-0">trainings.agiainc@gmail.com</p>
                                        <p class="card-text m-0">actg.agia@gmail.com</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
