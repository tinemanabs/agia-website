@extends('app.lawsandissuances')
@section('title', 'Executive Order')
@section('main-title', 'Laws and Issuances')
@section('breadcrumb', 'Executive Order')
@section('page-content')

    <h1 class="page-heading mb-4">Executive Order</h1>
    <div class="card mb-3 laws-issuances-container border-0">
        <div class="card-body">
            <div class="row laws-issuances-card">
                <div class="col-lg-1 py-1 py-lg-0 h-100 laws-issuances-no">292</div>
                <div class="col-lg-2 py-1 py-lg-0 laws-issuances-date">July 25, 1987</div>
                <div class="col-lg-6 py-1 py-lg-0 laws-issuances-subject">Instituting the Administrative Code of 1987
                    <span>
                        (Creating an IAS in the DPWH and included the supervision of internal audit activities as one of the
                        function of the DOF’s Central Financial Management Office)
                    </span>
                </div>
                <div class="col-lg-3 laws-issuances-file">
                    <a href="">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('img/file-ext/pdf.png') }}" alt="" class="img-fluid"
                                width="40">
                            <span class="filename" style="padding: 30px 10px">EO 292.pdf</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
