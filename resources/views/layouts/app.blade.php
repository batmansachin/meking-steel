<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
<head>
    <!-- Site Title-->
    <?php $title = 'MEKING STEEL' ?>
    <title>{{ $title }}</title> 
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{ URL::asset('public/res/images/favicon.png') }}" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css"
          href="//fonts.googleapis.com/css?family=Poppins:400,500,700%7CQuattrocento+Sans:400,700">
    <link rel="stylesheet" href="{{ URL::asset('public/res/css/style.css') }}">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;">
        <a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
                src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
    </div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
{{--<!-- Page--> {{ dd(Route::current()->action['as']) }}--}}
<div class="page text-center text-md-left">

    <div class="page-loader">
        <div>
            <div class="page-loader-body">
                <div class="cssload-loader">
                    <div class="cssload-inner cssload-one"></div>
                    <div class="cssload-inner cssload-two"></div>
                    <div class="cssload-inner cssload-three"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header-->
    <header class="page-head">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav data-stick-up-clone="true" data-layout="rd-navbar-fixed" data-md-layout="rd-navbar-static"
                 data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
                 data-lg-device-layout="rd-navbar-static" data-lg-stick-up-offset="40px"
                 class="rd-navbar rd-navbar-default">
                <div class="rd-navbar-inner">
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span>
                        </button>
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand"><a href="#" class="brand-name"><img
                                        src="{{ URL::asset('public/res/images/Logo.jpg') }}" width="100"
                                        height="43" alt="MEKING STEEL"><span style="color: #845f57; font-size: 24px">MEKING STEEL</span></a>
                        </div>
                    </div>
                    <div class="rd-navbar-nav-wrap">
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                            <li ><a href="{{ route('index') }}">Home</a></li>

                            <li><a href="{{ route('about') }}">About us</a></li>

                            <li><a href="{{ route('services') }}">Products</a>
                                <ul class="rd-navbar-dropdown">
                                    
{{--                                    <!-- <li><a href="{{ route('peb') }}">Pre Engineered Buildings</a></li> -->--}}
                                    <li><a href="{{route('building-component')}}">Building Components</a></li>
                                    <li><a href="{{route('structure-steel-buildings')}}">Structural Steel Buildings</a></li>
                                    <li><a href="{{route('turnkey-construction-solutions')}}">Turnkey Construction Solutions</a></li>
                                    <li><a href="{{route('product-literature')}}">Product Literature</a></li>
                                    <li><a href="{{route('product-R&D')}}">Product R&D</a></li>
                                    <li><a href="{{route('quality-assurance')}}">Quality Assurance</a></li>
                                    <li><a href="{{route('PEB-basic-terms')}}">PEB Basic Terms</a></li>
                                </ul>
                            </li>

                            <li><a href="{{ route('careers') }}">Careers</a></li>
                            <li><a href="{{ route('contact') }}">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    <footer class="page-footer page-footer-default">
        <section class="section-75 section-sm-80 section-md-100 section-lg-top-140">
            <div class="shell">
                <div class="range">
                    <div class="cell-md-6">
                        <div class="divider-block">
                            <h2>Newsletter Sign Up</h2>
                            <h6>Enter your email address to get the latest Meking Steel news, events and special offers
                                delivered right to your inbox.</h6>
                        </div>
                    </div>
                    <div class="cell-md-6 cell-xl-5 cell-xl-preffix-1 cell-md-bottom">
                        <form data-form-output="form-output-global" data-form-type="subscribe" method="post"
                              action="bat/rd-mailform.php" class="rd-mailform text-left rd-mailform-subscribe">
                            <div class="form-group">
                                <label for="footer-subscribe-email" class="form-label form-label-subscribe">Enter your
                                    e-mail</label>
                                <input id="footer-subscribe-email" type="email" name="email"
                                       data-constraints="@Email @Required" class="form-control form-control-subscribe">
                            </div>
                            <button type="submit" class="btn btn-default btn-default-white">subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <div class="shell">
            <hr class="divider divider-mine-shaft">
        </div>
        <section class="section-75 section-sm-80 section-md-100">
            <div class="shell">
                <div class="range text-sm-left">
                    <div class="cell-sm-6 cell-lg-4"><span
                                class="small text-spacing-340 text-white text-uppercase text-bold">About company</span>

                        <p class="offset-top-20">We remain true to the same principles on which our company was founded
                            over a hundred years ago: providing superior service to our clients, putting safety first,
                            creating opportunities for our people.</p>
                    </div>
                    <div class="cell-sm-6 cell-lg-4 cell-xl-3 offset-top-40 offset-lg-top-0"><span
                                class="small text-spacing-340 text-white text-uppercase text-bold">INFORMATION</span>
                        <ul class="list list-marked offset-top-20 list-xs">
                            <li><a href="about.html" class="text-white">About us</a></li>
                            <li><a href="services.html" class="text-white">Our services</a></li>
                        </ul>
                    </div>
                    <div class="cell-sm-6 cell-lg-4 cell-xl-3 offset-top-40 offset-lg-top-0"><span
                                class="small text-spacing-340 text-white text-uppercase text-bold">CONTACT INFO</span>

                        <p class="offset-top-20">You can always contact us via email or phone. Get in touch with us
                            today to find out more about our services.</p>
                        <ul class="list offset-top-20 text-left">
                            <li>
                                <div class="unit unit-horizontal unit-spacing-xs">
                                    <div class="unit-left"><span class="icon icon-primary fa-map-marker"></span></div>
                                    <div class="unit-body"><a href="#" class="text-gray-lighter">1901 Avenue of the
                                            Stars Suite 200 Washington, CA 90067</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="unit unit-horizontal unit-spacing-xs">
                                    <div class="unit-left"><span class="icon icon-primary fa-phone"></span></div>
                                    <div class="unit-body"><a href="callto:#" class="text-gray-lighter">646-325-0357</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="unit unit-horizontal unit-spacing-xs">
                                    <div class="unit-left"><span class="icon icon-primary fa-envelope"></span></div>
                                    <div class="unit-body"><a href="mailto:#" class="text-gray-lighter">mail@demolink
                                            .org</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-25 bg-gray-base">
            <div class="shell">
                <p class="small-xs">Copyright <span id="copyright-year"></span> All rights reserved by Meking Steel.
                    Powered By: <a href="http://innovalabs.tech" class="text-white">Innovalabs Technologies</a>
                </p>
            </div>
        </section>
    </footer>
</div>

<script src="{{ URL::asset('public/res/js/core.min.js') }}"></script>
<script src="{{ URL::asset('public/res/js/script.js') }}"></script>
</body>
</html>