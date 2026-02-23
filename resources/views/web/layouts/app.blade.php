<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Shrilalit Realestate</title>

        <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
        <link rel="preconnect" href="https://cdn.lordicon.com" crossorigin>
        <link rel="preconnect" href="https://maps.googleapis.com" crossorigin>

        <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/web/css/master.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/web/css/color/color-red.css') }}" id="color">
        <link rel="shortcut icon" href="{{ asset('public/assets/web/images/short_icon.png') }}">

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
        <script defer src="{{ asset('public/assets/web/js/jquery-3.7.1.min.js') }}"></script>
        <script defer src="{{ asset('public/assets/web/js/bootstrap.bundle.min.js') }}"></script>
        <script defer src="{{ asset('public/assets/web/js/bsnav.min.js') }}"></script>
        <script defer src="{{ asset('public/assets/web/js/jquery.appear.js') }}"></script>
        <script defer src="{{ asset('public/assets/web/js/owl.carousel.min.js') }}"></script>
        <script defer src="{{ asset('public/assets/web/js/parallaxie.js') }}"></script>
        <script defer src="{{ asset('public/assets/web/js/jquery.fancybox.min.js') }}"></script>
        <script defer src="{{ asset('public/assets/web/js/cubeportfolio.min.js') }}"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
        <script defer src="{{ asset('public/assets/web/js/videobox/video.js') }}"></script>
        <script defer src="{{ asset('public/assets/web/js/datepicker.js') }}"></script>
        <script defer src="{{ asset('public/assets/web/js/dropzone.min.js') }}"></script>
        <script defer src="{{ asset('public/assets/web/js/wow.min.js') }}"></script>
        <script defer src="{{ asset('public/assets/web/js/range-Slider.min.js') }}"></script>
        <script defer src="{{ asset('public/assets/web/js/selectbox-0.2.min.js') }}"></script>
        <script defer src="{{ asset('public/assets/web/js/scrollreveal.min.js') }}"></script>
        <script defer src="{{ asset('public/assets/web/js/jquery-countTo.js') }}"></script>
        <script defer src="{{ asset('public/assets/web/js/jquery.typewriter.js') }}"></script>
        <script defer src="{{ asset('public/assets/web/js/death.min.js') }}"></script>
        <script defer src="https://cdn.lordicon.com/lordicon.js"></script>

        <!-- Revolution Slider -->
        <script defer src="{{ asset('public/assets/web/js/themepunch/jquery.themepunch.tools.min.js') }}"></script>
        <script defer src="{{ asset('public/assets/web/js/themepunch/jquery.themepunch.revolution.min.js') }}"></script>
        <script defer src="{{ asset('public/assets/web/js/themepunch/revolution.extension.layeranimation.min.js') }}"></script>
        <script defer src="{{ asset('public/assets/web/js/themepunch/revolution.extension.navigation.min.js') }}"></script>
        <script defer src="{{ asset('public/assets/web/js/themepunch/revolution.extension.parallax.min.js') }}"></script>
        <script defer src="{{ asset('public/assets/web/js/themepunch/revolution.extension.slideanims.min.js') }}"></script>
        <script defer src="{{ asset('public/assets/web/js/themepunch/revolution.extension.video.min.js') }}"></script>

        <script defer src="{{ asset('public/assets/web/js/functions.js') }}"></script>
        <script defer src="{{ asset('public/assets/web/js/form.js') }}"></script>

        <!-- Load map stack only when map exists on the page -->
        <script defer>
            (function () {
                function loadScript(src) {
                    return new Promise(function (resolve, reject) {
                        var script = document.createElement('script');
                        script.src = src;
                        script.async = true;
                        script.onload = resolve;
                        script.onerror = reject;
                        document.body.appendChild(script);
                    });
                }

                window.addEventListener('load', function () {
                    if (!document.querySelector('#map, #map_canvas')) {
                        return;
                    }

                    loadScript('https://maps.googleapis.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U')
                        .then(function () { return loadScript("{{ asset('public/assets/web/js/gmaps.js') }}"); })
                        .then(function () { return loadScript("{{ asset('public/assets/web/js/custom-map.js') }}"); })
                        .then(function () { return loadScript("{{ asset('public/assets/web/js/contact.js') }}"); })
                        .catch(function () {
                            // Ignore map loading errors so non-map pages are unaffected.
                        });
                });
            })();
        </script>

        @yield('script')
    </body>
</html>
