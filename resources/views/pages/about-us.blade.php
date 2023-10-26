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
        @include('includes.header')
        <!--====== HEADER PART ENDS ======-->
    @endsection
    @section('content')
        <div class="container pt-120">
            <div class="row justify-content-center mb-120">
                <div class="col-12 col-lg-6 widget-wrap populated">
                    <div data-id="a58e410" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">

                            <h2 class="elementor-heading-title elementor-size-default mb-5"><span style="color: white">{{ __('about-us.title-white') }}</span><br> {{ __('about-us.title-yellow') }}</h2>

                           <div class="elementor-widget-container">
                                <p class="mb-2">{{ __('about-us.text-1') }}</p>
                                <p class="mb-2">{{ __('about-us.text-2') }}</p>
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
                        <h3 class="title">
                            <span style="text-transform: uppercase; color: #e6905c;">
                                {{ __('about-us.title-1') }}
                            </span>{{ __('about-us.title-2') }}
                        </h3>
                        <p class="text">
                            {{ __('about-us.description') }}
                        </p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
        </div>
        <div class="jumbotron jumbotron-fluid" style="background-color: #212529">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="mb-3"{{ __('about-us.title-3') }}></h4>
                        <p>
                            {{ __('about-us.p-1') }}
                        </p>
                        <p>
                            {{ __('about-us.p-2') }}
                        </p>
                        <p>
                            {{ __('about-us.p-3') }}
                        </p>
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

    <!--====== TESTIMONIALS PART START ======-->
    @include('includes.about-us.testimonials')
    <!--====== TESTIMONIALS PART ENDS ======-->

    @endsection
