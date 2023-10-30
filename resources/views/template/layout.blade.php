<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Y&Y Window Service Corp</title>

        @section('styles')
            <!--====== Favicon Icon ======-->
            <link rel="shortcut icon" href="images/favicon.png" type="image/png">

            <!--====== Animate CSS ======-->
            <link rel="stylesheet" href="css/animate.css">

            <!--====== lineicons CSS ======-->
            <link rel="stylesheet" href="css/lineicons.css">

            <!--====== Bootstrap CSS ======-->
            <link rel="stylesheet" href="css/bootstrap.min.css">

            <!--====== Default CSS ======-->
            <link rel="stylesheet" href="css/default.css">

            <!--====== Style CSS ======-->
            <link rel="stylesheet" href="css/style.css">

            <!--====== Plans CSS ======-->
            <link rel="stylesheet" href="css/plans.css">

            <!--====== Contact CSS ======-->
            <link rel="stylesheet" href="css/contact.css">

            <!-- Fonts -->
            <link rel="preconnect" href="https://fonts.bunny.net">
            <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
            <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

            <!-- Galery -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
        @show
    </head>
    <body class="antialiased">
        <!--====== PRELOADER PART START ======-->
        @include('includes.layout.pre-load')
        <!--====== PRELOADER PART ENDS ======-->

        @section('navbar')
            @include('includes.layout.nav')
        @show
        
        <!--====== CONTENT START ======-->
        <div id='content'>
            @yield('content')
        </div>
        <!--====== CONTENT START ======-->

        <!--====== PART START ======-->
        @include('includes.layout.footer')
        <!--====== PART ENDS ======-->

        <!--====== BACK TOP TOP PART START ======-->
        <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>
        <!--====== BACK TOP TOP PART ENDS ======-->

        @section('scripts')
            <!--====== Jquery js ======-->
            <script src="js/vendor/jquery-1.12.4.min.js"></script>
            <script src="js/vendor/modernizr-3.7.1.min.js"></script>

            <!--====== Bootstrap js ======-->
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>


            <!--====== WOW js ======-->
            <script src="js/wow.min.js"></script>

            <!--====== Scrolling Nav js ======-->
            <script src="js/jquery.easing.min.js"></script>
            <script src="js/scrolling-nav.js"></script>

            <!--====== Main js ======-->
            <script src="js/main.js"></script>
          
            <!--====== Swiper js ======-->
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
            <script>
                var swiper = new Swiper('.swiper-container', {
                    effect: 'fade',
                    speed: 2000,
                    autoplay: {
                        delay: 5000,
                    },
                });
            </script>
            
            <!-- Galery -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
            <script>
                baguetteBox.run('.tz-gallery');
                $(".filter-button").click(function(){
                var value = $(this).attr('data-filter');
            
                if(value == "all")
                {
                    $('.filter').show('1000');
                }
                else
                {
                    $(".filter").not('.'+value).hide('3000');
                    $('.filter').filter('.'+value).show('3000');
                }
            });
            
            </script>
        @show
    </body>
</html>
