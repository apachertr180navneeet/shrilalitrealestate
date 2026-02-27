@extends('web.layouts.app')

@section('content')

<!--===== PAGE TITLE =====-->
<div class="page-title page-main-section parallaxie">
    <div class="container padding-bottom-top-120 text-uppercase text-center">
        <div class="main-title">
            <h1>About Us</h1>
            <h5>10 Years Of Experience In Real Estate</h5>
            <div class="line_4"></div>
            <div class="line_5"></div>
            <div class="line_6"></div>
            <a href="{{route('/')}}">Home</a>
            <span><i class="fa fa-angle-double-right"></i></span>
            <a href="{{route('aboutus')}}">About Us</a>
        </div>
    </div>
</div>
<!--===== #/PAGE TITLE =====-->


<!--===== ABOUT US =====-->
<section id="about_us" class="about-us padding">
    <div class="container">
        <div class="history-section">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <h2 class="text-uppercase">Company <span class="color_red">Overview</span></h2>
                    <div class="line_1"></div>
                    <div class="line_2"></div>
                    <div class="line_3"></div>

                    <p class="mt-3">
                        Shri Lalit Real Estate is a trusted name in the real estate industry,
                        delivering reliable property solutions with honesty, transparency,
                        and professionalism. With more than 10 years of experience,
                        we specialize in residential plots, commercial properties,
                        land investments, and rental services.
                    </p>

                    <p class="mt-3">
                        Our mission is to help clients find the right property that matches
                        their needs and budget. We provide complete assistance from property
                        selection to documentation and final transaction, ensuring a smooth
                        and secure experience for every client.
                    </p>

                    <a class="link_arrow dark_border mt-4" href="{{ route('contact') }}">Contact Us</a>
                </div>

                <div class="offset-lg-1 col-lg-6 col-md-12">
                    <div id="about_single" class="owl-carousel">
                        <div class="item">
                            <figure class="effect-layla">
                                <img src="{{ asset('public/assets/web/images/about-2.jpg') }}" alt="About Image">
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="effect-layla">
                                <img src="{{ asset('public/assets/web/images/about-1.jpg') }}" alt="About Image">
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="effect-layla">
                                <img src="{{ asset('public/assets/web/images/about-2.jpg') }}" alt="About Image">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== #/ABOUT US =====-->


<!--===== WHO WE ARE =====-->
<section id="we_are">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 skills">
                <ul class="progress-bar-wrapper">
                    <li><p>Property Strategy</p><p>95%</p></li>
                    <li class="progress mb-4"><div class="progress-bar" data-width="95"></div></li>

                    <li><p>Market Knowledge</p><p>90%</p></li>
                    <li class="progress mb-4"><div class="progress-bar" data-width="90"></div></li>

                    <li><p>Customer Satisfaction</p><p>98%</p></li>
                    <li class="progress mb-4"><div class="progress-bar" data-width="98"></div></li>

                    <li><p>Investment Planning</p><p>85%</p></li>
                    <li class="progress"><div class="progress-bar" data-width="85"></div></li>
                </ul>
            </div>

            <div class="offset-lg-1 col-lg-6 col-md-12">
                <h2 class="text-uppercase">Who We <span class="color_red">Are</span></h2>
                <div class="line_1"></div>
                <div class="line_2"></div>
                <div class="line_3"></div>

                <p class="mt-3 mb-3">
                    We are a dedicated team of real estate professionals committed
                    to providing transparent and customer-focused services.
                    Our deep understanding of the local property market helps
                    clients make confident and informed decisions.
                </p>

                <p>
                    Whether you are buying your dream home, investing in land,
                    or selling commercial property, Shri Lalit Real Estate
                    ensures fair dealing, competitive pricing, and complete
                    legal documentation support.
                </p>
            </div>
        </div>
    </div>
</section>
<!--===== #/WHO WE ARE =====-->


<!--===== TEAM =====-->
<section id="teams" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h2 class="text-uppercase">Our <span class="color_red">Experts</span></h2>
                <div class="line_1"></div>
                <div class="line_2"></div>
                <div class="line_3"></div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4 text-center">
                <div class="team-member mt-4">
                    <div class="team-img">
                        <img src="{{ asset('public/assets/web/images/t-s-1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="team-title mt-2">
                    <h3>Lalit Sharma</h3>
                    <span>Founder & Director</span>
                </div>
            </div>

            <div class="col-md-4 text-center">
                <div class="team-member mt-4">
                    <div class="team-img">
                        <img src="{{ asset('public/assets/web/images/t-s-2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="team-title mt-2">
                    <h3>Rajesh Mehta</h3>
                    <span>Property Consultant</span>
                </div>
            </div>

            <div class="col-md-4 text-center">
                <div class="team-member mt-4">
                    <div class="team-img">
                        <img src="{{ asset('public/assets/web/images/t-s-3.jpg') }}" alt="">
                    </div>
                </div>
                <div class="team-title mt-2">
                    <h3>Priya Verma</h3>
                    <span>Marketing Head</span>
                </div>
            </div>

        </div>
    </div>
</section>
<!--===== #/TEAM =====-->


<!--===== WHAT WE DO =====-->
<section id="our-services" class="we_are bg_light padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-uppercase">What We <span class="color_red">Do</span></h2>
                <div class="line_1"></div>
                <div class="line_2"></div>
                <div class="line_3"></div>
            </div>
        </div>

        <div class="row mt-4">

            <div class="col-md-4">
                <div class="feature_box equal-height">
                    <span class="icon"><i class="fa fa-home"></i></span>
                    <div class="description">
                        <h4>Residential Properties</h4>
                        <p>We deal in houses, villas, apartments, and residential plots at prime locations.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature_box equal-height">
                    <span class="icon"><i class="fa fa-building"></i></span>
                    <div class="description">
                        <h4>Commercial Projects</h4>
                        <p>Shops, offices, showrooms, and commercial land for profitable investments.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature_box equal-height">
                    <span class="icon"><i class="fa fa-chart-line"></i></span>
                    <div class="description">
                        <h4>Investment Guidance</h4>
                        <p>Expert advice to maximize your returns with secure and strategic real estate planning.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--===== #/WHAT WE DO =====-->

@endsection

@section('script')
@endsection