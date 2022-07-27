@extends('app.lawsandissuances')
@section('title', 'Presidential Decree')
@section('main-title', 'Laws and Issuances')
@section('breadcrumb', 'Presidential Decree')
@section('page-content')

    <h1 class="page-heading mb-4">Presidential Decree</h1>
    @forelse ($presidentialDecree->reverse() as $law)
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

@endsection
