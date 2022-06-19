@extends('app.lawsandissuances')
@section('title', 'Presidential Decree')
@section('main-title', 'Laws and Issuances')
@section('breadcrumb', 'Presidential Decree')
@section('page-content')

    <h1 class="page-heading mb-4">Presidential Decree</h1>
    <div class="card mb-3 laws-issuances-container border-0">
        <div class="card-body">
            <div class="row laws-issuances-card">
                <div class="col-lg-1 py-1 py-lg-0 h-100 laws-issuances-no">1</div>
                <div class="col-lg-2 py-1 py-lg-0 laws-issuances-date">September 24, 1972</div>
                <div class="col-lg-6 py-1 py-lg-0 laws-issuances-subject">“Reorganizing the Executive Branch of the National
                    Government”
                    <span>
                        (Abolished the IAS created under RA 3456, as amended by RA 4177, and transferred the function to the
                        Management Division)
                    </span>
                </div>
                <div class="col-lg-3 laws-issuances-file">
                    <a href="">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('img/pdf.png') }}" alt="" class="img-fluid" width="40">
                            <span class="filename" style="padding: 30px 10px">PD No. 1.pdf</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
