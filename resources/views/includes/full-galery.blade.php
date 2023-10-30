
{{-- 
 * Renders the full image gallery section. 
 * 
 * Loops through numbers 1-9 to generate gallery items.
 * Checks current route name to determine if foodtruck or trailer images should be used.
 * Renders responsive images with overlays.
 --}}
<section id="ft-galery" class="galery pt-70 pb-120">
    <div class="container gallery-container">
        <div class="tz-gallery">
            <div class="row">
                @for ($i = 1 ; $i < 10 ; $i++)
                <div class="col-sm-6 col-md-4 filter ft">
                    <a class="lightbox" href="{{ asset('images/galery/' . Route::currentRouteName() . '/' . $i . '.webp') }}">
                        <img 
                            class="img-responsive" 
                            src="{{ asset('images/galery/' . Route::currentRouteName() . '/' . $i . '.webp') }}" 
                            alt="{{ Route::currentRouteName() }}"
                        >
                        <div class="overlay"></div>
                    </a>
                </div>
                @endfor
            </div>
        </div>
    </div>
</section>




