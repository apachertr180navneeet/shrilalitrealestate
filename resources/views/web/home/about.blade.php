@extends('web.layouts.app')
@section('content')

<!--===== PAGE TITLE =====-->
<div class="page-title page-main-section parallaxie">
    <div class="container padding-bottom-top-120 text-uppercase text-center">
        <div class="main-title">
            <h1>about us</h1>
            <h5>10 Years Of Experience!</h5>
            <div class="line_4"></div>
            <div class="line_5"></div>
            <div class="line_6"></div>
            <a href="{{route('/')}}">home</a><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span><a
                href="{{route('aboutus')}}">about us</a>
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
                    <h2 class="text-uppercase">Company <span class="color_red">overview</span></h2>
                    <div class="line_1"></div>
                    <div class="line_2"></div>
                    <div class="line_3"></div>
                    <p class="mt-3">Nor again is there anyone who loves or pursues or desires to obtain pain of
                        itself, because it is pain, but because occasionally. Nor again is there anyone who loves or
                        pursues or desires to obtain pain of itself, because it is pain, but because
                        occasionally. Nor again is there anyone who loves or pursues or desires to obtain pain of
                        itself, because it is pain, but because occasionally.
                    </p>
                    <p class="mt-3">Nor again is there anyone who loves or pursues or desires to obtain pain of
                        itself, because it is pain, but because occasionally. Nor again is there anyone who loves or
                        pursues or desires to obtain pain of itself, because it is pain, but because occasionally.
                    </p>
                    <a class="link_arrow dark_border mt-4" href="">Read More</a>
                </div>
                <div class="offset-lg-1 col-lg-6 col-md-12">
                    <div id="about_single" class="owl-carousel">
                        <div class="item">
                            <div class="content-right-md">
                                <figure class="effect-layla">
                                    <img src="{{ asset('assets/web/images/about-2.jpg') }}" alt="img" />
                                    <figcaption> </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="item">
                            <div class="content-right-md">
                                <figure class="effect-layla">
                                    <img src="{{ asset('assets/web/images/about-1.jpg') }}" alt="img" />
                                    <figcaption> </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="item">
                            <div class="content-right-md">
                                <figure class="effect-layla">
                                    <img src="{{ asset('assets/web/images/about-2.jpg') }}" alt="img" />
                                    <figcaption> </figcaption>
                                </figure>
                            </div>
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
                    <li>
                        <p>Strategy</p>
                        <p> 95%</p>
                    </li>
                    <li class="progress mb-4">
                        <div class="progress-bar" data-width="95"> </div>
                    </li>
                    <li>
                        <p>Design</p>
                        <p> 78%</p>
                    </li>
                    <li class="progress  mb-4">
                        <div class="progress-bar" data-width="78"> </div>
                    </li>
                    <li>
                        <p>WordPress</p>
                        <p> 70%</p>
                    </li>
                    <li class="progress  mb-4">
                        <div class="progress-bar" data-width="70"> </div>
                    </li>
                    <li>
                        <p>Marketing</p>
                        <p> 85%</p>
                    </li>
                    <li class="progress">
                        <div class="progress-bar" data-width="85"> </div>
                    </li>
                </ul>
            </div>
            <div class="offset-lg-1 col-lg-6 col-md-12">
                <h2 class="text-uppercase">who we <span class="color_red">are</span></h2>
                <div class="line_1"></div>
                <div class="line_2"></div>
                <div class="line_3"></div>
                <p class="mt-3 mb-3">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                </p>
                <p>sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores. Sed ut perspiciatis unde
                    omnis iste natus error sit voluptatem</p>
            </div>
        </div>
    </div>
</section>
<!--===== #/WHO WE ARE =====-->

<!--===== TEAM  =====-->
<section id="teams" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h2 class="text-uppercase">Our <span class="color_red">experts</span></h2>
                <div class="line_1"></div>
                <div class="line_2"></div>
                <div class="line_3"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="team-member mt-4 text-center">
                    <div class="team-img">
                        <img src="{{ asset('assets/web/images/t-s-1.jpg') }}" alt="">
                    </div>
                    <div class="team-hover">
                        <div class="desk">
                            <h4 class="mb-1">I love to desing</h4>
                            <p>I love to introduce myself as a hardcore Web Designer.</p>
                        </div>
                        <div class="s-link">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-title mt-2 text-center">
                    <h3>Martin Smith</h3>
                    <span>Founder & CEO</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="team-member mt-4 text-center">
                    <div class="team-img">
                        <img src="{{ asset('assets/web/images/t-s-2.jpg') }}" alt="">
                    </div>
                    <div class="team-hover">
                        <div class="desk">
                            <h4 class="mb-1">I love to desing</h4>
                            <p>I love to introduce myself as a hardcore Web Designer.</p>
                        </div>
                        <div class="s-link">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-title mt-2 text-center">
                    <h3>Franklin Harbet</h3>
                    <span>Civil Engineer</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="team-member mt-4 text-center">
                    <div class="team-img">
                        <img src="{{ asset('assets/web/images/t-s-3.jpg') }}" alt="">
                    </div>
                    <div class="team-hover">
                        <div class="desk">
                            <h4 class="mb-1">I love to desing</h4>
                            <p>I love to introduce myself as a hardcore Web Designer.</p>
                        </div>
                        <div class="s-link">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-title mt-2 text-center">
                    <h3>Linda Anderson</h3>
                    <span>Marketing Manager</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== #/TEAM  =====-->

<!--===== IMAGE WITH CONTENT =====-->
<section class="info_section parallaxie">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-12">
                <div class="right_box_inner right_box padding">
                    <div class="white_content text-center">
                        <lord-icon
                            src="https://cdn.lordicon.com/laqlvddb.json"
                            trigger="loop"
                            delay="1500"
                            state="loop-3d-roll"
                            colors="primary:#ffffff,secondary:#ffffff"
                            style="width:100px;height:100px">
                        </lord-icon>
                        <h3 class="my-2">Residential</h3>
                        <p>Duis autem vel eum iriure dolor in hend rerit in vulputate velit esse molestie vel illum
                            dolore nulla facilisis.</p>
                    </div>
                    <div class="white_content text-center">
                        <lord-icon
                            src="https://cdn.lordicon.com/hicajugo.json"
                            trigger="loop"
                            delay="2000"
                            colors="primary:#ffffff,secondary:#ffffff"
                            style="width:100px;height:100px">
                        </lord-icon>
                        <h3 class="my-2">Commercial</h3>
                        <p>Duis autem vel eum iriure dolor in hend rerit in vulputate velit esse molestie vel illum
                            dolore nulla facilisis.</p>
                    </div>
                    <div class="white_content text-center">
                        <lord-icon
                            src="https://cdn.lordicon.com/bgebyztw.json"
                            trigger="loop"
                            delay="2000"
                            colors="primary:#ffffff,secondary:#ffffff"
                            style="width:100px;height:100px">
                        </lord-icon>
                        <h3 class="my-2">Our Best Staff</h3>
                        <p>Duis autem vel eum iriure dolor in hend rerit in vulputate velit esse molestie vel illum
                            dolore nulla facilisis.</p>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>
<!--===== #/IMAGE WITH CONTENT =====-->

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
        <div class="row">
            <div class="col-md-4 col-sm-4 mt-4">
                <div class="feature_box equal-height">
                    <span class="icon"> <i class="icon-select-an-objecto-tool"></i></span>
                    <div class="description">
                        <h4>Wide Range of Properties</h4>
                        <p>Aliquam gravida magna et fringilla convallis. Pellentesque habitant morbi </p>
                        <a href="showcase_property.html" class="link_arrow mt-2">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 mt-4">
                <div class="feature_box equal-height">
                    <span class="icon"><i class="icon-user-tie"></i></span>
                    <div class="description">
                        <h4>14 Agents for Your Service</h4>
                        <p>Aliquam gravida magna et fringilla convallis. Pellentesque habitant morbi </p>
                        <a href="showcase_property.html" class="link_arrow mt-2">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 mt-4">
                <div class="feature_box equal-height">
                    <span class="icon"><i class="fa-solid fa-money-check-dollar"></i></span>
                    <div class="description">
                        <h4>Best Price Guarantee!</h4>
                        <p>Aliquam gravida magna et fringilla convallis. Pellentesque habitant morbi </p>
                        <a href="showcase_property.html" class="link_arrow mt-2">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 mt-4">
                <div class="feature_box equal-height">
                    <span class="icon"> <i class="icon-select-an-objecto-tool"></i></span>
                    <div class="description">
                        <h4>Wide Range of Properties</h4>
                        <p>Aliquam gravida magna et fringilla convallis. Pellentesque habitant morbi </p>
                        <a href="showcase_property.html" class="link_arrow mt-2">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 mt-4">
                <div class="feature_box equal-height">
                    <span class="icon"><i class="icon-user-tie"></i></span>
                    <div class="description">
                        <h4>14 Agents for Your Service</h4>
                        <p>Aliquam gravida magna et fringilla convallis. Pellentesque habitant morbi </p>
                        <a href="showcase_property.html" class="link_arrow mt-2">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 mt-4">
                <div class="feature_box equal-height">
                    <span class="icon"><i class="fa-solid fa-money-check-dollar"></i></span>
                    <div class="description">
                        <h4>Best Price Guarantee!</h4>
                        <p>Aliquam gravida magna et fringilla convallis. Pellentesque habitant morbi </p>
                        <a href="showcase_property.html" class="link_arrow mt-2">Read More</a>
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