@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')
    <section id="contactus" class="contactus mb-5">
        <div class="container-fluid breadcrumb-custom" id="breadcrumb-img"
            style=" background-image: linear-gradient(rgba(27, 47, 69, 0.6), rgba(27, 47, 69, 0.6)), url('/img/banner/contact-us-img.jpg');">
            <div class="container">
                <h1>Contact Us</h1>
                <p>Get in Touch</p>
            </div>
        </div>

        <div class="container">
            <div class="row row-cols-1 row-cols-md-4 g-4" style="margin-top: -60px">
                <div class="col">
                    <div class="card h-100 card-email-contact">
                        <div class="card-body">
                            <h6 class="card-title">Official Email Address</h6>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p class="card-text link"><a href="mailto:info@agiaph.org">info@agiaph.org</a></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 card-email-contact">
                        <div class="card-body">
                            <h6 class="card-title">Membership</h6>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p class="card-text link"><a href="mailto:membership@agiaph.org">membership@agiaph.org</a></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 card-email-contact">
                        <div class="card-body">
                            <h6 class="card-title">Training / Webinars</h6>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p class="card-text link"><a href="mailto:trainings@agiaph.org">trainings@agiaph.org</a></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 card-email-contact">
                        <div class="card-body">
                            <h6 class="card-title">Accounting / Accounts Receivables</h6>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p class="card-text link"><a href="mailto:accounting@agiaph.org">accounting@agiaph.org</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5 contact-us-section">
            <div class="card contact-us-card border-0 shadow p-3 mb-5 bg-body rounded">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-md-6">
                            <iframe style="border:0; width: 100%; height: 100%;"
                                src="https://maps.google.com/maps?q=association%of%government%internal Auditors&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="col-md-6 p-2">
                            <h1 class="text-center">Contact Us</h1>
                            <h2 class="text-center mb-3">Send us a Message</h2>
                            @if (Session::get('success'))
                                <div class="alert alert-success">
                                    <strong>{{ Session::get('success') }}</strong>
                                </div>
                            @endif
                            <form action="{{ route('send.contact') }}" method="post">
                                @csrf
                                <div class="row mt-5">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Email">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject">
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" name="message" id="message" rows="10" placeholder="Message"></textarea>
                                </div>

                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-contact-us text-white" type="submit" id="contactus-btn">Send
                                        Message</button>
                                </div>

                            </form>
                        </div>
                    </div>

                    <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
                        <div class="col">
                            <div class="card h-100 border-0">
                                <div class="card-body contact-us-card-body p-0">
                                    <div class="contact-us-card-icon">
                                        <span class="fa-stack fa-2x">
                                            <i class="fa-solid fa-circle fa-stack-2x"></i>
                                            <i class="fa-solid fa-location-dot fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </div>
                                    <div class="contact-us-card-content">
                                        <h5 class="card-title">Office Address</h5>
                                        <p class="card-text">Unit 402 Merchant Square Condominium,
                                            1386 E. Rodriguez Sr. Avenue Cor. Mabolo St.
                                            New Manila, Quezon City</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 border-0">
                                <div class="card-body contact-us-card-body p-0">
                                    <div class="contact-us-card-icon">
                                        <span class="fa-stack fa-2x">
                                            <i class="fa-solid fa-circle fa-stack-2x"></i>
                                            <i class="fa-solid fa-phone fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </div>
                                    <div class="contact-us-card-content">
                                        <h5 class="card-title">Contact</h5>
                                        <p class="card-text">(02) 7 739-0045 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 border-0">
                                <div class="card-body contact-us-card-body p-0">
                                    <div class="contact-us-card-icon">
                                        <span class="fa-stack fa-2x">
                                            <i class="fa-solid fa-circle fa-stack-2x"></i>
                                            <i class="fa-solid fa-envelope fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </div>
                                    <div class="contact-us-card-content">
                                        <h5 class="card-title">Email Addresses</h5>
                                        <p class="card-text m-0">info@agiaph.org</p>
                                        {{-- <p class="card-text m-0">membership@agiaph.org</p>
                                        <p class="card-text m-0">trainings.agiainc@gmail.com</p>
                                        <p class="card-text m-0">actg.agia@gmail.com</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
