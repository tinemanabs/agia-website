<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

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
    <?php $role = Auth::user()->user_role; ?>
    @if ($role === '1')
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading shadow-sm border-bottom">
                    <img src="{{ asset('img/agia-logo-2020.png') }}" alt="" width="40">
                    AGIA Inc.
                </div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3"
                        href="{{ route('admin.view-all-gallery') }}">Gallery</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3"
                        href="{{ route('admin.view-all-news') }}">News
                        Updates</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3"
                        href="{{ route('admin.view-all-training') }}">Training Event</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3"
                        href="{{ route('admin.view-all-applications') }}">Membership
                        Applications</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3"
                        href="{{ route('admin.view-all-members') }}">Members
                        Management</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3"
                        href="{{ route('admin.view-all-downloads') }}">Downloads</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom py-3">
                    <div class="container-fluid">
                        <button class="btn" id="sidebarToggle"><i class="fa-solid fa-bars"></i></button>
                        <div class="dropdown-toggle " id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a href="" class="dropdown-item"><i class="fas fa-user me-2"
                                    style="color: #949494;"></i>Profile</a>

                            <hr class="dropdown-divider">

                            <a class="dropdown-item" href=""
                                onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt me-1" style="color: #949494;"></i> {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <main>
                    <div class="container-fluid px-4 py-2 mt-3">
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>
    @else
        <?php Auth::logout(); ?>
        <script>
            window.location = "/admin-panel";
        </script>
    @endif






    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <!-- Sweet Alert 2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.17/dist/sweetalert2.all.min.js"></script>

    <script src="{{ asset('js/TableCheckAll.js') }}"></script>

</body>

</html>
