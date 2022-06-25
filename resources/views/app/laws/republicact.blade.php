@extends('app.lawsandissuances')
@section('title', 'Republic Act')
@section('main-title', 'Laws and Issuances')
@section('breadcrumb', 'Republic Act')
@section('page-content')
    <h1 class="page-heading mb-4">Republic Act</h1>
    <div class="card mb-3 laws-issuances-container border-0">
        <div class="card-body">
            <div class="row laws-issuances-card">
                <div class="col-lg-1 py-1 py-lg-0 h-100 laws-issuances-no">3456</div>
                <div class="col-lg-2 py-1 py-lg-0 laws-issuances-date">May 17, 1962</div>
                <div class="col-lg-6 py-1 py-lg-0 laws-issuances-subject">“An Act Providing for the Creation, Organization
                    and
                    Operation of Internal
                    Audit
                    Services in All Departments, Bureaus and Offices of the National Government” (The Internal Auditing Act
                    of 1962)</div>
                <div class="col-lg-3 laws-issuances-file">
                    <a href="">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('img/file-ext/pdf.png') }}" alt="" class="img-fluid"
                                width="40">
                            <span class="filename" style="padding: 30px 10px">Republic Act No3456.pdf</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3 laws-issuances-container border-0">
        <div class="card-body">
            <div class="row laws-issuances-card">
                <div class="col-lg-1 py-1 py-lg-0 h-100 laws-issuances-no">4177</div>
                <div class="col-lg-2 py-1 py-lg-0 laws-issuances-date">March 26, 1965</div>
                <div class="col-lg-6 py-1 py-lg-0 laws-issuances-subject">An Act to Amend Sections two, three and four of
                    Republic Act Numbered Three Thousand Four Hundred Fifty-Six, known as "Internal Auditing Act of 1962"
                </div>
                <div class="col-lg-3 laws-issuances-file">
                    <a href="">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('img/file-ext/pdf.png') }}" alt="" class="img-fluid"
                                width="40">
                            <span class="filename" style="padding: 30px 10px">Republic Act No4177.pdf</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3 laws-issuances-container border-0">
        <div class="card-body">
            <div class="row laws-issuances-card">
                <div class="col-lg-1 py-1 py-lg-0 h-100 laws-issuances-no">7160</div>
                <div class="col-lg-2 py-1 py-lg-0 laws-issuances-date">October 10, 1991</div>
                <div class="col-lg-6 py-1 py-lg-0 laws-issuances-subject">The Local Government Code of 1991</div>
                <div class="col-lg-3 laws-issuances-file">
                    <a href="">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('img/file-ext/pdf.png') }}" alt="" class="img-fluid"
                                width="40">
                            <span class="filename" style="padding: 30px 10px">Republic Act No 7160.pdf</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
