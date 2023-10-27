{{-- @section('styles')
    @parent
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
@endsection --}}

<section id="galery" class="galery pt-70 pb-120">
    <div class="container gallery-container">
        <div class="row" style="justify-content: center;">
            <h2>{{ __('galery.galery' )}}</h2>
        </div>
        <div class="tz-gallery">
            <div class="row">
                <div class="col-12 p-5" align="center">
                    <button class="btn btn-light  filter-button" data-filter="all">{{ __('galery.all' )}}</button>
                    <button class="btn btn-default filter-button" data-filter="ft">{{ __('galery.foodtrucks' )}}</button>
                    <button class="btn btn-warning  filter-button" data-filter="tr">{{ __('galery.trailers' )}}</button>
                </div>
            </div>
            <div class="row">
                @php
                    $duration = 1.3; // valor inicial de data-wow-duration
                    $delay = 0.2; // valor inicial de data-wow-delay
                @endphp
                @for ($i = 1 ; $i < 4 ; $i++)
                    <div class="col-sm-6 col-md-4 filter ft">
                        <a class="lightbox wow fadeInUpBig" data-wow-duration="{{$duration}}s" data-wow-delay="{{$delay}}s" href="{{asset('images/galery/foodtrucks/'.$i.'.webp')}}">
                            <img class="img-responsive" src="{{asset('images/galery/foodtrucks/'.$i.'.webp')}}" alt="foodtrucks">
                            <div class="overlay" style="background:linear-gradient(350deg, black, transparent);"></div>
                        </a>
                    </div>
                    @php
                        $duration += 0.2; // incrementa la duración en 0.2 segundos
                        $delay += 0.1; // incrementa el retraso en 0.1 segundos
                    @endphp
                @endfor
                @php
                    $duration = 1.3; // reinicia la duración al valor inicial
                    $delay = 0.2; // reinicia el retraso al valor inicial
                @endphp
                @for ($i = 1 ; $i < 4 ; $i++)
                    <div class="col-sm-6 col-md-4 filter tr">
                        <a class="lightbox wow fadeInUpBig" data-wow-duration="{{$duration}}s" data-wow-delay="{{$delay}}s" href="{{asset('images/galery/trailers/'.$i.'.webp')}}">
                            <img class="img-responsive" src="{{asset('images/galery/trailers/'.$i.'.webp')}}">
                            <div class="overlay" style="background:linear-gradient(350deg, black, transparent);"></div>
                        </a>
                    </div>
                    @php
                        $duration -= 0.1; // decrementa la duración en 0.1 segundos
                        $delay -= 0.05; // decrementa el retraso en 0.05 segundos
                    @endphp
                @endfor
            </div>
        </div>
    </div>
</section>