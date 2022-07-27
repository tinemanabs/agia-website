<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Full Calendar CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.css">

    <!-- Data Tables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!--- Favicon -->
    <link rel="icon" href="{{ asset('img/agia-logo-2020.png') }}" type="image/png" sizes="16x16">

    <!-- PLUGINS -->

    <!-- JQuery Link -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>@yield('title') | Association of Government Internal Auditors, Inc.</title>

</head>

<body>
    <div id="app">
        <!-- NAVBAR -->

        <!-- FIRST LAYER -->
        <div id="navbar-container">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('/img/agia-logo-2020.png') }}" alt="" class="img-fluid"
                            width="90">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars"></i>
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <div class="row @if (isset(Auth::user()->username) && Auth::user()->user_role == '0') me-auto @else ms-auto @endif">
                            <div class="col-lg-8 col-md-12 mt-3 mt-lg-0 order-md-last">
                                <form class="d-flex">
                                    <input class="form-control me-2" type="search" placeholder="Search"
                                        aria-label="Search">
                                    <button class="btn btn-primary search-btn" type="submit">Search</button>
                                </form>
                            </div>
                            <div class="col-lg-4 col-md-12 mt-3 mt-lg-0 d-flex justify-content-center">
                                <ul class="navbar-nav mb-2 mb-lg-0 flex-row">
                                    <li class="nav-item px-md-3 px-5 p-lg-0">
                                        <a href="" class="nav-link top-nav-icons"> <i
                                                class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li class="nav-item px-md-3 px-5 p-lg-0">
                                        <a href="" class="nav-link top-nav-icons"> <i
                                                class="fa-brands fa-twitter"></i></a>
                                    </li>
                                    <li class="nav-item px-md-3 px-5 p-lg-0">
                                        <a href="" class="nav-link top-nav-icons"> <i
                                                class="fa-brands fa-youtube"></i></a>
                                    </li>
                                    <li class="nav-item px-md-3 px-5 p-lg-0">
                                        <a href="" class="nav-link top-nav-icons"> <i
                                                class="fa-solid fa-paper-plane"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <span class="navbar-text ms-3 member-login d-none d-lg-block">
                            @if (isset(Auth::user()->username) && Auth::user()->user_role == '0')
                                <div class="dropdown dropdown-member-login">
                                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Welcome, {{ Auth::user()->name }}!
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item"
                                                href="{{ route('membership.update-membership-profile') }}">Profile</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="{{ url('/logout') }}">Logout</a></li>
                                    </ul>
                                </div>
                            @else
                                <a href="{{ route('member-login') }}" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Member Login">
                                    <i class="fa-solid fa-user fa-2x"></i></a>
                            @endif
                        </span>
                    </div>
                </div>
            </nav><!-- END OF FIRST LAYER -->

            <!-- SECOND LAYER -->
            <div class="container p-0">
                <div class="collapse navbar-collapse d-lg-block" id="navbarSupportedContent">
                    <nav class="navbar-menu">
                        <ul class="nav justify-content-between flex-column flex-lg-row">
                            <li class="nav-item second-nav-tabs">
                                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                            </li>
                            {{-- ABOUT US NAV --}}
                            <li class="nav-item sub-menu second-nav-tabs" id="sub-menu">
                                <a class="nav-link sub-menu-parent" data-bs-toggle="collapse"
                                    href="#submenu-about">About Us
                                    <span class="caret"><i class="fa-solid fa-angle-down ms-2 fa-sm"></i></span></a>
                                <ul class="sub-menu-list list-group collapse" id="submenu-about">
                                    <li class="list-group-item"><a href="{{ route('aboutus.what-is-agia') }}">What
                                            is
                                            AGIA </a></li>
                                    <li class="list-group-item"><a
                                            href="{{ route('aboutus.vision-mission') }}">Vision
                                            & Mission</a></li>
                                    <li class="list-group-item"><a
                                            href="{{ route('aboutus.strategy-map') }}">Strategy
                                            Map</a></li>
                                    <li class="list-group-item"><a
                                            href="{{ route('aboutus.board-directors') }}">Board
                                            of Directors</a></li>
                                    <li class="list-group-item"><a
                                            href="{{ route('aboutus.advisory-council') }}">Advisory Council</a></li>
                                    <li class="list-group-item"><a href="{{ route('aboutus.secretariat') }}">The
                                            Secretariat</a></li>
                                </ul>
                            </li>

                            {{-- MEMBERSHIP NAV --}}
                            <li class="nav-item sub-menu second-nav-tabs" id="sub-menu">
                                <a class="nav-link sub-menu-parent" data-bs-toggle="collapse"
                                    href="#submenu-membership">Membership <span class="caret"><i
                                            class="fa-solid fa-angle-down ms-2 fa-sm"></i></span></a>
                                <ul class="sub-menu-list list-group collapse" id="submenu-membership">
                                    <li class="list-group-item"><a
                                            href="{{ route('membership.classification-membership') }}">Classification
                                            of Members</a>
                                    </li>
                                    @if (isset(Auth::user()->username) && Auth::user()->user_role == '0')
                                        <li class="list-group-item"><a
                                                href="{{ route('membership.update-membership-profile') }}">Update My
                                                Membership Profile</a>
                                        </li>
                                    @else
                                        <li class="list-group-item"><a
                                                href="{{ route('membership.membership-application') }}">Membership
                                                Application</a>
                                        </li>
                                    @endif

                                </ul>
                            </li>

                            {{-- TRAINING & SEMINAR NAV --}}
                            <li class="nav-item sub-menu second-nav-tabs" id="sub-menu">
                                <a class="nav-link sub-menu-parent" data-bs-toggle="collapse"
                                    href="#submenu-training">Training & Seminars <span class="caret"><i
                                            class="fa-solid fa-angle-down ms-2 fa-sm"></i></span></a>
                                <ul class="sub-menu-list list-group collapse" id="submenu-training">
                                    <li class="list-group-item"><a href="{{ route('training.calendar') }}">Training
                                            Calendar</a></li>
                                    <li class="list-group-item"><a
                                            href="{{ route('training.training-events') }}">List
                                            of Training
                                            Events</a></li>
                                    <li class="list-group-item"><a
                                            href="{{ route('training.training-cpd-units') }}">Training with CPD
                                            Units</a></li>
                                    <li class="list-group-item"><a
                                            href="{{ route('training.in-house-trainings') }}">In-house Trainings</a>
                                    </li>
                                    <li class="list-group-item"><a
                                            href="{{ route('training.mobile-training') }}">Mobile Training</a></li>

                                </ul>
                            </li>

                            {{-- EVENTS NAV --}}
                            <li class="nav-item sub-menu second-nav-tabs" id="sub-menu">
                                <a class="nav-link sub-menu-parent" data-bs-toggle="collapse"
                                    href="#submenu-events">Events <span class="caret"><i
                                            class="fa-solid fa-angle-down ms-2 fa-sm"></i></span></a>
                                <ul class="sub-menu-list list-group collapse" id="submenu-events">
                                    <li class="list-group-item"><a href="{{ route('events.caeforum') }}">CAE
                                            Forum</a></li>
                                    <li class="list-group-item"><a href="{{ route('events.csr') }}">CSR</a></li>
                                    <li class="list-group-item"><a
                                            href="{{ route('events.convention') }}">Convention</a></li>
                                    <li class="list-group-item"><a
                                            href="{{ route('events.strategicplanning') }}">Strategic Planning</a></li>

                                </ul>
                            </li>

                            {{-- LAWS & ISSUANCES NAV --}}
                            <li class="nav-item sub-menu second-nav-tabs" id="sub-menu">
                                <a class="nav-link sub-menu-parent" data-bs-toggle="collapse"
                                    href="#submenu-laws">Laws
                                    & Issuances <span class="caret"><i
                                            class="fa-solid fa-angle-down ms-2 fa-sm"></i></span></a>
                                <ul class="sub-menu-list list-group collapse" id="submenu-laws">
                                    <li class="list-group-item"><a href="{{ route('laws.republic-act') }}">Republic
                                            Act</a></li>
                                    <li class="list-group-item"><a
                                            href="{{ route('laws.presidential-decree') }}">Presidential Decree</a>
                                    </li>
                                    <li class="list-group-item"><a
                                            href="{{ route('laws.executive-order') }}">Executive
                                            Order</a></li>
                                    <li class="list-group-item"><a
                                            href="{{ route('laws.administrative-orders') }}">Administrative
                                            Orders</a></li>
                                    <li class="list-group-item"><a href="{{ route('laws.dbm-circulars') }}">DBM
                                            Circulars</a></li>
                                    <li class="list-group-item"><a
                                            href="{{ route('laws.memorandum-circulars') }}">Memorandum Circulars</a>
                                    </li>

                                </ul>
                            </li>
                            {{-- LAWS & ISSUANCES NAV --}}
                            <li class="nav-item sub-menu second-nav-tabs" id="sub-menu">
                                <a class="nav-link sub-menu-parent" data-bs-toggle="collapse"
                                    href="#submenu-laws">Resources <span class="caret"><i
                                            class="fa-solid fa-angle-down ms-2 fa-sm"></i></span></a>
                                <ul class="sub-menu-list list-group collapse" id="submenu-laws">
                                    <li class="list-group-item"><a href="{{ route('resources.news', 2022) }}">AGIA
                                            News</a></li>
                                    <li class="list-group-item"><a href="">IAS/IAU Statistics</a></li>
                                    <li class="list-group-item"><a
                                            href="{{ route('resources.gallery', 2020) }}">Gallery</a></li>
                                    <li class="list-group-item"><a
                                            href="{{ route('resources.downloads') . '?category=forms' }}">Downloads</a>
                                    </li>
                                    <li class="list-group-item"><a
                                            href="{{ route('resources.president-message') }}">President's
                                            Message</a></li>
                                </ul>
                            </li>

                            {{-- CONTACT US NAV --}}
                            <li class="nav-item second-nav-tabs">
                                <a class="nav-link" href="{{ route('contactus') }}">Contact Us</a>
                            </li>

                            {{-- MOBILE NAV FOR LOGIN/LOGOUT --}}
                            @if (isset(Auth::user()->username) && Auth::user()->user_role == '0')
                                <li class="nav-item second-nav-tabs d-block d-lg-none">
                                    <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
                                </li>
                            @else
                                <li class="nav-item second-nav-tabs d-block d-lg-none">
                                    <a class="nav-link" href="{{ route('member-login') }}">Member Login</a>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>

        </div>

        <main>
            @yield('content')
        </main>

        <footer class="bg-dark text-white mt-5" id="footer">
            <div class="container p-4 pb-0 ">
                <div class="row d-flex justify-content-start align-items-start">
                    <div class="col-12 col-lg-5 mb-3">
                        <div class="footer-first-column">
                            <div class="footer-logo d-flex align-items-center mb-3">
                                <a href="{{ url('/') }}"><img src="{{ asset('img/agia-logo-2020.png') }}"
                                        alt="" width="90" class="img-fluid "></a>
                                <h4 class="footer-title ms-3">Association of Government Internal Auditors, Inc.</h4>
                            </div>

                            <p class="footer-desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est,
                                deleniti! Quos commodi hic
                                odio, accusamus soluta ab. Nulla sint consequatur.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 footer-links-container mb-3">
                        <h4 class="footer-heading">Links</h4>
                        <ul>
                            <li class="footer-links"><a href="{{ url('/') }}">Home</a></li>
                            <li class="footer-links"><a href="{{ route('aboutus.what-is-agia') }}">About Us</a>
                            </li>
                            <li class="footer-links"><a
                                    href="{{ route('membership.classification-membership') }}">Membership</a></li>
                            <li class="footer-links"><a href="{{ route('training.calendar') }}">Training &
                                    Seminars</a></li>
                            <li class="footer-links"><a href="">Events</a></li>
                            <li class="footer-links"><a href="{{ route('laws.republic-act') }}">Laws and
                                    Issuances</a></li>
                            <li class="footer-links"><a href="{{ route('resources.news', 2022) }}">Resources</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-3 mb-3">
                        <div class="footer-contact-us-container">
                            <h4 class="footer-heading">Contact Us</h4>
                            <p>Unit 402 Merchant Square Condominium, 1386 E. Rodriguez Sr. Avenue Cor. Mabolo St. New
                                Manila, Quezon City</p>
                            <p><i class="fa-solid fa-phone"></i>(02) 7 739-0045</p>
                            <p><i class="fa-solid fa-envelope"></i> info@agiaph.org</p>
                        </div>


                        <div class="footer-social-links">
                            <a href=""><i class="fa-brands fa-facebook-f circle-icon"></i></a>
                            <a href=""><i class="fa-brands fa-twitter circle-icon"></i></a>
                            <a href=""><i class="fa-brands fa-youtube circle-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center p-3 mt-3" style="background-color: rgba(0, 0, 0, 0.2);">
                Copyright © 2022 Association of Government Internal Auditors, Inc. • All Rights Reserved.
                <a class="text-white" href=""></a>
            </div>
        </footer>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Data Tables -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <!-- Sweet Alert 2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.17/dist/sweetalert2.all.min.js"></script>

    <!-- Full Calendar JS -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#eventsTable').DataTable();
        });
    </script>
</body>

</html>
