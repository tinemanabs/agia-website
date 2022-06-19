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
                <div class="col-md-6 order-lg-last">
                    <img src="{{ asset('img/banner/about-us-img.jpg') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-md-6 about-us-quick-left">
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
@endsection
