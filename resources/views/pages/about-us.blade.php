@section('styles')
    @parent
    <style>
        .widget-wrap{
    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    padding: 5% 7% 7% 5%;
    position: relative;
    width: 100%;
    flex-wrap: wrap;
    background-color: #212529;
}

    </style>
@endsection

@extends('template/layout')
    @section('navbar')
        @parent
        <!--====== HEADER PART START ======-->
        @include('includes.halfheader')
        <!--====== HEADER PART ENDS ======-->
    @endsection
    @section('content')
        <div class="container pt-120">
            <div class="row justify-content-center mb-120">
                <div class="col-12 col-lg-6 widget-wrap populated">
                    <div data-id="a58e410" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">

                            <h2 class="elementor-heading-title elementor-size-default mb-5">HOW DID<br> THIS DREAM STARTED</h2>

                           <div class="elementor-widget-container">
                                <p class="mb-2">At S4L Industries, we understand the power, responsibility, and effort that comes with being small business owners. When we arrived in the United States, we had a clear goal in mind. Although it wasn’t easy to achieve, through hard work and teamwork, we managed to conquer this dream called S4L Industries.</p>
                                <p class="mb-2">We are grateful to our team of workers and customers ,because with their help and trust, we continue to grow in the market and have positioned ourselves as the leading manufacturers of food trucks and trailers in South Florida, recognized for our high quality and competitive prices.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    @include('includes.swiper')
                </div>
            </div><!-- row -->


            <div class="row justify-content-center mb-120">
                <div class="col-lg-7">
                    <div class="section-title text-center pb-25">
                        <h3 class="title">CUTTING-EDGE GASTRONOMIC<span style="text-transform: uppercase; color: #e6905c;">SOLUTIONS</span></h3>
                        <p class="text">Consumers are becoming increasingly demanding and seeking unique gourmet experiences at reasonable prices. That’s why mobile food is making a difference in the United States, to the extent that it has experienced incredible growth over the last 7 years.
                            At S4L, we want to help make your dream of owning a food truck or trailer a reality. We take care of designing and customizing your project. We offer a wide variety of options to equip it with everything you need and set it in motion.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
        </div>
        <div class="jumbotron jumbotron-fluid" style="background-color: #212529">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="mb-3">CUSTOM BUILT TRUCKS & TRAILERS</h4>
                        <p>We offer all kinds of welding, from stainless steel to aluminum and iron. Not only are we the leading suppliers of food trucks and trailers, but we also have an excellent team of mechanics ready to perform any type of repair you may need.</p>
                        <p>In addition, we provide restaurant hoods, steam tables, custom tables, shelves, air conditioning supports, generator boxes, propane tank covers, trucks with boxes, and exhaust fan bases, among others.</p>
                        <p>But that’s not all; at S4L Industries, we help you with the necessary permits to get your business up and running, and we even offer financing options so that nothing stops you. And if you need it, we have a yard equipped with electricity and water for parking and surveillance.</p>
                    </div>
                    <div class="col-lg-6">
                        <div id="carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carousel" data-slide-to="0" class="active"></li>
                              <li data-target="#carousel" data-slide-to="1"></li>
                              <li data-target="#carousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100n img-responsive img-responsive-dwidth" src="images/galery/foodtrucks/1.webp" alt="foodtrucks">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100 img-responsive img-responsive-dwidth" src="images/galery/foodtrucks/2.webp" alt="foodtrucks">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100 img-responsive img-responsive-dwidth" src="images/galery/foodtrucks/3.webp" alt="foodtrucks">
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-120">
            <div class="row justify-content-center mb-120 p-4">
                <div class="col-12 col-lg-6 widget-wrap populated border border-warning" style="text-align: center">
                            <h3 class="elementor-heading-title elementor-size-default">HOW DID<br> THIS DREAM STARTED</h2>
                </div>
            </div><!-- row -->
        </div>
    @endsection
