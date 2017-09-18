@extends('layouts.app')

@section('content')
        <!-- Page Content-->
<main class="page-content">
    <div class="swiper-wrap-default">
        <div data-height="100vh" data-min-height="300px" data-slide-effect="fade" data-autoplay="false"
             class="swiper-container swiper-slider">
            <div class="swiper-wrapper">
                <div data-slide-bg="{{ URL::asset('public/res/images/home-01-slide-01.jpg') }}" class="swiper-slide">
                    <div class="swiper-slide-caption">
                        <div class="shell">
                            <div class="range section-100-vh range-xs-middle">
                                <div class="cell-md-10 cell-xl-8 cell-lg-11">
                                    <h1 data-caption-animate="fadeInLeft" data-caption-delay="250"
                                        class="text-white fadeInLeft animated">If it`s worth building,<br
                                                class="veil reveal-xl-block"> It`s worth building well.
                                    </h1>

                                    <p data-caption-animate="fadeInLeft" data-caption-delay="200"
                                       class="h6 offset-top-30 text-regent-st-blue">Meking Construction and Engineering
                                        India <br
                                                class="veil reveal-xl-block">is the leading
                                        construction company on the market. <br
                                                class="veil reveal-xl-block">We are trusted partners of both small and
                                        international
                                        companies located worldwide.
                                    </p><a href="project-single.html" data-caption-animate="fadeInLeft"
                                           data-caption-delay="150"
                                           class="btn btn-sunglow offset-top-25 offset-sm-top-55">learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-slide-bg="{{ URL::asset('public/res/images/home-01-slide-02.jpg' ) }}" class="swiper-slide">
                    <div class="swiper-slide-caption">
                        <div class="shell">
                            <div class="range section-100-vh range-xs-middle">
                                <div class="cell-md-10 cell-xl-8 cell-lg-11">
                                    <h1 data-caption-animate="fadeInLeft" data-caption-delay="250" class="text-white">
                                        Delivering our work safely all over the globe.</h1>

                                    <p data-caption-animate="fadeInLeft" data-caption-delay="200"
                                       class="h6 offset-top-30 text-regent-st-blue inset-xl-right-40">Meking
                                        Construction and Engineering India
                                        promotes an injury-free environment and provides the safest workplaces<br
                                                class="veil reveal-xl-block"> possible for our employees,
                                        subcontractors, clients and others who enter our construction sites.
                                    </p><a href="project-single.html" data-caption-animate="fadeInLeft"
                                           data-caption-delay="150"
                                           class="btn btn-sunglow offset-top-25 offset-sm-top-55">learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-slide-bg="{{ URL::asset('public/res/images/home-01-slide-03.jpg') }}" class="swiper-slide">
                    <div class="swiper-slide-caption">
                        <div class="shell">
                            <div class="range section-100-vh range-xs-middle">
                                <div class="cell-md-10 cell-xl-8 cell-lg-11">
                                    <h1 data-caption-animate="fadeInLeft" data-caption-delay="250" class="text-white">We
                                        are building a brighter future for everyone.</h1>

                                    <p data-caption-animate="fadeInLeft" data-caption-delay="200"
                                       class="h6 offset-top-30 text-regent-st-blue">With the team of experienced
                                        professionals, Meking Steel offers multiple solutions to its clients around the
                                        world. We deliver high-touch services to help clients with various steel
                                        construction
                                        projects.</p><a href="project-single.html" data-caption-animate="fadeInLeft"
                                                        data-caption-delay="150"
                                                        class="btn btn-sunglow offset-top-25 offset-sm-top-55">learn
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Swiper Navigation-->
            <div class="swiper-button-prev"><span>Prev</span></div>
            <div class="swiper-button-next"><span>Next</span></div>
        </div>
        <div class="swiper-left-sidebar"><span class="small text-darker text-uppercase text-bold text-spacing-340">Meking Construction and Engineering India</span>

            <div class="divider-custom veil reveal-lg-block"></div>
            <ul class="list text-center">
                <li><a href="#" class="ioon icon-sm icon-darker fa-facebook"></a></li>
                <li><a href="#" class="ioon icon-sm icon-darker fa-twitter"></a></li>
                <li><a href="#" class="ioon icon-sm icon-darker fa-google-plus"></a></li>
                <li><a href="#" class="ioon icon-sm icon-darker fa-instagram"></a></li>
            </ul>
        </div>
    </div>

    <!-- Our project -->
    <section class="section-top-50 section-lg-0">
        <div class="shell">
            <div class="range">
                <div class="cell-md-10 cell-lg-7 cell-xl-6">
                    <div class="divider-block">
                        <h2>Our projects</h2>

                        <p class="big text-darker">Our construction company has a long experience of work within
                            numerous commercial, NGO and governmental fields and industries…</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-wrap text-center wrap-fluid">
            <div data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-xl-items="5"
                 data-stage-padding="0" data-loop="true" data-margin="15" data-mouse-drag="true" data-autoplay="false"
                 data-dots="true" data-nav-custom=".owl-custom-navigation" class="owl-carousel">
                <div class="owl-item">
                    <div class="product"><img src="{{ URL::asset('public/res/images/home-03-372x500.jpg') }}" alt=""
                                              width="372" height="500" class="img-responsive"/>

                        <div class="product-content"><a href="project-single.html" class="small">Hearst Center</a></div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="product"><img src="{{ URL::asset('public/res/images/home-04-372x500.jpg') }}" alt=""
                                              width="372" height="500" class="img-responsive"/><a
                                href="project-single.html" class="product-content">
                            <div class="small">California Mega Mall</div>
                        </a>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="product"><img src="{{ URL::asset('public/res/images/home-05-372x500.jpg') }}" alt=""
                                              width="372" height="500" class="img-responsive"/><a
                                href="project-single.html" class="product-content">
                            <div class="small">Eastwood Hotel</div>
                        </a>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="product"><img src="{{ URL::asset('public/res/images/home-06-372x500.jpg') }}" alt=""
                                              width="372" height="500" class="img-responsive"/><a
                                href="project-single.html" class="product-content">
                            <div class="small">Residential House at Southward St.</div>
                        </a>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="product"><img src="{{ URL::asset('public/res/images/home-07-372x500.jpg') }}" alt=""
                                              width="372" height="500" class="img-responsive"/><a
                                href="project-single.html" class="product-content">
                            <div class="small">Westwood Child Center</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="owl-custom-navigation">
                <div class="owl-nav">
                    <div data-owl-prev class="owl-prev">Prew</div>
                    <div data-owl-next class="owl-next">Next</div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection