@extends('web.layouts.app')
@section('content')

<!-- PAGE TITLE -->
<div class="page-title page-main-section parallaxie">
  <div class="container padding-bottom-top-120 text-uppercase text-center">
    <div class="main-title">
      <h1>Listings</h1>
      <h5>10 Years Of Experience!</h5>
      <div class="line_4"></div>
      <div class="line_5"></div>
      <div class="line_6"></div>
      <a href="{{route('/')}}">home</a>
      <span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
      <a href="{{route('service')}}">Property Listing</a> 
    </div>
  </div>
</div>
<!-- PAGE TITLE -->


<!-- LISTING STYLE-->
<section id="agent-p-2" class="listing-1 bg_light padding_top">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2 class="uppercase">PROPERTY <span class="color_red">LISTINGS</span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <form class="findus">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="property_item heading_space">
                <div class="image">
                  <img src="{{ asset('assets/web/images/property-listing-1.jpg') }}" alt="listin" class="img-responsive">
                  <div class="overlay">
                    <div class="centered"><a class="link_arrow white_border" href="{{ route('service.detail', ['id' => '1']) }}">View Detail</a></div>
                  </div>
                  <div class="feature"><span class="tag">Featured</span></div>
                  <div class="price"><span class="tag">For Sale</span></div>
                  <div class="property_meta">
                    <span><i class="fa fa-object-group"></i>530 sq ft </span>
                    <span><i class="fa fa-bed"></i>2</span>
                    <span><i class="fa fa-bath"></i>1 Bathroom</span>
                  </div>
                </div>
                <div class="proerty_content">
                  <div class="proerty_text">
                    <h3><a href="{{ route('service.detail', ['id' => '1']) }}">House in New York City</a></h3>
                    <span class="bottom10">Merrick Way, Miami, USA</span>
                    <p><strong>$83,600,200</strong></p>
                  </div>
                  <div class="favroute clearfix">
                    <p class="pull-left"><i class="icon-calendar2"></i> 3 Days ago</p>
                    <ul class="pull-right">
                      <li><a href="#."><i class="icon-video"></i></a></li>
                      <li><a href="#."><i class="icon-like"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <ul class="pager top40 padding_bottom">
            <li><a href="#.">1</a></li>
            <li class="active"><a href="#.">2</a></li>
            <li><a href="#.">3</a></li>
          </ul>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- LISTING -->

@endsection
@section('script')

@endsection