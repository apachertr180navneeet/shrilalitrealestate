@extends('web.layouts.app')
@section('content')

<!-- SLIDER START -->
<section class="rev_slider_wrapper">
    <div id="rev_slider_3" class="rev_slider" data-version="5.0">
        <ul>
            <!-- SLIDE  -->
            <li>
                <img src="{{ asset('assets/web/images/banner-4.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover"
                    class="rev-slidebg">
                <div class="tp-caption  tp-resizeme" data-x="left" data-hoffset="-80" data-y="top" data-voffset="300"
                    data-transform_idle="o:1;"
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                    data-responsive_offset="on" data-start="700">

                    <div class="slide-content left-slide">
                        <div class="title">Get First Class</div>
                        <div class="big-title">Real Property Advice</div>
                        <p>With over 10 years of experience helping businesses<br>to find comprehensive solutions.
                        </p>
                        <div class="btns-box">
                            <a href="#." class="btn_brd py-4">Read More</a>
                            <a href="#." class="btn_fill py-4">Contact us</a>
                        </div>
                    </div>
                </div>
            </li>
            {{--  <!-- SLIDE  -->
            <li>
                <img src="{{ asset('assets/web/images/banner-7.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover"
                    class="rev-slidebg">
                <div class="tp-caption  tp-resizeme" data-x="right" data-hoffset="-80" data-y="top"
                    data-voffset="300" data-transform_idle="o:1;"
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                    data-responsive_offset="on" data-start="1500">

                    <div class="slide-content right-slide">
                        <div class="title">Complete Your Dream With</div>
                        <div class="big-title">Idea Homes Real Estate</div>
                        <P>With over 10 years of experience helping businesses<br>to find comprehensive solutions.
                        </P>
                        <div class="btns-box">
                            <a href="#." class="btn_brd py-4">Read More</a>
                            <a href="#." class="btn_fill py-4">Contact us</a>
                        </div>
                    </div>
                </div>
            </li>
            <!-- SLIDE  -->
            <li>
                <img src="{{ asset('assets/web/images/banner-8.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover"
                    class="rev-slidebg">
                <div class="tp-caption  tp-resizeme" data-x="left" data-hoffset="-80" data-y="top" data-voffset="300"
                    data-transform_idle="o:1;"
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                    data-responsive_offset="on" data-start="1500">

                    <div class="slide-content left-slide">
                        <div class="title">The Best Theme For</div>
                        <div class="big-title">Real Estate Agency</div>
                        <p>With over 10 years of experience helping businesses<br>to find comprehensive solutions.
                        </p>
                        <div class="btns-box">
                            <a href="#." class="btn_brd py-4">Read More</a>
                            <a href="#." class="btn_fill py-4">Contact us</a>
                        </div>
                    </div>
                </div>
            </li>  --}}
        </ul>
    </div>
</section>
<!-- #/SLIDER END -->

<!-- ABOUT US START -->
<section id="about-sev" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <h2 class="text-uppercase">About Idea Homes<span class="color_red"> Real Estate</span></h2>
                        <div class="line_1"></div>
                        <div class="line_2"></div>
                        <div class="line_3"></div>
                    </div>
                </div>
                <div class="about-sev-tag">
                    <h4>A little about us and a breif history of how we started.</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's stan when an unknown printer took a galley of type and scramble. Lorem
                        Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <ul>
                        <li><i class="fa fa-check-square" aria-hidden="true"></i> Pleasure and praising pain was born</li>
                        <li><i class="fa fa-check-square" aria-hidden="true"></i> The great explorer of the truth</li>
                        <li><i class="fa fa-check-square" aria-hidden="true"></i> Anyone who loves or pursues or desires</li>
                        <li><i class="fa fa-check-square" aria-hidden="true"></i> The printing and typesetting industry.</li>
                    </ul>
                    <div class="founder-text">
                        <p>Who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur.</p>
                        <h3>- Ali Farhan, Founder.</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="about-sev-img">
                    <img src="{{ asset('assets/web/images/about.png') }}" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- #/ABOUT US END -->

<!-- PROPERTY LISTING START -->
<section id="property" class="bg_light padding">
    <div class="container">
        <div class="mb-5">
            <h2 class="uppercase">PROPERTY <span class="color_red">LISTINGS</span></h2>
            <div class="line_1"></div>
            <div class="line_2"></div>
            <div class="line_3"></div>
            <p>We have Properties in these Areas View a list of Featured Properties.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="property_item mb-5">
                    <div class="image">
                        <img src="{{ asset('assets/web/images/property-listing-1.jpg') }}" alt="listin" class="img-responsive">
                        <div class="property_meta">
                            <span><i class="fa fa-object-group"></i>530 sq ft </span>
                            <span><i class="fa fa-bed"></i>2</span>
                            <span><i class="fa fa-bath"></i>1 Bathroom</span></div>
                        <div class="price"><span class="tag">For Rent</span></div>
                        <div class="overlay">
                            <div class="centered"><a class="link_arrow white_border"
                                    href="property-details-1.html">View Detail</a></div>
                        </div>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3><a href="property-details-1.html">South Mervin Boulevard</a></h3>
                            <span>45 Regent Street, London, UK</span>
                            <p class="p-font-15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                power nonummy nibh tempor cum soluta nobis…</p>
                        </div>
                        <div class="favroute">
                            <p class="or-price">$8,600 Per Month</p>
                            <ul class="f-links">
                                <li><a href="#."><i class="icon-video"></i></a></li>
                                <li><a href="#."><i class="icon-like"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="property_item mb-5">
                    <div class="image">
                        <img src="{{ asset('assets/web/images/property-listing-2.jpg') }}" alt="listin" class="img-responsive">
                        <div class="property_meta">
                            <span><i class="fa fa-object-group"></i>530 sq ft </span>
                            <span><i class="fa fa-bed"></i>2</span>
                            <span><i class="fa fa-bath"></i>1 Bathroom</span></div>
                        <div class="price"><span class="tag">For Rent</span></div>
                        <div class="overlay">
                            <div class="centered"><a class="link_arrow white_border"
                                    href="property-details-1.html">View Detail</a></div>
                        </div>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3><a href="property-details-1.html">The Helux villa</a></h3>
                            <span>45 Regent Street, London, UK</span>
                            <p class="p-font-15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                power nonummy nibh tempor cum soluta nobis…</p>
                        </div>
                        <div class="favroute">
                            <p class="or-price">$5,600,000</p>
                            <ul class="f-links">
                                <li><a href="#."><i class=" icon-video"></i></a></li>
                                <li><a href="#."><i class="icon-like"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="property_item mb-5">
                    <div class="image">
                        <img src="{{ asset('assets/web/images/property-listing-3.jpg') }}" alt="listin" class="img-responsive">
                        <div class="property_meta">
                            <span><i class="fa fa-object-group"></i>530 sq ft </span>
                            <span><i class="fa fa-bed"></i>2</span>
                            <span><i class="fa fa-bath"></i>1 Bathroom</span></div>
                        <div class="price"><span class="tag">For Sale</span></div>
                        <div class="overlay">
                            <div class="centered"><a class="link_arrow white_border"
                                    href="property-details-1.html">View Detail</a></div>
                        </div>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3><a href="property-details-1.html">House in New York City</a></h3>
                            <span>Merrick Way, Miami, USA</span>
                            <p class="p-font-15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                power nonummy nibh tempor cum soluta nobis…</p>
                        </div>
                        <div class="favroute">
                            <p class="or-price">$8,600 Per Month</p>
                            <ul class="f-links">
                                <li><a href="#."><i class="icon-video"></i></a></li>
                                <li><a href="#."><i class="icon-like"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="property_item mb-5">
                    <div class="image">
                        <img src="{{ asset('assets/web/images/property-listing-4.jpg') }}" alt="listin" class="img-responsive">
                        <div class="property_meta">
                            <span><i class="fa fa-object-group"></i>530 sq ft </span>
                            <span><i class="fa fa-bed"></i>2</span>
                            <span><i class="fa fa-bath"></i>1 Bathroom</span></div>
                        <div class="price"><span class="tag">For Sale</span></div>
                        <div class="overlay">
                            <div class="centered"><a class="link_arrow white_border"
                                    href="property-details-1.html">View Detail</a></div>
                        </div>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3><a href="property-details-1.html">House in New York City</a></h3>
                            <span>Merrick Way, Miami, USA</span>
                            <p class="p-font-15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                power nonummy nibh tempor cum soluta nobis…</p>
                        </div>
                        <div class="favroute">
                            <p class="or-price">$32,650,000</p>
                            <ul class="f-links">
                                <li><a href="#."><i class="icon-video"></i></a></li>
                                <li><a href="#."><i class="icon-like"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="property_item mb-5">
                    <div class="image">
                        <img src="{{ asset('assets/web/images/property-listing-5.jpg') }}" alt="listin" class="img-responsive">
                        <div class="property_meta">
                            <span><i class="fa fa-object-group"></i>530 sq ft </span>
                            <span><i class="fa fa-bed"></i>2</span>
                            <span><i class="fa fa-bath"></i>1 Bathroom</span></div>
                        <div class="price"><span class="tag">For Rent</span></div>
                        <div class="overlay">
                            <div class="centered"><a class="link_arrow white_border"
                                    href="property-details-1.html">View Detail</a></div>
                        </div>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3><a href="property-details-1.html">Triple Story</a></h3>
                            <span>Merrick Way, Miami, USA</span>
                            <p class="p-font-15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                power nonummy nibh tempor cum soluta nobis…</p>
                        </div>
                        <div class="favroute">
                            <p class="or-price">$8, 600 Per Month</p>
                            <ul class="f-links">
                                <li><a href="#."><i class=" icon-video"></i></a></li>
                                <li><a href="#."><i class="icon-like"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="property_item mb-5">
                    <div class="image">
                        <img src="{{ asset('assets/web/images/property-listing-6.jpg') }}" alt="listin" class="img-responsive">
                        <div class="property_meta">
                            <span><i class="fa fa-object-group"></i>530 sq ft </span>
                            <span><i class="fa fa-bed"></i>2</span>
                            <span><i class="fa fa-bath"></i>1 Bathroom</span></div>
                        <div class="price"><span class="tag">For Rent</span></div>
                        <div class="overlay">
                            <div class="centered"><a class="link_arrow white_border"
                                    href="property-details-1.html">View Detail</a></div>
                        </div>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3><a href="property-details-1.html">House in New York City</a></h3>
                            <span>Merrick Way, Miami, USA</span>
                            <p class="p-font-15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                power nonummy nibh tempor cum soluta nobis…</p>
                        </div>
                        <div class="favroute">
                            <p class="or-price">$1,350,000</p>
                            <ul class="f-links">
                                <li><a href="#."><i class="icon-video"></i></a></li>
                                <li><a href="#."><i class="icon-like"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="pager">
                    <li><a href="#.">1</a></li>
                    <li class="active"><a href="#.">2</a></li>
                    <li><a href="#.">3</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- #/PROPERTY LISTING END -->

<!-- IMAGE WITH CONTENT START -->
<section class="info_section parallaxie">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-lg-6 col-lg-6 offset-sm-4 col-sm-8 right_box">
                <div class="right_box_inner padding">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 mt-5">
                            <div class="white_content">
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
                        </div>
                        <div class="col-md-6 col-sm-12 mt-5">
                            <div class="white_content">
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
                        </div>
                        <div class="col-md-6 col-sm-12 mt-5">
                            <div class="white_content">
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
                        <div class="col-md-6 col-sm-12 mt-5">
                            <div class="white_content">
                                <lord-icon
                                    src="https://cdn.lordicon.com/qxuoosqx.json"
                                    trigger="loop"
                                    delay="2000"
                                    colors="primary:#ffffff,secondary:#ffffff"
                                    style="width:100px;height:100px">
                                </lord-icon>
                                <h3 class="my-2">24 Hours Services</h3>
                                <p>Duis autem vel eum iriure dolor in hend rerit in vulputate velit esse molestie vel illum
                                    dolore nulla facilisis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- #/IMAGE WITH CONTENT END -->

<!-- BEST DEALS START -->
<section id="property-listing" class="padding">
    <div class="container">
        <div class="mb-5">
            <h2 class="text-uppercase">Best Deal <span class="color_red">Properties</span></h2>
            <div class="line_1"></div>
            <div class="line_2"></div>
            <div class="line_3"></div>
            <p>We have Properties in these Areas View a list of Featured Properties.</p>
        </div>
        <div id="listing_slider" class="owl-carousel">
            <div class="item">
                <div class="project1">
                    <div class="col-md-12 col-sm-12 col-xs-12 padding-left-0 project-images">
                        <div class="gri">
                            <figure class="effect-layla">
                                <img src="{{ asset('assets/web/images/b-d-property.jpg') }}" alt="img" />
                                <figcaption> </figcaption>
                            </figure>
                        </div>
                        <div
                            class="col-md-3 col-sm-3 col-xs-12 project-owl-slidee padding-left-0 project-owl-slideee">
                            <div class="item background-color-white">
                                <h4>Residential Project-d05</h4>
                                <div class="small-title">
                                    <div class="line1"></div>
                                    <div class="line2"></div>
                                    <div></div>
                                </div>
                                <div class="client-loc">
                                    <p><span>Client:</span> Bryan Doe Joe</p>
                                    <p><span>Location:</span> Mountain Line CA 62548</p>
                                    <p><span>Value:</span> $15,000</p>
                                </div>
                                <a href="property-details-1.html" class="link_arrow">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project1">
                    <div class="col-md-12 col-sm-12 col-xs-12 padding-left-0 project-images">
                        <div class="gri">
                            <figure class="effect-layla">
                                <img src="{{ asset('assets/web/images/b-d-property-2.jpg') }}" alt="img" />
                                <figcaption> </figcaption>
                            </figure>
                        </div>
                        <div
                            class="col-md-3 col-sm-3 col-xs-12 project-owl-slidee padding-left-0 project-owl-slideee">
                            <div class="item background-color-white">
                                <h4>Residential Project-d05</h4>
                                <div class="small-title">
                                    <div class="line1"></div>
                                    <div class="line2"></div>
                                    <div></div>
                                </div>
                                <div class="client-loc">
                                    <p><span>Client:</span> Bryan Doe Joe</p>
                                    <p><span>Location:</span> Mountain Line CA 62548</p>
                                    <p><span>Value:</span> $15,000</p>
                                </div>
                                <a href="property-details-1.html" class="link_arrow">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project1">
                    <div class="col-md-12 col-sm-12 col-xs-12 padding-left-0 project-images">
                        <div class="gri">
                            <figure class="effect-layla">
                                <img src="{{ asset('assets/web/images/b-d-property.jpg') }}" alt="img" />
                                <figcaption> </figcaption>
                            </figure>
                        </div>
                        <div
                            class="col-md-3 col-sm-3 col-xs-12 project-owl-slidee padding-left-0 project-owl-slideee">
                            <div class="item background-color-white">
                                <h4>Residential Project-d05</h4>
                                <div class="small-title">
                                    <div class="line1"></div>
                                    <div class="line2"></div>
                                    <div></div>
                                </div>
                                <div class="client-loc">
                                    <p><span>Client:</span> Bryan Doe Joe</p>
                                    <p><span>Location:</span> Mountain Line CA 62548</p>
                                    <p><span>Value:</span> $15,000</p>
                                </div>
                                <a href="property-details-1.html" class="link_arrow">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project1">
                    <div class="col-md-12 col-sm-12 col-xs-12 padding-left-0 project-images">
                        <div class="gri">
                            <figure class="effect-layla">
                                <img src="{{ asset('assets/web/images/b-d-property-2.jpg') }}" alt="img" />
                                <figcaption> </figcaption>
                            </figure>
                        </div>
                        <div
                            class="col-md-3 col-sm-3 col-xs-12 project-owl-slidee padding-left-0 project-owl-slideee">
                            <div class="item background-color-white">
                                <h4>Residential Project-d05</h4>
                                <div class="small-title">
                                    <div class="line1"></div>
                                    <div class="line2"></div>
                                    <div></div>
                                </div>
                                <div class="client-loc">
                                    <p><span>Client:</span> Bryan Doe Joe</p>
                                    <p><span>Location:</span> Mountain Line CA 62548</p>
                                    <p><span>Value:</span> $15,000</p>
                                </div>
                                <a href="property-details-1.html" class="link_arrow">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- #/BEST DEALS END -->

<!-- IMAGE & TEXT START -->
<section id="image-text" class="padding-bottom-top-120 parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="image-text-heading my-5">
                    <h2 class="mb-5">We Don't Just Find<br><span>Great Deals</span> We Create Them</h2>
                    <a href="listing-1.html" class="link_arrow white_border top10">View All Listing</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- #/IMAGE & TEXT START END -->

<!-- TEAM START -->
<section id="team-sev" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mb-5">
                <h2 class="text-uppercase">Meet Our Team <span class="color_red">of Professionals</span></h2>
                <div class="line_1"></div>
                <div class="line_2"></div>
                <div class="line_3"></div>
                <p class="heading_space">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-3 col-md-4 col-sm-6 text-center">
                <div class="team-box">
                    <img src="{{ asset('assets/web/images/team-1.png') }}" alt="img">
                    <h2>Antonios Garnelis</h2>
                    <p>VP Product</p>
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li>|</li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li>|</li>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li>|</li>
                        <li><a href="#"><i class="fa-brands fa-vimeo-v"></i></a></li>
                    </ul>
                    <div class="team-box-overlay">
                        <h2>Anita Kutlesa</h2>
                        <p>Anita is an Arizona native and has experience with rental real estate investments. She
                            enjoys kombucha & classic video games and tennis.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 text-center">
                <div class="team-box">
                    <img src="{{ asset('assets/web/images/team-2.png') }}" alt="img">
                    <h2>Amy Hawman</h2>
                    <p>VP Product</p>
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li>|</li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li>|</li>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li>|</li>
                        <li><a href="#"><i class="fa-brands fa-vimeo-v"></i></a></li>
                    </ul>

                    <div class="team-box-overlay">
                        <h2>Anita Kutlesa</h2>
                        <p>Anita is an Arizona native and has experience with rental real estate investments. She
                            enjoys kombucha & classic video games and tennis.</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 text-center">
                <div class="team-box">
                    <img src="{{ asset('assets/web/images/team-3.png') }}" alt="img">
                    <h2>Anita Kutlesa</h2>
                    <p>VP Product</p>
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li>|</li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li>|</li>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li>|</li>
                        <li><a href="#"><i class="fa-brands fa-vimeo-v"></i></a></li>
                    </ul>

                    <div class="team-box-overlay">
                        <h2>Anita Kutlesa</h2>
                        <p>Anita is an Arizona native and has experience with rental real estate investments. She
                            enjoys kombucha & classic video games and tennis.</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 text-center">
                <div class="team-box">
                    <img src="{{ asset('assets/web/images/team-4.png') }}" alt="img">
                    <h2>Antonios Garnelis</h2>
                    <p>VP Product</p>
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li>|</li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li>|</li>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li>|</li>
                        <li><a href="#"><i class="fa-brands fa-vimeo-v"></i></a></li>
                    </ul>

                    <div class="team-box-overlay">
                        <h2>Anita Kutlesa</h2>
                        <p>Anita is an Arizona native and has experience with rental real estate investments. She
                            enjoys kombucha & classic video games and tennis.</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 text-center">
                <div class="team-box">
                    <img src="{{ asset('assets/web/images/team-5.png') }}" alt="img">
                    <h2>Amy Hawman</h2>
                    <p>VP Product</p>
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li>|</li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li>|</li>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li>|</li>
                        <li><a href="#"><i class="fa-brands fa-vimeo-v"></i></a></li>
                    </ul>

                    <div class="team-box-overlay">
                        <h2>Anita Kutlesa</h2>
                        <p>Anita is an Arizona native and has experience with rental real estate investments. She
                            enjoys kombucha & classic video games and tennis.</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 text-center">
                <div class="team-box">
                    <img src="{{ asset('assets/web/images/team-6.png') }}" alt="img">
                    <h2>Anita Kutlesa</h2>
                    <p>VP Product</p>
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li>|</li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li>|</li>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li>|</li>
                        <li><a href="#"><i class="fa-brands fa-vimeo-v"></i></a></li>
                    </ul>

                    <div class="team-box-overlay">
                        <h2>Anita Kutlesa</h2>
                        <p>Anita is an Arizona native and has experience with rental real estate investments. She
                            enjoys kombucha & classic video games and tennis.</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 text-center">
                <div class="team-box">
                    <img src="{{ asset('assets/web/images/team-7.png') }}" alt="img">
                    <h2>Antonios Garnelis</h2>
                    <p>VP Product</p>
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li>|</li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li>|</li>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li>|</li>
                        <li><a href="#"><i class="fa-brands fa-vimeo-v"></i></a></li>
                    </ul>

                    <div class="team-box-overlay">
                        <h2>Anita Kutlesa</h2>
                        <p>Anita is an Arizona native and has experience with rental real estate investments. She
                            enjoys kombucha & classic video games and tennis.</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 text-center">
                <div class="team-box">
                    <img src="{{ asset('assets/web/images/team-8.png') }}" alt="img">
                    <h2>Antonios Garnelis</h2>
                    <p>VP Product</p>
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li>|</li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li>|</li>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li>|</li>
                        <li><a href="#"><i class="fa-brands fa-vimeo-v"></i></a></li>
                    </ul>

                    <div class="team-box-overlay">
                        <h2>Anita Kutlesa</h2>
                        <p>Anita is an Arizona native and has experience with rental real estate investments. She
                            enjoys kombucha & classic video games and tennis.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- #/TEAM END -->

<!-- OUR BLOG START -->
<div id="news-section" class="padding bg_light news_3">
    <div class="container">
        <div class="row">
            <div class="offset-lg-2 offset-md-1 col-xs-12 col-md-10 col-lg-8 text-center mb-5">
                <h2 class="text-uppercase">Our Latest <span class="color_red">Blog</span></h2>
                <div class="line_1-1"></div>
                <div class="line_2-2"></div>
                <div class="line_3-3"></div>
                <p class="heading_space">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="latest_page_box">
                    <div class="news_image">
                        <img src="{{ asset('assets/web/images/nav-slider3.jpg') }}" alt="image">
                        <div class="price">
                            <span class="tag_red">26</span>
                            <span class="tag_white">MAR</span>
                        </div>
                    </div>
                    <div class="news_padding">
                        <h3>Our Outstanding Services</h3>
                        <p>Benenatis mauris Vestibulum ante ipsum primis in industry, logistics, finance, business orci ultrices venenatis mauris. It is a long established fact that a reader will be distracted.</p>
                        <a class="link_arrow" href="#">Read More</a>
                        <div class="blog-card-foot">
                            <p><span>By:</span> Johny Bravo</p>
                            <p><a href="#"><i class="fa-regular fa-comments"></i> No Comments</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest_page_box">
                    <div class="news_image">
                        <img src="{{ asset('assets/web/images/nav-slider1.jpg') }}" alt="image">
                        <div class="price">
                            <span class="tag_red">26</span>
                            <span class="tag_white">MAR</span>
                        </div>
                    </div>
                    <div class="news_padding">
                        <h3>Historic Town Housec</h3>
                        <p>Benenatis mauris Vestibulum ante ipsum primis in industry, logistics, finance, business orci ultrices venenatis mauris. It is a long established fact that a reader will be distracted.</p>
                        <a class="link_arrow" href="#">Read More</a>
                        <div class="blog-card-foot">
                            <p><span>By:</span> Johny Bravo</p>
                            <p><a href="#"><i class="fa-regular fa-comments"></i> No Comments</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest_page_box">
                    <div class="news_image">
                        <img src="{{ asset('assets/web/images/nav-slider2.jpg') }}" alt="image">
                        <div class="price">
                            <span class="tag_red">26</span>
                            <span class="tag_white">MAR</span>
                        </div>
                    </div>
                    <div class="news_padding">
                        <h3>Historic Town House</h3>
                        <p>Benenatis mauris Vestibulum ante ipsum primis in industry, logistics, finance, business orci ultrices venenatis mauris. It is a long established fact that a reader will be distracted.</p>
                        <a class="link_arrow" href="#">Read More</a>
                        <div class="blog-card-foot">
                            <p><span>By:</span> Johny Bravo</p>
                            <p><a href="#"><i class="fa-regular fa-comments"></i> No Comments</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #/OUR BLOG END -->

@endsection
@section('script')

@endsection