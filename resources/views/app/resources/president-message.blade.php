@extends('layouts.app')
@section('title', "President's Message")
@section('content')

    <section id="message-section">
        <div class="container-fluid president-message">

            <div class="container president-message-container">
                <div class="row president-message-box ">
                    <div class="col-md-8 president-message-left-content">
                        <span class="fa-stack fa-2x" style="margin-top: -100px">
                            <i class="fa-solid fa-circle fa-stack-2x" style="color: #0077BC"></i>
                            <i class="fa-solid fa-quote-left fa-stack-1x fa-inverse text-center"></i>
                        </span>
                        <h5>President's Message</h5>
                        <p>Greetings of peace, my dear AGIA members, fellow Internal Auditors and co-workers in government!
                        </p>
                        <p>
                            Through the years, AGIA has faced all kinds of challenges and difficulties, including the
                            COVID-19 pandemic which has been assailing our country and the rest of the world for two years
                            now.Nevertheless, AGIA remains resilient and steadfast in its commitment to provide continuing
                            professional development to its members and other stakeholders as provided in Administrative
                            Order Nos. 278 and 70, dated 1992 and 2003, respectively. All these we owe to our members and
                            stakeholders for their unwavering support and continuous patronage of our trainings, webinars
                            and other events.
                        </p>

                        <p>
                        <ol type="1" style="margin-left: 2rem">
                            <li>Construction of 2 floors of AGIA building by the end of 2023;</li>
                            <li>Establish Performance Evaluation System for Staff and Incentive Mechanism for Board of
                                Directors;</li>
                            <li>Upgrade and automate the Human Resource Management System;</li>
                            <li>Adopt the Ladderized Training Program for Internal Auditors and introduce new short courses
                                and latest trends on internal auditing and other related topics (both technical and soft
                                skills);</li>
                            <li>Expand the pool of AGIA Resource Persons;</li>
                            <li>Implement programs and strategies to increase and sustain membership;</li>
                            <li>Strengthen collaboration with AGIA partners;</li>
                            <li>Strengthen Strategic Communication Program;</li>
                            <li>ISO Certification and Risk Management; and</li>
                            <li>Ensure fiscal prudence and compliance with regulatory requirements.</li>
                        </ol>
                        </p>
                        <p>Subsequently, the AGIA’s 2022-2023 Strategic and Operations Plan was crafted to ensure the
                            achievement of the nine strategic objectives and ten priority programs/initiatives. Trainings,
                            webinars, fora and other learning and development interventions for our members and stakeholders
                            were lined up for this year, coupled with activities and events to intensify AGIA’s partnerships
                            with other public and private agencies and institutions. For AGIA as a training provider, we
                            intend to have it certified and accredited by distinguished certifying and accreditation
                            institutions.</p>
                        <p>The AGIA Strategy Map, President’s ten priorities and Strategic and Operations Plan will be the
                            AGIA’s lighthouse that will serve as beacons to keep it on the right track in the attainment of
                            its goals and realization of its vision.</p>
                        <p>Looking forward to seeing you all in this year’s activities. Let’s hope and pray for a COVID-free
                            and healthier year. Thank you.</p>
                        <p>Mabuhay ang AGIANs! Mabuhay ang AGIA!</p>

                    </div>
                    <div class="col-md-4 president-message-right-content text-center d-none d-lg-block">
                        <img src="{{ asset('img/president-img.jpg') }}" alt="">
                        <h4>Marissa N. Fabricante, CICA</h4>
                        <p>AGIA President</p>
                        <p>CY 2022-2023</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
