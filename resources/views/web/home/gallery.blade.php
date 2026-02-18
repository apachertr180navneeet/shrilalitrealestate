@extends('web.layouts.app')
@section('content')

<!--===== PAGE TITLE =====-->
<div class="page-title page-main-section parallaxie">
  <div class="container padding-bottom-top-120 text-uppercase text-center">
    <div class="main-title">
      <h1>Gallery</h1>
      <h5>10 Years Of Experience!</h5>
      <div class="line_4"></div>
      <div class="line_5"></div>
      <div class="line_6"></div>
      <a href="{{route('/')}}">home</a><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
      <a href="{{route('gallery')}}">Gallery</a> 
    </div>
  </div>
</div>
<!--===== #/PAGE TITLE =====-->



<!--Gallery Here-->
<section id="project" class="padding">
  <div class="container">
    <div id="projects" class="cbp">
      <div class="cbp-item latest rent">
        <div class="image">
           <img src="{{ asset('assets/web/images/project1.jpg') }}" alt="">
           <div class="overlay">
              <a href="{{ asset('assets/web/images/project1.jpg') }}" class="fancybox centered" data-fancybox-group="gallery">
              <i class="icon-focus"></i>
            </a>
           </div>
        </div>
      </div>
      <div class="cbp-item sale">
        <div class="image">
           <img src="{{ asset('assets/web/images/project1.jpg') }}" alt="">
           <div class="overlay">
              <a href="{{ asset('assets/web/images/project1.jpg') }}" class="fancybox centered" data-fancybox-group="gallery">
              <i class="icon-focus"></i>
            </a>
           </div>
        </div>
      </div>
      <div class="cbp-item sale">
        <div class="image">
           <img src="{{ asset('assets/web/images/project1.jpg') }}" alt="">
           <div class="overlay">
              <a href="{{ asset('assets/web/images/project1.jpg') }}" class="fancybox centered" data-fancybox-group="gallery">
              <i class="icon-focus"></i>
            </a>
           </div>
        </div>
      </div>
      <div class="cbp-item latest rent">
        <div class="image">
        <img src="{{ asset('assets/web/images/project1.jpg') }}" alt="">
           <div class="overlay">
              <a href="{{ asset('assets/web/images/project1.jpg') }}" class="fancybox centered" data-fancybox-group="gallery">
              <i class="icon-focus"></i>
            </a>
           </div>
        </div>
      </div>
      <div class="cbp-item sale">
        <div class="image">
        <img src="{{ asset('assets/web/images/project1.jpg') }}" alt="">
           <div class="overlay">
              <a href="{{ asset('assets/web/images/project1.jpg') }}" class="fancybox centered" data-fancybox-group="gallery">
              <i class="icon-focus"></i>
            </a>
           </div>
        </div>
      </div>
      <div class="cbp-item latest rent">
        <div class="image">
           <img src="{{ asset('assets/web/images/project1.jpg') }}" alt="">
           <div class="overlay">
              <a href="{{ asset('assets/web/images/project1.jpg') }}" class="fancybox centered" data-fancybox-group="gallery">
              <i class="icon-focus"></i>
            </a>
           </div>
        </div>
      </div>
      <div class="cbp-item management sale">
        <div class="image">
        <img src="{{ asset('assets/web/images/project1.jpg') }}" alt="">
           <div class="overlay">
              <a href="{{ asset('assets/web/images/project1.jpg') }}" class="fancybox centered" data-fancybox-group="gallery">
              <i class="icon-focus"></i>
            </a>
           </div>
        </div>
      </div>
      <div class="cbp-item services sale latest">
        <div class="image">
        <img src="{{ asset('assets/web/images/project1.jpg') }}" alt="">
           <div class="overlay">
              <a href="{{ asset('assets/web/images/project1.jpg') }}" class="fancybox centered" data-fancybox-group="gallery">
              <i class="icon-focus"></i>
            </a>
           </div>
        </div>
      </div>
      <div class="cbp-item services sale latest">
        <div class="image">
        <img src="{{ asset('assets/web/images/project1.jpg') }}" alt="">
           <div class="overlay">
              <a href="{{ asset('assets/web/images/project1.jpg') }}" class="fancybox centered" data-fancybox-group="gallery">
              <i class="icon-focus"></i>
            </a>
           </div>
        </div>
      </div>
      <div class="cbp-item services sale latest">
        <div class="image">
        <img src="{{ asset('assets/web/images/project1.jpg') }}" alt="">
           <div class="overlay">
              <a href="{{ asset('assets/web/images/project1.jpg') }}" class="fancybox centered" data-fancybox-group="gallery">
              <i class="icon-focus"></i>
            </a>
           </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Gallery ends -->

@endsection
@section('script')

@endsection