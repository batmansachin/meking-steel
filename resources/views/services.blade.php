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
                        <li><a href="{{ route('index') }}">home</a></li>
                        <li>Services
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section-75 section-md-100 section-lg-150">
        <div class="shell">
            <div class="range range-sm-center">
                <div class="cell-md-8 cell-lg-12 cell-sm-9">
                    <div class="range">
                        <div class="cell-lg-7 cell-xl-6 cell-md-8">
                            <h1>Services</h1>
                            <p>Meking Steel offers a progressive approach to design, project management, and general contracting; as well as providing full service development in cooperation with our clients.</p>
                        </div>
                    </div>
                    <div class="range range-lg-middle">
                        <div class="cell-lg-7 cell-xl-6">
                            <div class="inset-lg-right-30 inset-xl-right-0">
                                <h3><span class="small">Our area of expertise</span>At Meking Steel, we love what we do. That's why working with us, we can promise you top quality results and unparalleled customer service.</h3>
                                <p>Learn more about what we can offer you.</p>
                            </div>
                        </div>
                        <div class="cell-lg-5 cell-xl-preffix-1"><img src="{{ URL::asset('public/res/images/services-01-610x390.jpg' ) }}" alt="" width="610" height="390" class="img-responsive"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-30">
        <div class="shell">
            <div class="range">
                <div class="cell-sm-6 cell-lg-4 cell-xl-3"><span class="icon-sprite sprite-home-icon-01"></span>
                    <h5><a href="single-service.html"> General Contracting</a></h5>
                    <p class="text-justify">We have a long list of professional contractors, with whom our engineers and architects enjoy to work on a majority of our projects!</p>
                </div>
                <div class="cell-sm-6 cell-lg-4 cell-xl-3 offset-top-50 offset-sm-top-0 cell-xl-preffix-1"><span class="icon-sprite sprite-home-icon-03"></span>
                    <h5><a href="single-service.html" class="postfix-xl-right--25">Building Information Modeling</a></h5>
                    <p class="text-justify">Oftentimes physical and functional essence of any construction project needs to be represented digitally, in a 3D model format.</p>
                </div>
                <div class="cell-sm-6 cell-lg-4 cell-xl-3 offset-top-50 offset-lg-top-0 cell-xl-preffix-1"><span class="icon-sprite sprite-home-icon-02"></span>
                    <h5><a href="single-service.html"> Design & Build</a></h5>
                    <p class="text-justify">If a project is not too complex, we may hire a designer-builder type of contractor, to make the longevity of the construction shorter.</p>
                </div>
                <div class="cell-sm-6 cell-lg-4 cell-xl-3 offset-top-50"><span class="icon-sprite sprite-home-icon-06"></span>
                    <h5><a href="single-service.html"> Construction Services</a></h5>
                    <p class="text-justify">Our customers love the pace/quality tempo that we show during each of the principal construction processes!</p>
                </div>
                <div class="cell-sm-6 cell-lg-4 cell-xl-3 offset-top-50 cell-xl-preffix-1"><span class="icon-sprite sprite-home-icon-05"></span>
                    <h5><a href="single-service.html"> Pre-construction Services</a></h5>
                    <p class="text-justify">We take our time on initial planning before any construction begins, to balance all the financial and efficiency issues beforehand…</p>
                </div>
                <div class="cell-sm-6 cell-lg-4 cell-xl-3 offset-top-50 cell-xl-preffix-1"><span class="icon-sprite sprite-home-icon-04"></span>
                    <h5><a href="single-service.html"> Construction Management</a></h5>
                    <p class="text-justify">Professional construction project management is essential for facilitating and directing the entire process to achieve ideal results.</p>
                </div>
            </div>
        </div>
    </section>
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
</main>
@endsection