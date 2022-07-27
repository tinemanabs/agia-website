@extends('app.aboutus')
@section('title', 'Secretariat')
@section('main-title', 'About Us')
@section('breadcrumb', 'Secretariat')
@section('page-content')
    <h1 class="page-heading mb-4">The Secretariat</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center mt-2">
        @forelse ($secretariat->reverse() as $s)
            <div class="col">
                <div class="card h-100 officers-card border-0">
                    <img src="{{ asset('uploads/thesecretariat/' . $s->image) }}" class="card-img-top" alt="...">
                    <div class="card-body p-0 text-center mt-2">
                        <h5 class="card-title">{{ strtoupper($s->name) }}</h5>
                        <div class="personal-details">
                            <div class="p-details-1">{{ $s->position }}</div>
                        </div>

                    </div>
                </div>
            </div>
        @empty
        @endforelse
        <!-- <div class="col">
                <div class="card h-100 officers-card border-0">
                    <img src="{{ asset('img/sample-avatar.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body p-0 text-center mt-2">
                        <h5 class="card-title">MARISSA N. FABRICANTE, CICA</h5>
                        <div class="personal-details">
                            <div class="p-details-1">Internal Auditor V / Division Chief</div>
                            <div class="p-details-2">Internal Audit Service - Operations Audit Division</div>
                            <div class="p-details-3">Department of Social Welfare and Development</div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 officers-card border-0">
                    <img src="{{ asset('img/sample-avatar.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body p-0 text-center mt-2">
                        <h5 class="card-title">MARISSA N. FABRICANTE, CICA</h5>
                        <div class="personal-details">
                            <div class="p-details-1">Internal Auditor V / Division Chief</div>
                            <div class="p-details-2">Internal Audit Service - Operations Audit Division</div>
                            <div class="p-details-3">Department of Social Welfare and Development</div>
                        </div>

                    </div>
                </div>
            </div> -->
    </div>
    <!-- <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center mt-2">
            <div class="col">
                <div class="card h-100 officers-card border-0">
                    <img src="{{ asset('img/sample-avatar.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body p-0 text-center mt-2">
                        <h5 class="card-title">MARISSA N. FABRICANTE, CICA</h5>
                        <div class="personal-details">
                            <div class="p-details-1">Internal Auditor V / Division Chief</div>
                            <div class="p-details-2">Internal Audit Service - Operations Audit Division</div>
                            <div class="p-details-3">Department of Social Welfare and Development</div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 officers-card border-0">
                    <img src="{{ asset('img/sample-avatar.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body p-0 text-center mt-2">
                        <h5 class="card-title">MARISSA N. FABRICANTE, CICA</h5>
                        <div class="personal-details">
                            <div class="p-details-1">Internal Auditor V / Division Chief</div>
                            <div class="p-details-2">Internal Audit Service - Operations Audit Division</div>
                            <div class="p-details-3">Department of Social Welfare and Development</div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 officers-card border-0">
                    <img src="{{ asset('img/sample-avatar.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body p-0 text-center mt-2">
                        <h5 class="card-title">MARISSA N. FABRICANTE, CICA</h5>
                        <div class="personal-details">
                            <div class="p-details-1">Internal Auditor V / Division Chief</div>
                            <div class="p-details-2">Internal Audit Service - Operations Audit Division</div>
                            <div class="p-details-3">Department of Social Welfare and Development</div>
                        </div>

                    </div>
                </div>
            </div>
        </div> -->
@endsection
