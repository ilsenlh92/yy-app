
{{-- 
Este componente carga las 9 imagenes de galeria segun la ruta, si la ruta es trailers carga los de trailers o 
si la ruta es foodtrucks entonces carga las imagenes foodtrucks
este include se carga en esas rutas solamente, en caso de cargarlo en otra ruta no cargara imagenes 
--}}
<section id="ft-galery" class="galery pt-70 pb-120">
    <div class="container gallery-container">
        <div class="tz-gallery">
            <div class="row">
                @for ($i = 1 ; $i < 10 ; $i++)
                <div class="col-sm-6 col-md-4 filter ft">
                    <a class="lightbox" href="{{ asset('images/galery/' . (request() -> routeIs('foodtrucks') ? 'foodtrucks' : 'trailers') . '/' . $i . '.webp') }}">
                        <img 
                            class="img-responsive" 
                            src="{{ asset('images/galery/' . (request() -> routeIs('foodtrucks') ? 'foodtrucks' : 'trailers') . '/' . $i . '.webp') }}" 
                            alt="{{ Route::currentRouteName() }}"
                        >
                        <div class="overlay" style="background:linear-gradient(350deg, black, transparent);"></div>
                    </a>
                </div>
                @endfor
            </div>
        </div>
    </div>
</section>




