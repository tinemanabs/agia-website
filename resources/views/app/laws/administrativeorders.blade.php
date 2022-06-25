@extends('app.lawsandissuances')
@section('title', 'Administrative Orders')
@section('main-title', 'Laws and Issuances')
@section('breadcrumb', 'Administrative Orders')
@section('page-content')

    <h1 class="page-heading mb-4">Administrative Orders</h1>
    <div class="card mb-3 laws-issuances-container border-0">
        <div class="card-body">
            <div class="row laws-issuances-card">
                <div class="col-lg-1 py-1 py-lg-0 h-100 laws-issuances-no">119</div>
                <div class="col-lg-2 py-1 py-lg-0 laws-issuances-date">March 29, 1989</div>
                <div class="col-lg-6 py-1 py-lg-0 laws-issuances-subject">Directing the strengthening of the internal control
                    systems of government offices, agencies, government-owned or controlled corporations and local
                    government units in their fiscal operations
                </div>
                <div class="col-lg-3 laws-issuances-file">
                    <a href="">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('img/file-ext/pdf.png') }}" alt="" class="img-fluid"
                                width="40">
                            <span class="filename" style="padding: 30px 10px">AO 119.pdf</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3 laws-issuances-container border-0">
        <div class="card-body">
            <div class="row laws-issuances-card">
                <div class="col-lg-1 py-1 py-lg-0 h-100 laws-issuances-no">278</div>
                <div class="col-lg-2 py-1 py-lg-0 laws-issuances-date">April 28, 1992</div>
                <div class="col-lg-6 py-1 py-lg-0 laws-issuances-subject">“Directing the Strengthening of the Internal
                    Control Systems of Government Offices, GOCCs, including GFIs and LGUs, in their Operations” (Provided
                    authority for the creation of an IAS and its functions, duties and activities)
                </div>
                <div class="col-lg-3 laws-issuances-file">
                    <a href="">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('img/file-ext/pdf.png') }}" alt="" class="img-fluid"
                                width="40">
                            <span class="filename" style="padding: 30px 10px">AO 278.pdf</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3 laws-issuances-container border-0">
        <div class="card-body">
            <div class="row laws-issuances-card">
                <div class="col-lg-1 py-1 py-lg-0 h-100 laws-issuances-no">70</div>
                <div class="col-lg-2 py-1 py-lg-0 laws-issuances-date">April 14, 2003</div>
                <div class="col-lg-6 py-1 py-lg-0 laws-issuances-subject">“Strengthening of the Internal Control Systems of
                    Government Offices, Agencies, GOCCs, including GFIs, SUCS and LGUs”
                    <span>
                        (Directed that the Code of Ethics promulgated by the AGIA be strictly observed to maintain high
                        standards of honesty, objectivity, diligence and loyalty)
                        (Directing the AGIA to ensure that all audit works in all government agencies are conducted in
                        conformity with the standards of the internal audit profession)
                    </span>
                </div>
                <div class="col-lg-3 laws-issuances-file">
                    <a href="">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('img/file-ext/pdf.png') }}" alt="" class="img-fluid"
                                width="40">
                            <span class="filename" style="padding: 30px 10px">AO 70.pdf</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
