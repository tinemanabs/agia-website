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

            <form action="{{ route('resources.downloads') }}" method="get">
                @csrf
                <div class="row">
                    <div class="col-6 col-md-4">
                        <select class="form-select" aria-label="Default select example" name="category">
                            <option value="forms">Forms</option>
                            <option value="invitation">Invitation</option>
                            <option value="lecture-materials">Lecture Materials</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                    <div class="col-6 col-md-8">
                        <button class="btn latest-view-all-btn" type="submit">Apply</button>
                    </div>
                </div>
            </form>

            @if (isset($_GET['category']))

                <div class="card downloads-category-card border-0 mt-5">
                    <div class="card-body downloads-category-card-body p-0">
                        <h2>{{ str_replace('-', ' ', $_GET['category']) }}</h2>
                    </div>
                </div>
                @forelse ($downloads as $download)
                    <div class="card h-100 mt-3 mb-3 downloads-card">

                        <div class="card-body">

                            <h5 class="card-title text-uppercase">{{ $download->title }}</h5>
                            <h6 class="card-subtitle mb-3 text-muted">Attachment:</h6>
                            @foreach (array_reverse(File::glob('uploads/downloads/' . $download->category . '/' . $download->title . '/*')) as $path)
                                <div class="d-flex align-items-center mb-3">
                                    <?php $path_parts = pathinfo($path); ?>
                                    @if ($path_parts['extension'] == 'doc' || $path_parts['extension'] == 'docx')
                                        {{-- DOC FILE --}}
                                        <img src="{{ asset('img/file-ext/doc.png') }}" alt="" class="img-fluid"
                                            width="30">
                                    @elseif ($path_parts['extension'] == 'pdf')
                                        {{-- PDF FILE --}}
                                        <img src="{{ asset('img/file-ext/pdf.png') }}" alt="" class="img-fluid"
                                            width="30">
                                    @elseif ($path_parts['extension'] == 'png' || $path_parts['extension'] == 'jpg' || $path_parts['extension'] == 'jpeg')
                                        {{-- IMG FILE --}}
                                        <img src="{{ asset('img/file-ext/image.png') }}" alt="" class="img-fluid"
                                            width="30">
                                    @elseif ($path_parts['extension'] == 'pptx')
                                        {{-- PPT FILE --}}
                                        <img src="{{ asset('img/file-ext/ppt.png') }}" alt="" class="img-fluid"
                                            width="30">
                                    @elseif ($path_parts['extension'] == 'xlsx' || $path_parts['extension'] == 'xls')
                                        {{-- EXCEL FILE --}}
                                        <img src="{{ asset('img/file-ext/xls.png') }}" alt="" class="img-fluid"
                                            width="30">
                                    @endif
                                    <a href="{{ url('/') . '/' . $path }}" target="_blank"><span
                                            class="downloads-filename">{{ $path_parts['basename'] }}</span></a>
                                </div>

                                <!--<div class="d-flex align-items-center mb-3">
                                    {{-- DOC FILE --}}
                                    <img src="{{ asset('img/file-ext/doc.png') }}" alt="" class="img-fluid" width="30">
                                    {{-- IMG FILE --}}
                                    <img src="{{ asset('img/file-ext/image.png') }}" alt="" class="img-fluid" width="30">
                                    {{-- PPT FILE --}}
                                    <img src="{{ asset('img/file-ext/ppt.png') }}" alt="" class="img-fluid" width="30">
                                    {{-- EXCEL FILE --}}
                                    <img src="{{ asset('img/file-ext/xls.png') }}" alt="" class="img-fluid" width="30">
                                    <span class="downloads-filename">2022 ANNUAL NATIONAL CONVENTION CUM SEMINAR</span>
                                </div>-->
                            @endforeach
                        </div>
                    </div>
                @empty
                    <p>No files found</p>
                @endforelse
            @endif

        </div>

    </section>
@endsection
