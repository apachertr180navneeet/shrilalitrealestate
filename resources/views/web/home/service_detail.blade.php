@extends('web.layouts.app')
@section('content')

<!-- PAGE TITLE -->
<div class="page-title page-main-section parallaxie">
  <div class="container padding-bottom-top-120 text-uppercase text-center">
    <div class="main-title">
      <h1>Property</h1>
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


<!-- PROPERTY DETAILS-->
<section id="news-section-1" class="property-details padding_top">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-uppercase">987 Cantebury Drive</h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
        <p class="bottom20">45 Regent Street, London, UK</p>
      </div>
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-12">
            <div id="property-d-1" class="owl-carousel">
              <div class="item"><img src="{{ asset('public/assets/web/images/property-d-1-1.jpg') }}" alt="image" /></div>
              <div class="item"><img src="{{ asset('public/assets/web/images/property-d-1-1.jpg') }}" alt="image" /></div>
              <div class="item"><img src="{{ asset('public/assets/web/images/property-d-1-1.jpg') }}" alt="image" /></div>
              <div class="item"><img src="{{ asset('public/assets/web/images/property-d-1-1.jpg') }}" alt="image" /></div>
              <div class="item"><img src="{{ asset('public/assets/web/images/property-d-1-1.jpg') }}" alt="image" /></div>
              <div class="item"><img src="{{ asset('public/assets/web/images/property-d-1-1.jpg') }}" alt="image" /></div>
              <div class="item"><img src="{{ asset('public/assets/web/images/property-d-1-1.jpg') }}" alt="image" /></div>
            </div>
            <div id="property-d-1-2" class="owl-carousel">
              <div class="item"><img src="{{ asset('public/assets/web/images/property-d-s-1-1.jpg') }}" alt="image" /></div>
              <div class="item"><img src="{{ asset('public/assets/web/images/property-d-s-1-1.jpg') }}" alt="image" /></div>
              <div class="item"><img src="{{ asset('public/assets/web/images/property-d-s-1-1.jpg') }}" alt="image" /></div>
              <div class="item"><img src="{{ asset('public/assets/web/images/property-d-s-1-1.jpg') }}" alt="image" /></div>
              <div class="item"><img src="{{ asset('public/assets/web/images/property-d-s-1-1.jpg') }}" alt="image" /></div>
              <div class="item"><img src="{{ asset('public/assets/web/images/property-d-s-1-1.jpg') }}" alt="image" /></div>
              <div class="item"><img src="{{ asset('public/assets/web/images/property-d-s-1-1.jpg') }}" alt="image" /></div>
            </div>
          </div>
        </div>
        <div class="row top40">
          <div class="col-md-8">
            <div class="row margin_bottom">
              <div class="col-xs-12 top40">
                <h3 class="text-uppercase bottom30">Property <span class="color_red">Description</span></h3>
                <p class="bottom30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus. Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum a. Curabitur sit amet pretium lectus, nec consequat orci.</p>
                <p class="bottom30">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis et metus in libero sollicitudin venenatis eu sed enim. Nam felis lorem, suscipit ac nisl ac, iaculis dapibus tellus. Cras ante justo, aliquet quis placerat nec, molestie id turpis.</p>
                <div class="property_meta top10">
                  <span><i class="fa fa-object-group"></i>530 sq ft </span>
                  <span><i class="fa fa-bed"></i>2 Bedrooms</span>
                  <span><i class="fa fa-bath"></i>3 Bathroom</span>
                  <span><i class="fa fa-car"></i>1 Garage</span>
                </div>
                <a class="link_arrow top30" href="#.">Read More</a>
              </div>
            </div>
            <div class="row margin_bottom">
              <div class="col-xs-12">
                <h3 class="text-uppercase bottom30">Quick  <span class="color_red">Summery</span></h3>
              </div>
              <div class="property-d-table clearfix">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <table class="table table-striped table-responsive">
                    <tbody>
                      <tr>
                        <td><b>Property Id</b></td>
                        <td class="text-right">5456</td>
                      </tr>
                      <tr>
                        <td><b>Price</b></td>
                        <td class="text-right">$8,600 / month</td>
                      </tr>
                      <tr>
                        <td><b>Property Size</b></td>
                        <td class="text-right">5,500 ft2</td>
                      </tr>
                      <tr>
                        <td><b>Bedrooms</b></td>
                        <td class="text-right">5</td>
                      </tr>
                      <tr>
                        <td><b>Bathrooms</b></td>
                        <td class="text-right">3</td>
                      </tr>
                      <tr>
                        <td><b>Available From</b></td>
                        <td class="text-right">22-04-2017</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <table class="table table-striped table-responsive">
                    <tbody>
                      <tr>
                        <td><b>Status</b></td>
                        <td class="text-right">Rent</td>
                      </tr>
                      <tr>
                        <td><b>Year Built</b></td>
                        <td class="text-right">1991</td>
                      </tr>
                      <tr>
                        <td><b>Garages</b></td>
                        <td class="text-right">1</td>
                      </tr>
                      <tr>
                        <td><b>Cross Streets</b></td>
                        <td class="text-right">Nordoff</td>
                      </tr>
                      <tr>
                        <td><b>Floors</b></td>
                        <td class="text-right">Carpet - Ceramic Tile</td>
                      </tr>
                      <tr>
                        <td><b>Plumbing</b></td>
                        <td class="text-right">Full Copper Plumbing</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="row margin_bottom">
              <div class="col-xs-12">
                <h3 class="text-uppercase bottom30">Property <span class="color_red">Features</span></h3>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="pro-list">
                  <li>
                    Air Conditioning
                  </li>
                  <li>
                    Barbeque
                  </li>
                  <li>
                    Dryer
                  </li>
                  <li>
                    Laundry
                  </li>
                </ul>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="pro-list">
                  <li>
                    Microwave
                  </li>
                  <li>
                    Outdoor Shower
                  </li>
                  <li>
                    Refrigerator
                  </li>
                  <li>
                    Swimming Pool
                  </li>
                </ul>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="pro-list">
                  <li>
                    Quiet Neighbourhood
                  </li>
                  <li>
                    TV Cable & WIFI
                  </li>
                  <li>
                    Window Coverings
                  </li>
                </ul>
              </div>
            </div>
            <div class="row margin_bottom">
              <div class="col-xs-12">
                <h3 class="text-uppercase bottom20">Our <span class="color_red">Plans</span></h3>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12 top10">
                <div class="image">
                  <img src="{{ asset('public/assets/web/images/property-d-1-f-1.jpg') }}" alt="image" />
                  <div class="overlay border_radius">
                    <a class="fancybox centered" href="{{ asset('public/assets/web/images/property-d-1-f-1.jpg') }}" data-fancybox-group="gallery"><i class="icon-focus"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12 top10">
                <div class="image">
                  <img src="{{ asset('public/assets/web/images/property-d-1-f-4.jpg') }}" alt="image" />
                  <div class="overlay border_radius">
                    <a class="fancybox centered" href="{{ asset('public/assets/web/images/property-d-1-f-1.jpg') }}" data-fancybox-group="gallery"><i class="icon-focus"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12 top10">
                <div class="image">
                  <img src="{{ asset('public/assets/web/images/property-d-1-f-6.jpg') }}" alt="image" />
                  <div class="overlay border_radius">
                    <a class="fancybox centered" href="{{ asset('public/assets/web/images/property-d-1-f-1.jpg') }}" data-fancybox-group="gallery"><i class="icon-focus"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row margin_bottom">
              <div class="col-xs-12">
                <h3 class="text-uppercase bottom30">Property <span class="color_red">Map</span></h3>
              </div>
              <div class="col-md-12">
                <div id="map_canvas" style="height: 350px;"></div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="search_box blog-thumbnail">
              <div class="input-group">
                <input class="form-control custom_input" placeholder="Search" type="text">
                <span class="input-group-btn">
                <button class="btn btn-default custom_input" type="button"><i class="fa fa-search"></i></button>
                </span>
              </div>
              <!-- /input-group -->
            </div>
            <div class="blog_info blog-thumbnail">
              <div class="blogimagedescription">
                <h3>Categories</h3>
              </div>
              <ul class="archieves">
                <li><a href="#">Property updates</a></li>
                <li><a href="#">Near by places</a></li>
                <li><a href="#">Aminities at sabestian villa</a></li>
                <li><a href="#">University near villa</a></li>
                <li><a href="#">Property type and title clear</a></li>
              </ul>
            </div>
            <div class="blog_info blog-thumbnail">
              <div class="blogimagedescription">
                <h3>Popular posts</h3>
              </div>
              <ul class="archieves">
                <li>
                  <div class="col-md-4 padding_none">
                    <div class="blogimage_thumbnail">
                      <img src="{{ asset('public/assets/web/images/f-p-1.png') }}" alt="blog1 image">
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="blogimagedescription">
                      <h3><a href="#">WE HAVe ADDED NEW FEATURES TO DreamVilla</a></h3>
                      <p class="detail">
                        <span><a href="#">June 12,2015</a></span>
                        <span><a href="#">John doe</a></span>
                      </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="col-md-4 padding_none">
                    <div class="blogimage_thumbnail">
                      <img src="{{ asset('public/assets/web/images/f-p-2.png') }}" alt="blog1 image">
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="blogimagedescription">
                      <h3><a href="#">UNIVERSITY NEAR TO SABESTIAN VILLA</a></h3>
                      <p class="detail">
                        <span><a href="#">June 12,2015</a></span>
                        <span><a href="#">John doe</a></span>
                      </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="col-md-4 padding_none">
                    <div class="blogimage_thumbnail">
                      <img src="{{ asset('public/assets/web/images/f-p-3.png') }}" alt="blog1 image">
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="blogimagedescription">
                      <h3><a href="#">LAW FIRM OPENED NEAR TO VILLA</a></h3>
                      <p class="detail">
                        <span><a href="#">June 12,2015</a></span>
                        <span><a href="#">John doe</a></span>
                      </p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="blog_info blog-thumbnail">
              <div class="blogimagedescription">
                <h3>Archieves</h3>
              </div>
              <ul class="archieves">
                <li><a href="#">MAY 2015</a></li>
                <li><a href="#">APRIL 2015</a></li>
                <li><a href="#">FEBRUARY 2015</a></li>
                <li><a href="#">JANUARY 2015</a></li>
                <li><a href="#">NAOVEMBER 2014</a></li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h3 class="text-uppercase  bottom40 top40">Quick <span class="color_red"> Tags</span></h3>
              </div>
              <div class="col-md-12">
                <div class="news-tag">
                  <a href="#.">Planning</a>
                  <a href="#.">Apartments</a>
                  <a href="#.">Reality Home</a>
                </div>
                <div class="news-tag">
                  <a href="#.">Luxury</a>
                  <a href="#.">Finance</a>
                  <a href="#.">Agents</a>
                  <a href="#.">Ideas</a>
                </div>
                <div class="news-tag">
                  <a href="#.">Themeforest</a>
                  <a href="#.">Family Homes</a>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h3 class="text-uppercase  bottom40 top40">Recent <span class="color_red">Properties</span></h3>
              </div>
              <div class="col-md-12">
                <div id="agent-3-slider" class="owl-carousel">
                  <div class="item">
                    <div class="property_item heading_space">
                      <div class="image">
                        <a href="#."><img src="{{ asset('public/assets/web/images/property-listing-6.jpg') }}" alt="listin" class="img-responsive"></a>
                        <div class="feature"><span class="tag-2">For Rent</span></div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="property_item heading_space">
                      <div class="image">
                        <a href="#."><img src="{{ asset('public/assets/web/images/property-listing-6.jpg') }}" alt="listin" class="img-responsive"></a>
                        <div class="feature"><span class="tag-2">For Rent</span></div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="property_item heading_space">
                      <div class="image">
                        <a href="#."><img src="{{ asset('public/assets/web/images/property-listing-6.jpg') }}" alt="listin" class="img-responsive"></a>
                        <div class="feature"><span class="tag-2">For Rent</span></div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="agent-p-2" class="property-details bg_light padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 bottom40">
        <h2 class="text-uppercase">Similar <span class="color_red">Properties </span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
      </div>
    </div>
    <div class="row">
      <div id="property-1-slider" class="owl-carousel">
        <div class="item">
          <div class="property_item heading_space">
            <div class="image">
              <img src="{{ asset('public/assets/web/images/b-d-property-2.jpg') }}" alt="listin" class="img-responsive">
              <div class="overlay">
                <div class="centered"><a class="link_arrow white_border" href="property_details_1.html">View Detail</a></div>
              </div>
              <div class="feature"><span class="tag">Featured</span></div>
              <div class="price"><span class="tag">For Sale</span></div>
              <div class="property_meta">
                <span><i class="fa fa-object-group"></i>530 sq ft </span>
                <span><i class="fa fa-bed"></i>2 Bedrooms</span>
                <span><i class="fa fa-bath"></i>1 Bathroom</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3><a href="property_details_1.html">House in New York City</a></h3>
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
        <div class="item">
          <div class="property_item heading_space">
            <div class="image">
              <img src="{{ asset('public/assets/web/images/b-d-property.jpg') }}" alt="listin" class="img-responsive">
              <div class="overlay">
                <div class="centered"><a class="link_arrow white_border" href="property_details_1.html">View Detail</a></div>
              </div>
              <div class="feature"><span class="tag">Featured</span></div>
              <div class="price"><span class="tag">For Sale</span></div>
              <div class="property_meta">
                <span><i class="fa fa-object-group"></i>530 sq ft </span>
                <span><i class="fa fa-bed"></i> 3 Bedrooms</span>
                <span><i class="fa fa-bath"></i>3 Bathroom</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3><a href="property_details_1.html">House in New York City</a></h3>
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
        <div class="item">
          <div class="property_item heading_space">
            <div class="image">
              <img src="{{ asset('public/assets/web/images/b-d-property-2.jpg') }}" alt="listin" class="img-responsive">
              <div class="overlay">
                <div class="centered"><a class="link_arrow white_border" href="property_details_1.html">View Detail</a></div>
              </div>
              <div class="feature"><span class="tag">Featured</span></div>
              <div class="price"><span class="tag">For Sale</span></div>
              <div class="property_meta">
                <span><i class="fa fa-object-group"></i>530 sq ft </span>
                <span><i class="fa fa-bed"></i>2 Bedrooms</span>
                <span><i class="fa fa-bath"></i>1 Bathroom</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3><a href="property_details_1.html">House in New York City</a></h3>
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
        <div class="item">
          <div class="property_item heading_space">
            <div class="image">
              <img src="images/b-d-property-2.jpg" alt="listin" class="img-responsive">
              <div class="overlay">
                <div class="centered"><a class="link_arrow white_border" href="property_details_1.html">View Detail</a></div>
              </div>
              <div class="feature"><span class="tag">Featured</span></div>
              <div class="price"><span class="tag">For Sale</span></div>
              <div class="property_meta">
                <span><i class="fa fa-object-group"></i>5,302 sq ft </span>
                <span><i class="fa fa-bed"></i>2 Bedrooms</span>
                <span><i class="fa fa-bath"></i>1 Bathroom</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3><a href="property_details_1.html">House in New York City</a></h3>
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
        <div class="item">
          <div class="property_item heading_space">
            <div class="image">
              <img src="images/b-d-property.jpg" alt="listin" class="img-responsive">
              <div class="overlay">
                <div class="centered"><a class="link_arrow white_border" href="property_details_1.html">View Detail</a></div>
              </div>
              <div class="feature"><span class="tag">Featured</span></div>
              <div class="price"><span class="tag">For Sale</span></div>
              <div class="property_meta">
                <span><i class="fa fa-object-group"></i>5,630 sq ft </span>
                <span><i class="fa fa-bed"></i>6 Bedrooms</span>
                <span><i class="fa fa-bath"></i>8 Bathroom</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3><a href="property_details_1.html">House in New York City</a></h3>
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
        <div class="item">
          <div class="property_item heading_space">
            <div class="image">
              <img src="images/b-d-property-2.jpg" alt="listin" class="img-responsive">
              <div class="overlay">
                <div class="centered"><a class="link_arrow white_border" href="property_details_1.html">View Detail</a></div>
              </div>
              <div class="feature"><span class="tag">Featured</span></div>
              <div class="price"><span class="tag">For Sale</span></div>
              <div class="property_meta">
                <span><i class="fa fa-object-group"></i>530 sq ft </span>
                <span><i class="fa fa-bed"></i>2 Bedrooms</span>
                <span><i class="fa fa-bath"></i>1 Bathroom</span>
              </div>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3><a href="property_details_1.html">House in New York City</a></h3>
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
    </div>
  </div>
</section>
<!-- /PROPERTY DETAILS - 3 =-->


@endsection
@section('script')

@endsection