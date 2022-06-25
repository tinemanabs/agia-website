@extends('layouts.app')
@section('title', 'Downloads')
@section('content')
    <section id="resources-section">
        <div class="container-fluid breadcrumb-custom" id="breadcrumb-img"
            style=" background-image: linear-gradient(rgba(27, 47, 69, 0.6), rgba(27, 47, 69, 0.6)), url('/img/banner/resources-img.jpg');">
            <div class="container">
                <h1>Resources</h1>
                <p>Have what you need</p>
            </div>
        </div>

        <div class="container mt-3">
            <h1 class="page-heading mb-4">Downloads</h1>

            <form action="">
                @csrf
                <div class="row">
                    <div class="col-6 col-md-4">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Choose a category</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-6 col-md-8">
                        <button class="btn latest-view-all-btn" type="submit">Apply</button>
                    </div>
                </div>
            </form>

            <div class="card downloads-category-card border-0 mt-5">
                <div class="card-body downloads-category-card-body p-0">
                    <h2>Forms</h2>
                </div>
            </div>

            <div class="card h-100 mt-3 mb-3 downloads-card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">2022 ANNUAL NATIONAL CONVENTION CUM SEMINAR</h5>
                    <h6 class="card-subtitle mb-3 text-muted">Attachment:</h6>

                    <div class="d-flex align-items-center mb-3">
                        {{-- DOC FILE --}}
                        <img src="{{ asset('img/file-ext/doc.png') }}" alt="" class="img-fluid" width="30">
                        {{-- IMG FILE --}}
                        <img src="{{ asset('img/file-ext/image.png') }}" alt="" class="img-fluid" width="30">
                        {{-- PPT FILE --}}
                        <img src="{{ asset('img/file-ext/ppt.png') }}" alt="" class="img-fluid" width="30">
                        {{-- EXCEL FILE --}}
                        <img src="{{ asset('img/file-ext/xls.png') }}" alt="" class="img-fluid" width="30">
                        <span class="downloads-filename">2022 ANNUAL R</span>
                    </div>

                    <div class="d-flex align-items-center mb-3">
                        {{-- DOC FILE --}}
                        <img src="{{ asset('img/file-ext/doc.png') }}" alt="" class="img-fluid" width="30">
                        {{-- IMG FILE --}}
                        <img src="{{ asset('img/file-ext/image.png') }}" alt="" class="img-fluid" width="30">
                        {{-- PPT FILE --}}
                        <img src="{{ asset('img/file-ext/ppt.png') }}" alt="" class="img-fluid" width="30">
                        {{-- EXCEL FILE --}}
                        <img src="{{ asset('img/file-ext/xls.png') }}" alt="" class="img-fluid" width="30">
                        <span class="downloads-filename">2022 ANNUAL NATIONAL CONVENTION CUM SEMINAR</span>
                    </div>
                </div>
            </div>


        </div>

    </section>
@endsection
