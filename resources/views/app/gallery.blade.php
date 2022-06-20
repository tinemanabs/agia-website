@extends('layouts.app')
@section('content')
    <section id="resources-section">
        <div class="container-fluid breadcrumb-custom" id="breadcrumb-img"
            style=" background-image: linear-gradient(rgba(27, 47, 69, 0.6), rgba(27, 47, 69, 0.6)), url('/img/banner/resources-img.jpg');">
            <div class="container">
                <h1>@yield('main-title')</h1>
                <p>Have what you need</p>
            </div>
        </div>

        <div class="container mt-3">
            <div class="d-flex" id="wrapper">
                <!-- Sidebar-->
                <div class=" bg-white" id="sidebar-wrapper">
                    <div class="sidebar-heading border-0">Gallery</div>
                    <div class="list-group list-group-flush">
                    @foreach (array_reverse(File::glob('uploads/galleries/*', GLOB_ONLYDIR)) as $path)
                        <a class="list-group-item p-3" href="{{ route('resources.gallery', basename($path)) }}">{{ basename($path) }}<span class="badge bg-secondary ms-2">{{ count(File::glob('uploads/galleries/' . basename($path) . '/*', GLOB_ONLYDIR)) }}</span></a>
                        <!-- <a class="list-group-item p-3" href="">2018 <span
                                class="badge bg-secondary ms-2">4</span></a>
                        <a class="list-group-item p-3" href="">2016 <span
                                class="badge bg-secondary ms-2">4</span></a>
                        <a class="list-group-item p-3" href="">2014 <span
                                class="badge bg-secondary ms-2">4</span></a> -->
                    @endforeach
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
