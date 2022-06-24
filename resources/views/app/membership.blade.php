@extends('layouts.app')
@section('content')
    <section id="about-us-section">
        <div class="container-fluid breadcrumb-custom" id="breadcrumb-img"
            style=" background-image: linear-gradient(rgba(27, 47, 69, 0.6), rgba(27, 47, 69, 0.6)), url('/img/banner/membership-img.jpg');">
            <div class="container">
                <h1>@yield('main-title')</h1>
                <p>Join Our Association</p>
            </div>
        </div>

        <div class="container mt-3">
            <div class="d-flex" id="wrapper">
                <!-- Sidebar-->
                <div class=" bg-white" id="sidebar-wrapper">
                    <div class="sidebar-heading border-0">@yield('main-title')</div>
                    <div class="list-group list-group-flush">
                        <a class="list-group-item p-3 {{ Route::is('membership.classification-membership') ? 'active' : '' }}"
                            href="{{ route('membership.classification-membership') }}">Classification of Members</a>
                        @if (isset(Auth::user()->username) && Auth::user()->user_role == "0")
                        <a class="list-group-item p-3 {{ Route::is('membership.update-membership-profile') ? 'active' : '' }}"
                            href="{{ route('membership.update-membership-profile') }}">Update
                            My Membership Profile</a>
                        @else
                        <a class="list-group-item p-3 {{ Route::is('membership.membership-application') ? 'active' : '' }}"
                            href="{{ route('membership.membership-application') }}">Membership
                            Application</a>
                        @endif
                    </div>
                </div>
                <!-- Page content wrapper-->
                <div id="page-content-wrapper">
                    <!-- Top navigation-->
                    <nav class="navbar navbar-expand-lg bg-light mb-3">
                        <div class="container-fluid justify-content-lg-between justify-content-start align-items-center">
                            <button class="btn" id="sidebarToggle"><i class="fa-solid fa-bars"></i></button>
                            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                                aria-label="breadcrumb" class="custom-breadcrumb">
                                <ol class="breadcrumb mt-3 mt-lg-0">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item">@yield('main-title')</li>
                                    <li class="breadcrumb-item active" aria-current="page">@yield('breadcrumb')</li>
                                </ol>
                            </nav>
                        </div>
                    </nav>
                    <!-- Page content-->
                    <div class="container-fluid">
                        @yield('page-content')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
