<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Y&Y Window Service Corp</title>

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

</head>

<body class="antialiased">
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== PRELOADER PART ENDS ======-->

    @if (session('success'))
        @if (session('success')=='Message sent succesfully')
            <div id="snackbar">{{ session('success') }}</div>
        @else
            <div id="snackbar" style="background-color: red">{{ session('success') }}</div>
        @endif
    @endif

    @section('navbar')
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="/">
                                <img src="images/logo.png" alt="Y&&">
                                <title id="logo-text"> Window Service Corp </title>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#why">Why</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#pricing">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#contact">Contact</a>
                                    </li>
                                    <li class="nav-item"><a  href="https://wa.me/+1305989611" ><span class="badge rounded-pill bg-warning" style="color: #201f1e;padding: 7px 15px;"> <i class="lni lni-whatsapp" style="margin: 0 4px;"></i>+1 (305) 989 - 6611</span></li></a>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
    @show
    <!--====== CONTENT START ======-->
    @yield('content')
    <!--====== CONTENT START ======-->
    <!--====== PART START ======-->
    <img class="svg" src="images/footer-shape-1.svg" alt="shape">
    <footer id="footer" class="footer-area">
        <div class="footer-widget pt-30 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
                            <a class="logo" href="#">
                                <img src="images/logo.png" alt="Logo Y&Y Window Service Corp">
                            </a>
                            <p class="text">If you are looking for a removal and cleaning company that offers you a high quality service, professionalism, flexibility and competitive prices,
                                do not hesitate to contact us. We are sure that you will be surprised by the quality of our service and the commitment of our work team.</p>
                            <ul class="social">
                                <li><a href="#"><i class="lni lni-facebook"></i></a></li>
                                <li><a href="#"><i class="lni lni-twitter"></i></a></li>
                                <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="#"><i class="lni lni-linkedin"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="footer-link d-flex flex-wrap">
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact mt-45 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.8s">
                            <div class="footer-title">
                                <h4 class="title">Quick Link</h4>
                            </div>
                            <ul class="contact-list">
                                <li>
                                    <div class="contact-info d-flex">
                                        <div class="info-content media-body">
                                            <p class="text"><i class="lni lni-phone"></i> +1 (305) 989 - 6611</p>
                                        </div>
                                    </div> <!-- contact info -->
                                </li>
                                <li>
                                    <div class="contact-info d-flex">
                                        <div class="info-content media-body">
                                            <p class="text"><a href="http://easymovingcleaning.us"><i class="lni lni-world"></i> windowsservicecorp.us</a></p>
                                        </div>
                                    </div> <!-- contact info -->
                                </li>
                                <li>
                                    <div class="contact-info d-flex">
                                        <div class="info-content media-body">
                                            <p class="text"><i class="lni lni-map"></i> Tampa, Florida.</p>
                                        </div>
                                    </div> <!-- contact info -->
                                </li>
                            </ul> <!-- contact list -->
                        </div> <!-- footer contact -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright justify-content-between">
                            <div class="copyright-text text-center">
                                <p class="text">©2023, Y&Y Window Services Corp. All Rights reserved</p>
                                <p class="text" style="font-size: xx-small;">Template Crafted by <a rel="nofollow" href="https://uideck.com">UIdeck</a></p>
                            </div> <!-- copyright text -->
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>

    <!--====== PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

    <!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-"></div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->

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
    <script>
        $(document).ready(function(){
            // Get the snackbar DIV
            var x = document.getElementById("snackbar");
            // Add the "show" class to DIV
            x.className = "show";
            // After 3 seconds, remove the show class from DIV
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 4000);
        });
    </script>


</body>

</html>
