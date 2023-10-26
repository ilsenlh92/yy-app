{{-- <section id="why" class="services-area pt-110 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center pb-25">
                    <h3 class="title">{{ __('cards.general-title') }}<span style="text-transform: uppercase; color: #e6905c;">{{ str_replace("_", " ", config('app.name')) }}</span></h3>
                    <p class="text">{{ __('cards.general-services-description') }}</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-12 col-lg-4 col-sm-6">
                <div class="single-services services-color-1 text-center mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.2s">
                    <div class="services-icon d-flex align-items-center justify-content-center">
                        <i class="lni lni-briefcase"></i>
                    </div>
                    <div class="services-content">
                        <h4 class="services-title"><a href="#">{{ __('services.title-1') }}</a></h4>
                        <p class="text">{{ __('services.text-1') }}</p>
                    </div>
                </div> <!-- single services -->
            </div>
            <div class="col-12 col-lg-4 col-sm-6">
                <div class="single-services services-color-2 text-center mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.4s">
                    <div class="services-icon d-flex align-items-center justify-content-center">
                        <i class="lni lni-layers"></i>
                    </div>
                    <div class="services-content">
                        <h4 class="services-title"><a href="#">{{ __('services.title-2') }}</a></h4>
                        <p class="text">{{ __('services.text-2') }}</p>
                    </div>
                </div> <!-- single services -->
            </div>
            <div class="col-12 col-lg-4 col-sm-12">
                <div class="single-services services-color-1 text-center mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.6s">
                    <div class="services-icon d-flex align-items-center justify-content-center">
                        <i class="lni lni-handshake"></i>
                    </div>
                    <div class="services-content">
                        <h4 class="services-title"><a href="#">{{ __('services.title-3') }}</a></h4>
                        <p class="text">{{ __('services.text-3') }}</p>
                    </div>
                </div> <!-- single services -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
 --}}

 <section id="why" class="services-area pt-110 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center pb-25">
                    <h3 class="title">
                        {{ __('services.general-title') }}
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach(['briefcase','layers','handshake'] as $i=>$ico)
                <div class="col-12 col-lg-4 col-sm-6">
                    <div class="single-services services-color-{{($i+1) % 2 == 0 ? '2' : '1'}} text-center mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="{{0.2 * ($i+1)}}s">
                        <div class="services-icon d-flex align-items-center justify-content-center">
                            <i class="lni lni-{{ $ico }}"></i>
                        </div>
                        <div class="services-content">
                            <h4 class="services-title"><a href="#">{{ __('services.title-' . ($i+1)) }}</a></h4>
                            <p class="text">{{ __('services.text-' . ($i+1)) }}</p>
                            <p class="text">{{ __('services.more-text-' . ($i+1)) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
