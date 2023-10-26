<section class="swiper">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @for ($i = 1; $i < 3; $i++)
                <div class="swiper-slide">
                    <img src="{{ asset('images/swiper'.$i.'.webp') }}" alt="trailers">
                    <div class="overlay">
                        <div class="carda">
                            <h2>{{ __('swiper.swiper-e-'.$i)}}</h2>
                            <p>{{ __('swiper.swiper-t-'.$i)}}</p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>
<section class="callatention">
    <p class="mb-3">{{ __('swiper.call') }}</p>
    <a class="btn btn-light btn-lg" href="{{ route ('on-construction')}}" role="button">{{ __('swiper.button') }}</a>
</section>
