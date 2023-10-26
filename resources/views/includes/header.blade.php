<header  id="{{Route::currentRouteName()}}" class="header-area">
    <div class="header-hero {{ request() -> routeIs('home')? '' : 'half' }} bg_cover d-lg-flex align-items-center">
        <div class="container">
            <div class="row align-items-center justify-content-center justify-content-lg-between">
                <div class="fullscreen-video-wrap">
                    <!-- Video -->
                   {{--  <video src="{{ asset('video/videoplayback.webm') }}" autoplay muted loop>
                        {{ __('header.not-supported') }}
                    </video> --}}
                    <div class="swiper-container">
                        <!-- Slides -->
                        <div class="swiper-wrapper">
                            {{--/**
                             * Loops through numbers 1 to 3 to generate 3 swiper slides with header images.
                             * Uses Blade template syntax to insert the image asset path and concatenate 
                             * the loop variable to the filename.
                             */--}}
                            @for ($i = 1; $i <= 3; $i++)
                                <div class="swiper-slide"><img src="{{asset('images/header/h'.$i.'.webp')}}" class="swiper-image"></div>
                            @endfor
                            <div class="header-overlay"></div>
                        </div>
                    </div>
                </div>
                <div class="header-overlay"></div>
                <div class="header-content">
                    {{-- Muestra el titulo de la ruta si es difernte a la home --}}
                    @if (request() -> routeIs('home'))
                        <h1>{{ __('header.title') }}</h1>
                    @else
                        <h1>{{str_replace("-", " ", Route::currentRouteName())}}</h1>
                    @endif
                   <p>{{ __('header.description') }}</p>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header hero -->
</header>

