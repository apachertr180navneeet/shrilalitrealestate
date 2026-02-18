<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>Shrilalit Realestate</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/web/css/master.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/web/css/color/color-red.css') }}" id="color">
        <link rel="shortcut icon" href="{{ asset('assets/web/images/short_icon.png') }}">

        <style>
            .color-picker {
                display: none;
            }
        </style>

        @yield('style')
    </head>

    <body>
        <!-- LOADER START -->
        <div class="loader">
            <div class="cssload-thecube">
                <div class="cssload-cube cssload-c1"></div>
                <div class="cssload-cube cssload-c2"></div>
                <div class="cssload-cube cssload-c4"></div>
                <div class="cssload-cube cssload-c3"></div>
            </div>
        </div>
        <!-- #/LOADER END -->

        <div id="main-wrapper">
            @include('web.layouts.elements.header')
            @yield('content')
            @include('web.layouts.elements.footer')
        </div>

        <div class="bsnav-mobile">
            <div class="bsnav-mobile-overlay"></div>
            <div class="navbar"></div>
        </div>

        <!--===== REQUIRED JS =====-->
        <!-- jQuery -->
        <script src="{{ asset('assets/web/js/jquery-3.7.1.min.js') }}"></script>

        <!-- Bootstrap & Navigation -->
        <script src="{{ asset('assets/web/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/web/js/bsnav.min.js') }}"></script>

        <!-- View on Scroll -->
        <script src="{{ asset('assets/web/js/jquery.appear.js') }}"></script>

        <!-- Owl Slider -->
        <script src="{{ asset('assets/web/js/owl.carousel.min.js') }}"></script>

        <!-- Parallax -->
        <script src="{{ asset('assets/web/js/parallaxie.js') }}"></script>

        <!-- Fancybox -->
        <script src="{{ asset('assets/web/js/jquery.fancybox.min.js') }}"></script>

        <!-- Cube Gallery -->
        <script src="{{ asset('assets/web/js/cubeportfolio.min.js') }}"></script>

        <!-- Select2 (CDN) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

        <!-- Video Popup -->
        <script src="{{ asset('assets/web/js/videobox/video.js') }}"></script>

        <!-- Datepicker -->
        <script src="{{ asset('assets/web/js/datepicker.js') }}"></script>

        <!-- Dropzone -->
        <script src="{{ asset('assets/web/js/dropzone.min.js') }}"></script>

        <!-- Wow Animation -->
        <script src="{{ asset('assets/web/js/wow.min.js') }}"></script>

        <!-- Range Slider -->
        <script src="{{ asset('assets/web/js/range-Slider.min.js') }}"></script>

        <!-- Select Box -->
        <script src="{{ asset('assets/web/js/selectbox-0.2.min.js') }}"></script>

        <!-- Scroll Reveal -->
        <script src="{{ asset('assets/web/js/scrollreveal.min.js') }}"></script>

        <!-- Counter -->
        <script src="{{ asset('assets/web/js/jquery-countTo.js') }}"></script>

        <!-- Typewriter -->
        <script src="{{ asset('assets/web/js/jquery.typewriter.js') }}"></script>

        <!-- Death Animation -->
        <script src="{{ asset('assets/web/js/death.min.js') }}"></script>

        <!-- Lord Icon (CDN) -->
        <script src="https://cdn.lordicon.com/lordicon.js"></script>

        <!-- Revolution Slider -->
        <script src="{{ asset('assets/web/js/themepunch/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('assets/web/js/themepunch/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ asset('assets/web/js/themepunch/revolution.extension.layeranimation.min.js') }}"></script>
        <script src="{{ asset('assets/web/js/themepunch/revolution.extension.navigation.min.js') }}"></script>
        <script src="{{ asset('assets/web/js/themepunch/revolution.extension.parallax.min.js') }}"></script>
        <script src="{{ asset('assets/web/js/themepunch/revolution.extension.slideanims.min.js') }}"></script>
        <script src="{{ asset('assets/web/js/themepunch/revolution.extension.video.min.js') }}"></script>

        <!-- Custom JS -->
        <script src="{{ asset('assets/web/js/functions.js') }}"></script>

        <!-- Forms & Maps -->
        <script src="{{ asset('assets/web/js/form.js') }}"></script>
        <script src="{{ asset('assets/web/js/custom-map.js') }}"></script>

        <!-- Google Maps (HTTPS REQUIRED) -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U"></script>

        <script src="{{ asset('assets/web/js/gmaps.js') }}"></script>
        <script src="{{ asset('assets/web/js/contact.js') }}"></script>
        @yield('script')
    </body>
</html>
