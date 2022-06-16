@extends('layouts.app')
@section('content')
    <section id="about-us-section">
        <div class="container-fluid breadcrumb-custom" id="breadcrumb-about-us-img">
            <div class="container">
                <h1 class="text-white">About Us</h1>
                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore non, quia doloribus
                    molestiae dolores voluptas, cum porro eaque ab beatae aliquam iste soluta ex omnis perspiciatis sint
                    modi? Quia, nihil.</p>
            </div>
        </div>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-0">Navigation</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item p-3" href="#!">What is AGIA?</a>
                    <a class="list-group-item p-3" href="#!">Vision &
                        Mission</a>
                    <a class="list-group-item p-3" href="#!">Strategy Map</a>
                    <a class="list-group-item p-3" href="#!">Board of
                        Directors</a>
                    <a class="list-group-item p-3" href="#!">Advisory
                        Council</a>
                    <a class="list-group-item p-3" href="#!">The
                        Secretariat</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg ">
                    <div class="container-fluid">
                        <button class="btn" id="sidebarToggle"><i
                                class="fa-solid fa-bars text-primary"></i></button>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">

                </div>
            </div>
        </div>
    </section>
@endsection
