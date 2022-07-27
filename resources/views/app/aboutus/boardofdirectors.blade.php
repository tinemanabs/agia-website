@extends('app.aboutus')
@section('title', 'Board of Directors')
@section('main-title', 'About Us')
@section('breadcrumb', 'Board of Directors')
@section('page-content')
    <div class="d-flex justify-content-between">
        <h1 class="page-heading mb-4">Board of Directors</h1>
        <h3 class="text-center">CY 2022 - 2023 </h3>
    </div>

    <h4>Officers</h4>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
        @forelse ($directors as $director)
            @if ($director->position == 'President')
                <div class="col">
                    <div class="card h-100 officers-card border-0">
                        <img src="{{ asset('uploads/boardofdirectors/' . $director->image) }}" class="card-img-top"
                            alt="...">
                        <div class="card-body p-0 text-center mt-2">
                            <h5 class="card-title">{{ strtoupper($director->name) }}</h5>
                            <div class="job-position">{{ $director->position }}</div>
                            <div class="personal-details">
                                <div class="p-details-1">{{ $director->detail1 }}</div>
                                <div class="p-details-2">{{ $director->detail2 }}</div>
                                <div class="p-details-3">{{ $director->detail3 }}</div>
                            </div>

                        </div>
                    </div>
                </div>
            @endif
        @empty
        @endforelse
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center mt-2">
        @forelse ($directors as $director)
            @if ($director->position != 'President' && $director->category == 'officer')
                <div class="col">
                    <div class="card h-100 officers-card border-0">
                        <img src="{{ asset('uploads/boardofdirectors/' . $director->image) }}" class="card-img-top"
                            alt="...">
                        <div class="card-body p-0 text-center mt-2">
                            <h5 class="card-title">{{ strtoupper($director->name) }}</h5>
                            <div class="job-position">{{ $director->position }}</div>
                            <div class="personal-details">
                                <div class="p-details-1">{{ $director->detail1 }}</div>
                                <div class="p-details-2">{{ $director->detail2 }}</div>
                                <div class="p-details-3">{{ $director->detail3 }}</div>
                            </div>

                        </div>
                    </div>
                </div>
            @endif
        @empty
        @endforelse
        <!--<div class="col">
                    <div class="card h-100 officers-card border-0">
                        <img src="{{ asset('img/sample-avatar.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body p-0 text-center mt-2">
                            <h5 class="card-title">MARISSA N. FABRICANTE, CICA</h5>
                            <div class="job-position">President</div>
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
                            <div class="job-position">President</div>
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
                            <div class="job-position">President</div>
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
                            <div class="job-position">President</div>
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
                            <div class="job-position">President</div>
                            <div class="personal-details">
                                <div class="p-details-1">Internal Auditor V / Division Chief</div>
                                <div class="p-details-2">Internal Audit Service - Operations Audit Division</div>
                                <div class="p-details-3">Department of Social Welfare and Development</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center mt-2">
                <div class="col">
                    <div class="card h-100 officers-card border-0">
                        <img src="{{ asset('img/sample-avatar.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body p-0 text-center mt-2">
                            <h5 class="card-title">MARISSA N. FABRICANTE, CICA</h5>
                            <div class="job-position">President</div>
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
                            <div class="job-position">President</div>
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
                            <div class="job-position">President</div>
                            <div class="personal-details">
                                <div class="p-details-1">Internal Auditor V / Division Chief</div>
                                <div class="p-details-2">Internal Audit Service - Operations Audit Division</div>
                                <div class="p-details-3">Department of Social Welfare and Development</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-between mt-2">
                <div class="col">
                    <div class="card h-100 officers-card border-0">
                        <img src="{{ asset('img/sample-avatar.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body p-0 text-center mt-2">
                            <h5 class="card-title">MARISSA N. FABRICANTE, CICA</h5>
                            <div class="job-position">President</div>
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
                            <div class="job-position">President</div>
                            <div class="personal-details">
                                <div class="p-details-1">Internal Auditor V / Division Chief</div>
                                <div class="p-details-2">Internal Audit Service - Operations Audit Division</div>
                                <div class="p-details-3">Department of Social Welfare and Development</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div> -->

    <h4 class="mt-5">Board Members</h4>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-between mt-2">
        @forelse ($directors as $director)
            @if ($director->position != 'President' && $director->category == 'board-member')
                <div class="col">
                    <div class="card h-100 officers-card border-0">
                        <img src="{{ asset('uploads/boardofdirectors/' . $director->image) }}" class="card-img-top"
                            alt="...">
                        <div class="card-body p-0 text-center mt-2">
                            <h5 class="card-title">{{ strtoupper($director->name) }}</h5>
                            <div class="job-position">{{ $director->position }}</div>
                            <div class="personal-details">
                                <div class="p-details-1">{{ $director->detail1 }}</div>
                                <div class="p-details-2">{{ $director->detail2 }}</div>
                                <div class="p-details-3">{{ $director->detail3 }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @empty
        @endforelse
        <!-- <div class="col">
                    <div class="card h-100 officers-card border-0">
                        <img src="{{ asset('img/sample-avatar.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body p-0 text-center mt-2">
                            <h5 class="card-title">MARISSA N. FABRICANTE, CICA</h5>
                            <div class="job-position">President</div>
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
                            <div class="job-position">President</div>
                            <div class="personal-details">
                                <div class="p-details-1">Internal Auditor V / Division Chief</div>
                                <div class="p-details-2">Internal Audit Service - Operations Audit Division</div>
                                <div class="p-details-3">Department of Social Welfare and Development</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center mt-2">
                <div class="col">
                    <div class="card h-100 officers-card border-0">
                        <img src="{{ asset('img/sample-avatar.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body p-0 text-center mt-2">
                            <h5 class="card-title">MARISSA N. FABRICANTE, CICA</h5>
                            <div class="job-position">President</div>
                            <div class="personal-details">
                                <div class="p-details-1">Internal Auditor V / Division Chief</div>
                                <div class="p-details-2">Internal Audit Service - Operations Audit Division</div>
                                <div class="p-details-3">Department of Social Welfare and Development</div>
                            </div>

                        </div>
                    </div>
                </div> -->
    </div>
@endsection
