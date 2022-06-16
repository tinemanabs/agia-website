@extends('app.aboutus')
@section('title', 'Vision and Mission')
@section('main-title', 'About Us')
@section('breadcrumb', 'Vision and Mission')
@section('page-content')
    <h1 class="page-heading mb-4">Vision and Mission</h1>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card h-100 border-0">
                <div class="card-body vision-mission-card">
                    <span class="fa-stack fa-2x">
                        <i class="fa-solid fa-circle fa-stack-2x"></i>
                        <i class="fa-solid fa-eye fa-stack-1x fa-inverse"></i>
                    </span>

                    <h5 class="card-title">Our Vision</h5>
                    <p class="card-text">A prestigious professional organization of highly competent and trustworthy
                        Internal
                        Auditors and a premiere training institution.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border-0">
                <div class="card-body vision-mission-card">
                    <span class="fa-stack fa-2x">
                        <i class="fa-solid fa-circle fa-stack-2x"></i>
                        <i class="fa-solid fa-bullseye fa-stack-1x fa-inverse"></i>
                    </span>

                    <h5 class="card-title">Our Mission</h5>
                    <p class="card-text">Actively advocate for a high degree of discipline, accountability, integrity and
                        professionalism among all members through provision of continuing professional development to its
                        members and forging partnership with stakeholders.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center mt-3">
        <div class="col">
            <div class="card h-100 border-0">
                <div class="card-body vision-mission-card">
                    <span class="fa-stack fa-2x">
                        <i class="fa-solid fa-circle fa-stack-2x"></i>
                        <i class="fa-solid fa-star fa-stack-1x fa-inverse"></i>
                    </span>

                    <h5 class="card-title">Core Values</h5>
                    <p class="card-text">Integrity <br>
                        Accountability <br>
                        Professionalism</p>
                </div>
            </div>
        </div>
    </div>
@endsection
