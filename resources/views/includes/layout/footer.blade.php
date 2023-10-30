<footer id="footer" class="footer-area">
    <div class="footer-widget pt-90 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="footer-about mt-50 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
                        <a class="logo" href="#">
                            <img src="images/logo.png" alt="Logo Y&Y Window Service Corp">
                        </a>
                        <p class="text">{{ __('layout.footer-text')}}</p>
                        <ul class="social">
                            <li><a href="#"><i class="lni lni-facebook"></i></a></li>
                            <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                            <li><a href="#"><img class="tiktok" src="{{asset('images/tiktok-alt.svg')}}" alt="tiktok"></a></li>
                        </ul>
                    </div> <!-- footer about -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-link d-flex flex-wrap">
                    </div> <!-- footer link -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-contact mt-150 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
                        <div class="footer-title">
                            <h4 class="title">{{ __('layout.contact-with-us')}}</h4>
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
                                        <p class="text"><a href="http://yy-foodtruck.com"><i class="lni lni-world"></i> yy-foodtruck.com</a></p>
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
                    <div class="copyright justify-content-between pb-20 pt-20">
                        <div class="copyright-text text-center">
                            <p class="text">©2023, 
                                <a href="{{ route ('home')}}">
                                    Y&Y Window Services Corp.
                                </a>
                                <br> 
                                {{ __('layout.rights')}}
                            </p>
                            <p class="text" style="font-size: xx-small;">
                                {{ __('footer.element-1')}}
                                <a rel="nofollow" href="https://uideck.com">UIdeck</a>
                                {{ __('footer.element-2')}}
                                <a rel="nofollow" href="https://www.viqsystems.com">VIQ System</a>
                            </p>
                        </div> <!-- copyright text -->
                    </div> <!-- copyright -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer copyright -->
</footer>