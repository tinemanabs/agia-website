@extends('app.lawsandissuances')
@section('title', 'Memorandum Circulars')
@section('main-title', 'Laws and Issuances')
@section('breadcrumb', 'Memorandum Circulars')
@section('page-content')

    <h1 class="page-heading mb-4">Memorandum Circulars</h1>
    <div class="card mb-3 laws-issuances-container border-0">
        <div class="card-body">
            <div class="row laws-issuances-card">
                <div class="col-lg-1 py-1 py-lg-0 h-100 laws-issuances-no">277</div>
                <div class="col-lg-2 py-1 py-lg-0 laws-issuances-date">January 07, 1990</div>
                <div class="col-lg-6 py-1 py-lg-0 laws-issuances-subject">“Directing the DBM to promulgate the necessary
                    Rules, Regulations and Circulars for the strengthening of the Internal Control Systems of Government
                    Offices, Agencies, GOCCs and LGUs”
                </div>
                <div class="col-lg-3 laws-issuances-file">
                    <a href="">
                        <div class="d-flex align-items-center">
                            <!-- <img src="{{ asset('img/pdf.png') }}" alt="" class="img-fluid" width="40">
                                    <span class="filename" style="padding: 30px 10px"></span> -->
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3 laws-issuances-container border-0">
        <div class="card-body">
            <div class="row laws-issuances-card">
                <div class="col-lg-1 py-1 py-lg-0 h-100 laws-issuances-no">89</div>
                <div class="col-lg-2 py-1 py-lg-0 laws-issuances-date">August 18, 2005</div>
                <div class="col-lg-6 py-1 py-lg-0 laws-issuances-subject">“Circular Reiterating Compliance with AO No. 70,
                    s. 2003”
                </div>
                <div class="col-lg-3 laws-issuances-file">
                    <a href="">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('img/pdf.png') }}" alt="" class="img-fluid" width="40">
                            <span class="filename" style="padding: 30px 10px">MC No. 89.pdf</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3 laws-issuances-container border-0">
        <div class="card-body">
            <div class="row laws-issuances-card">
                <div class="col-lg-1 py-1 py-lg-0 h-100 laws-issuances-no">12</div>
                <div class="col-lg-2 py-1 py-lg-0 laws-issuances-date">June 22, 2006</div>
                <div class="col-lg-6 py-1 py-lg-0 laws-issuances-subject">
                    “Qualification Standards for IAS Positions”
                </div>
                <div class="col-lg-3 laws-issuances-file">
                    <a href="">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('img/pdf.png') }}" alt="" class="img-fluid" width="40">
                            <span class="filename" style="padding: 30px 10px"> CSC MC No. 12.pdf</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
