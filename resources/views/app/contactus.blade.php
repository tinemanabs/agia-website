@extends('layouts.app')
@section('content')
    <section id="contactus" class="contactus mb-5">
        <div class="container-fluid breadcrumb-custom">
            <div class="container">
                <h1 class="text-white">Contact Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-custom-list">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container">
            <div class="row row-cols-1 row-cols-md-4 g-4" style="margin-top: -60px">
                <div class="col">
                    <div class="card h-100 card-contact-us">
                        <div class="card-body">
                            <h6 class="card-title">Official Email Address</h6>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p class="card-text link"><a href="mailto:info@agiaph.org">info@agiaph.org</a></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 card-contact-us">
                        <div class="card-body">
                            <h6 class="card-title">Membership</h6>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p class="card-text link"><a href="mailto:membership@agiaph.org">membership@agiaph.org</a></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 card-contact-us">
                        <div class="card-body">
                            <h6 class="card-title">Training / Webinars</h6>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p class="card-text link"><a href="mailto:trainings@agiaph.org">trainings@agiaph.org</a></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 card-contact-us">
                        <div class="card-body">
                            <h6 class="card-title">Accounting / Accounts Receivables</h6>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p class="card-text link"><a href="mailto:accounting@agiaph.org">accounting@agiaph.org</a></p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mt-5">
                <div class="col-md-6">
                    <h3>Send us a Message</h3>
                    <form action="{{ route('send.contact') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="message" id="message" rows="3" placeholder="Message"></textarea>
                        </div>

                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-contact-us text-white" type="submit" id="contactus-btn">Send Message</button>
                        </div>

                    </form>

                </div>
                <div class="col-md-6">
                    <div>
                        <iframe style="border:0; width: 100%; height: 270px;"
                            src="https://maps.google.com/maps?q=association%of%government%internal Auditors&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>





        </div>
    </section>
@endsection
