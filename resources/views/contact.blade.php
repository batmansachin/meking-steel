@extends('layouts.app')

@section('content')
        <!-- Page Content-->
<main class="page-content">
    <!-- Classic Breadcrumbs-->
    <section class="breadcrumb-classic">
        <div class="rd-parallax">
            <div data-speed="0.25" data-type="media" data-url="{{ URL::asset('public/res/images/breadcrumbs-parallax-07.jpg') }}"
                 class="rd-parallax-layer"></div>
            <div data-speed="0" data-type="html"
                 class="rd-parallax-layer section-top-75 section-md-top-150 section-lg-top-260">
                <div class="shell">
                    <ul class="list-breadcrumb">
                        <li><a href="{{ route('index') }}">home</a></li>
                        <li>Contact Us
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section-75 section-md-100 section-lg-150">
        <div class="rd-map-wrap">
            <div class="shell text-sm-left">
                <div class="range">
                    <div class="cell-sm-6 cell-lg-5 cell-xl-4">
                        <h1>Get in touch</h1>
                        <h6 class="offset-md-top-35">If you are living nearby, come visit Constructo in one of our
                            comfortable offices.</h6><span
                                class="small text-spacing-340 text-uppercase text-regular offset-top-40 offset-md-top-60">Headquarters</span>
                        <ul class="list offset-top-20 list-lg-middle text-left">
                            <li>
                                <div class="unit unit-horizontal unit-spacing-md">
                                    <div class="unit-left"><span class="icon icon-primary fa-map-marker"></span></div>
                                    <div class="unit-body">
                                        <h6><a href="#" class="text-darker"> Some Address</a></h6>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="unit unit-horizontal unit-spacing-md">
                                    <div class="unit-left"><span class="icon icon-primary fa-phone"></span></div>
                                    <div class="unit-body">
                                        <h6><a href="callto:#" class="text-darker">012 345 6789</a></h6>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="unit unit-horizontal unit-spacing-md">
                                    <div class="unit-left"><span class="icon icon-primary fa-envelope"></span></div>
                                    <div class="unit-body">
                                        <h6><a href="mailto:#" class="text-primary">sales@mekingsteel.com</a></h6>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="offset-top-40"></div>
                    </div>
                    <div class="cell-sm-6 cell-lg-preffix-1 cell-lg-5 cell-xl-preffix-2 cell-xl-6">
                        <div data-zoom="15" data-y="13.0514996" data-x="80.231102"
                             data-styles="[{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#444444&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:45}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#46bcec&quot;},{&quot;visibility&quot;:&quot;on&quot;}]}]"
                             class="rd-google-map rd-google-map__model">
                            <ul class="map_locations">
                                <li data-y="13.0514996" data-x="80.231102">
                                    <p>9863 - 9867 Mill Road, Cambridge, MG09 99HT</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-50 section-md-75 section-md-100 section-lg-120 section-xl-150 bg-wild-sand">
        <div class="shell text-left">
            <h2><span class="small">contact us</span>If you have any questions, just fill in the contact form, and we will answer you shortly.</h2>

            <form  method="post"
                  action="{{route('submit-query')}}" class="rd-mailform text-left">
                  {{ csrf_field() }}
                <div class="range offset-top-40 offset-md-top-60">
                    <div class="cell-lg-4 cell-md-6">
                        <div class="form-group postfix-xl-right-40">
                            <label for="contact-name" class="form-label">Name *</label>
                            <input id="contact-name" type="text" name="name" data-constraints="@Required"
                                   class="form-control">

                        </div>
                        <div class="form-group postfix-xl-right-40">
                            <label for="contact-email" class="form-label">E-mail *</label>
                            <input id="contact-email" type="email" name="email" data-constraints="@Email @Required"
                                   class="form-control">
                        </div>
                    </div>
                    <div class="cell-lg-4 cell-md-6 offset-top-20 offset-md-top-0">
                        <div class="form-group postfix-xl-right-40">
                            <label for="contact-company" class="form-label">Company *</label>
                            <input id="contact-company" type="text" name="company" data-constraints="@Required"
                                   class="form-control">
                        </div>
                        
                    </div>
                    <div class="cell-lg-4 offset-top-20 offset-lg-top-0">
                        <div class="form-group postfix-xl-right-40">
                            <label for="contact-message" class="form-label">Message *</label>
                            <textarea id="contact-message" name="message" data-constraints="@Required"
                                      class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-form btn-default" value="submit">
            </form>
        </div>
    </section>
    <section class="section-50 section-sm-75"></section>
</main>
@endsection