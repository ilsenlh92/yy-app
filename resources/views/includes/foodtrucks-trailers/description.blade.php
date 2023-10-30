<section id="foodtrucks-description" class="pt-70">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 p-10 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <p>
                    <em>{{ __('description.'.(request() -> routeIs('foodtrucks') ? 'ft':'tr').'-text-1') }}</em>
                    {{ __('description.'.(request() -> routeIs('foodtrucks') ? 'ft':'tr').'-text-2')}}
                </p>  
                <p>
                    {{ __('description.'.(request() -> routeIs('foodtrucks') ? 'ft':'tr').'-text-3') }}
                </p>
                <p class="">
                    <strong>{{ __('description.'.(request() -> routeIs('foodtrucks') ? 'ft':'tr').'-strong') }}</strong>
                </p>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>





