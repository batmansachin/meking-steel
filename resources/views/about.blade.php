@extends('layouts.app')

@section('content')
    <main class="page-content">
        <!-- Classic Breadcrumbs-->
        <section class="breadcrumb-classic">
            <div class="rd-parallax">
                <div data-speed="0.25" data-type="media" data-url="{{ URL::asset('public/res/images/breadcrumbs-parallax-01.jpg') }}" class="rd-parallax-layer"></div>
                <div data-speed="0" data-type="html" class="rd-parallax-layer section-top-75 section-md-top-150 section-lg-top-260">
                    <div class="shell">
                        <ul class="list-breadcrumb">
                            <li><a href="{{ route('index') }}">home</a></li>
                            <li>about
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section >
            <div class="shell">
                <div class="range">
                    <div class="cell-lg-6">
                        <h1>About us</h1>
                        <h2>Meking steel – A Tradition Of Excellence</h2>
                        <p>We are specialized in the construction, especially steel structure and metal curtain wall&roofing system,We are a company which is engaged in Engineering/Production/delivery and Construction the pre-fabricated(pre-engineering) steel structure, Included Light and heavy steel structures, space frame structures, multi layer structures, mezzanine structures, Meanwhile we are also devote to metal roofing and building metal curtain wall system, Al-Mg-Mn alloy sheet is our own especially products whose exclusive coating can supply long service life and external appearance.and through 12 years development,our sales area have expanded to more than 20 countries in the word.Such as French,germany,chile, columbia,brazil,thailand,Saudi Arabia,Pakistan ,india,Bangladesh,Ghana and south africa etc.</p>
                        <h3>Our reputation</h3>
                        <p>We have stand a absolute advantages in India, meanwhile, our business market have been expanded to 20 countiers around the world, such as Saudi Arabia, india, Turkey, Pakistan, Germany, Colombia, Brazil,Chile,thailand and Ghana. And we got a good feed-back from our customers there.</p>
                    </div>
                    <div class="cell-lg-6">
                    <SPACER TYPE=HORIZONTAL SIZE=50>
                        <img src="{{ URL::asset('public/res/images/about_us.jpg' ) }}" alt="" width="700" height="450" class="img-responsive"/ style="margin-top: 200px" ;>
                        <img src="{{ URL::asset('public/res/images/about_us2.jpg' ) }}" alt="" width="700" height="450" class="img-responsive"/>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-75 section-md-100 section-lg-120 section-xl-130">
            <div class="shell">
                <h2><span class="small">Our Characteristics</span>What defines us</h2>
                <div class="range">
                    <div class="cell-md-6">
                        <blockquote class="quote-default text-sm-left">
                            <h5>
                                <q>Quality is the life of an enterprise, our company has strongly technical support,We have 3 production base, Our company now have 896 people of staff,and among of them have 175 people for managing the Tec. And engineer,we have domestic and overseas roof &steel structure design engineers and senior experts 86 people, and our production capacity for steel structure is 50000 tons, We have imported full sets of world first class professional steel structure and spray production equipment from USA,Japan,Germany to ensure have a complete quality control system.and passed ISO9001:2008 and ISO14001:2004 assessment.</q>
                            </h5>
                        </blockquote>
                    </div>
                    <div class="cell-md-6">
                        <blockquote class="quote-default quote-default-variant-1 text-sm-left">
                            <h5>
                                <q>Our aim is to be the best construction service provider in the world,we are always insist on supplying qualified products and service with reasonable price to satisfying customers,we warmly welcome customers from domestic and overseas to contact and visit us,we would like to establish stably and long-term business relationship with customers all over the world on mutual benefit.</q>
                            </h5>

                        </blockquote>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection