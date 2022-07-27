@extends('app.lawsandissuances')
@section('title', 'DBM Circulars')
@section('main-title', 'Laws and Issuances')
@section('breadcrumb', 'DBM Circulars')
@section('page-content')

    <h1 class="page-heading mb-4">DBM Circulars</h1>
    @forelse ($dbmCircular->reverse() as $law)
    <div class="card mb-3 laws-issuances-container border-0">
        <div class="card-body">
            <div class="row laws-issuances-card">
                <div class="col-lg-1 py-1 py-lg-0 h-100 laws-issuances-no">{{ $law->number }}</div>
                <div class="col-lg-2 py-1 py-lg-0 laws-issuances-date">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $law->date)->format('F d, Y') }}</div>
                <div class="col-lg-6 py-1 py-lg-0 laws-issuances-subject">{{ $law->subject }}</div>
                <div class="col-lg-3 laws-issuances-file">
                <a href="{{ asset('uploads/lawsandissuances/' . $law->file) }}" target="_blank">
                        <div class="d-flex align-items-center">
                            
                            @if ($law->file != null)
                                <img src="{{ asset('img/file-ext/pdf.png') }}" alt="" class="img-fluid"
                                    width="40">
                                <span class="filename" style="padding: 30px 10px">
                                    {{ $law->number}}-{{ $law->category }}</span>
                            @endif
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @empty

    @endforelse

    <!-- <div class="card mb-3 laws-issuances-container border-0">
        <div class="card-body">
            <div class="row laws-issuances-card">
                <div class="col-lg-1 py-1 py-lg-0 h-100 laws-issuances-no">2004-4</div>
                <div class="col-lg-2 py-1 py-lg-0 laws-issuances-date">March 22, 2004</div>
                <div class="col-lg-6 py-1 py-lg-0 laws-issuances-subject">“Guidelines on the Organization and Staffing of
                    Internal Auditing Units (IAUs)”
                </div>
                <div class="col-lg-3 laws-issuances-file">
                    <a href="">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('img/file-ext/pdf.png') }}" alt="" class="img-fluid"
                                width="40">
                            <span class="filename" style="padding: 30px 10px">BC 2004-4.pdf</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3 laws-issuances-container border-0">
        <div class="card-body">
            <div class="row laws-issuances-card">
                <div class="col-lg-1 py-1 py-lg-0 h-100 laws-issuances-no">2008-5</div>
                <div class="col-lg-2 py-1 py-lg-0 laws-issuances-date">April 14, 2008</div>
                <div class="col-lg-6 py-1 py-lg-0 laws-issuances-subject">“Guidelines in the Organization and Staffing of an
                    Internal Audit Service/Unit and Management Division/Unit in Departments/Agencies/GOCCs/GFIs Concerned”
                </div>
                <div class="col-lg-3 laws-issuances-file">
                    <a href="">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('img/file-ext/pdf.png') }}" alt="" class="img-fluid"
                                width="40">
                            <span class="filename" style="padding: 30px 10px">DBM CIRCULAR LETTER 2008-5.pdf</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3 laws-issuances-container border-0">
        <div class="card-body">
            <div class="row laws-issuances-card">
                <div class="col-lg-1 py-1 py-lg-0 h-100 laws-issuances-no">2008-8</div>
                <div class="col-lg-2 py-1 py-lg-0 laws-issuances-date">October 23, 2008
                </div>
                <div class="col-lg-6 py-1 py-lg-0 laws-issuances-subject">“National Guidelines on Internal Control Systems
                    (NGICS)”
                </div>
                <div class="col-lg-3 laws-issuances-file">
                    <a href="">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('img/file-ext/pdf.png') }}" alt="" class="img-fluid"
                                width="40">
                            <span class="filename" style="padding: 30px 10px">DBM CIRCULAR LETTER 2008-8.pdf</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3 laws-issuances-container border-0">
        <div class="card-body">
            <div class="row laws-issuances-card">
                <div class="col-lg-1 py-1 py-lg-0 h-100 laws-issuances-no">2011-5</div>
                <div class="col-lg-2 py-1 py-lg-0 laws-issuances-date">May 19, 2011</div>
                <div class="col-lg-6 py-1 py-lg-0 laws-issuances-subject">“Philippine Government Internal Audit Manual
                    (PGIAM)”
                </div>
                <div class="col-lg-3 laws-issuances-file">
                    <a href="">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('img/file-ext/pdf.png') }}" alt="" class="img-fluid"
                                width="40">
                            <span class="filename" style="padding: 30px 10px"> DBM CIRCULAR LETTER 2011-5.pdf</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3 laws-issuances-container border-0">
        <div class="card-body">
            <div class="row laws-issuances-card">
                <div class="col-lg-1 py-1 py-lg-0 h-100 laws-issuances-no">110</div>
                <div class="col-lg-2 py-1 py-lg-0 laws-issuances-date">June 10, 2016</div>
                <div class="col-lg-6 py-1 py-lg-0 laws-issuances-subject">“Internal Audit Manual for Local Government Units”
                </div>
                <div class="col-lg-3 laws-issuances-file">
                    <a href="">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('img/file-ext/pdf.png') }}" alt="" class="img-fluid"
                                width="40">
                            <span class="filename" style="padding: 30px 10px"> DBM LOCAL BUDGET CIRCULAR No. 110.pdf</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div> -->
@endsection
