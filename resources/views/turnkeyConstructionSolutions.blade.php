@extends('layouts.app')

@section('content')
        <!-- Page Content-->
<main class="page-content">
    <!-- Classic Breadcrumbs-->
    <section class="breadcrumb-classic">
        <div class="rd-parallax">
            <div data-speed="0.25" data-type="media" data-url="{{ URL::asset('public/res/images/breadcrumbs-parallax-03.jpg') }}" class="rd-parallax-layer"></div>
            <div data-speed="0" data-type="html" class="rd-parallax-layer section-top-75 section-md-top-150 section-lg-top-260">
                <div class="shell">
                    <ul class="list-breadcrumb">
                        <li><a href="index.html">home</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li>Single service
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section-75 section-md-100 section-lg-150">
        <div class="shell">
            <div class="range range-md-justify">
                <div class="cell-md-8 cell-lg-7 cell-xl-6">
                    <div class="inset-md-right-30 inset-lg-right-0">
                        <h1>Turnkey Construction Solutions</h1>
                        <p>Meking Steel continues to offer its high performance General Contracting services for owners and clients who are ready to start their projects with comprehensive design documents for both large and small scale projects and prefer a traditional Lump Sum approach when it comes to the project.</p>
                        <div class="well-custom">
                            <h5>Completed over 200 projects in 7 states - on time and within budget.</h5>
                        </div>
                        <img src="{{ URL::to('public/res/images/tcs.jpg') }}" style="width: 675px; height: 500px">
                        <p>General Contracting is the contract type often used when the project design is complete. General Contractors typically bid against each other and the owner selects the lowest or best-value bid. Constructo has the right relationships with the right people. We can identify the most qualified subcontractors, specialists and suppliers to help you achieve your vision. Constructo is the on-site manager for the architect and owner, and is responsible for managing time and costs.</p>
                        <p>We think not only about the 'big picture,' but we make sure to think about all the little details that even the biggest projects can incorporate. Constructo puts your dreams into reality by building something that was originally only scribbled on paper. As dreams come to life, Constructo keeps you in the know and ensures that you are well informed about what is going on throughout the entirety of the project.</p>
                    </div>
                </div>
                <div class="cell-md-4 cell-lg-4 cell-xl-3">
                    <div class="well-custom-1">
                        <h4 class="text-regular">Our Services</h4>
                        <ul class="list-xs list-marked">
                            <li class="active"><a href="#">Pre Engineered Buildings</a></li>
                            <li><a href="#" class="text-content">Design-Build</a></li>
                            <li><a href="#" class="text-content">Pre-Construction</a></li>
                            <li><a href="#" class="text-content">Interiors</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-30"></section>
    <div class="shell">
        <h2>View some of our recent projects</h2>
        <div class="range">
            <div class="cell-md-4 cell-sm-6"><img src="{{ URL::asset('public/res/images/rp1.jpg' ) }}" alt="" width="485" height="555" class="img-responsive"/>
                <h6><a href="#">Residential House at Pune.</a></h6>
                <p><a href="#" class="text-content">Building</a><span>,</span>  <a href="#" class="text-content">House</a>
                </p>
            </div>
            <div class="cell-md-4 cell-sm-6 offset-top-40 offset-sm-top-0"><img src="{{ URL::asset('public/res/images/rp2.jpg' ) }}" alt="" width="485" height="555" class="img-responsive"/>
                <h6><a href="#">Eastwood Hotel Pune</a></h6>
                <p><a href="#" class="text-content">Building</a><span>,</span>  <a href="#" class="text-content">Hotel</a>
                </p>
            </div>
            <div class="cell-md-4 cell-sm-6 offset-top-40 offset-md-top-0"><img src="{{ URL::asset('public/res/images/rp3.jpg' ) }}" alt="" width="485" height="555" class="img-responsive"/>
                <h6><a href="#">Pune Mega Mall</a></h6>
                <p><a href="#" class="text-content">Building</a><span>,</span>  <a href="#" class="text-content">Mall</a>
                </p>
            </div>
        </div>
    </div>
    <section class="section-75 section-md-100 section-lg-120 section-xl-130">
        <div class="shell">
            <h2><span class="small">Testimonials</span>What clients say about our company</h2>
            <div class="range">
                <div class="cell-md-6">
                    <blockquote class="quote-default text-sm-left">
                        <h5>
                            <q>“ When we needed a design and construction specialists, Constructo was there for us. We had a vision and an idea of how much we wanted to spend and they made all of that happen. ”</q>
                        </h5>
                        <h6 class="offset-top-30 offset-md-top-45">
                            <cite>Peter Handerson</cite>
                        </h6><span class="offset-top-10 small-xs">CEO, Firetree Co.</span>
                    </blockquote>
                </div>
                <div class="cell-md-6">
                    <blockquote class="quote-default quote-default-variant-1 text-sm-left">
                        <h5>
                            <q>“ The pressure was put on this team from the day we broke ground and they heeded the call. These dedicated young construction professionals show what great teamwork is all about. ”</q>
                        </h5>
                        <h6 class="offset-top-30 offset-md-top-45">
                            <cite>Jim Johnson</cite>
                        </h6><span class="offset-top-10 small-xs">Head manager, Frober Design</span>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
    <section class="section-50 section-md-75 section-md-100 section-lg-120 section-xl-150 bg-wild-sand">
        <div class="shell text-left">
            <h2><span class="small">contact us</span>If you have any questions, just fill in the contact form, and we will answer you shortly.</h2>
            <form data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" class="rd-mailform text-left">
                <div class="range offset-top-40 offset-md-top-60">
                    <div class="cell-lg-4 cell-md-6">
                        <div class="form-group postfix-xl-right-40">
                            <label for="contact-name" class="form-label">Name *</label>
                            <input id="contact-name" type="text" name="name" data-constraints="@Required" class="form-control">
                        </div>
                        <div class="form-group postfix-xl-right-40">
                            <label for="contact-email" class="form-label">E-mail *</label>
                            <input id="contact-email" type="email" name="email" data-constraints="@Email @Required" class="form-control">
                        </div>
                    </div>
                    <div class="cell-lg-4 cell-md-6 offset-top-20 offset-md-top-0">
                        <div class="form-group postfix-xl-right-40">
                            <label for="contact-company" class="form-label">Company *</label>
                            <input id="contact-company" type="text" name="company" data-constraints="@Required" class="form-control">
                        </div>
                        <div class="form-group postfix-xl-right-40">
                            <label for="contact-subject" class="form-label">Subject *</label>
                            <input id="contact-subject" type="text" name="subject" data-constraints="@Required" class="form-control">
                        </div>
                    </div>
                    <div class="cell-lg-4 offset-top-20 offset-lg-top-0">
                        <div class="form-group postfix-xl-right-40">
                            <label for="contact-message" class="form-label">Message *</label>
                            <textarea id="contact-message" name="message" data-constraints="@Required" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-form btn-default">Send message</button>
            </form>
        </div>
    </section>
    <section class="section-30 section-sm-75">
        <div class="shell">
            <div class="range"></div>
        </div>
    </section>
</main>
    @endsection