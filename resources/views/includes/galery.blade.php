@section('styles')
    @parent
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
@endsection

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
                @for ($i = 1 ; $i < 4 ; $i++)
                <div class="col-sm-6 col-md-4 filter ft">
                    <a class="lightbox" href="images/galery/foodtrucks/1.webp">
                        <img class="img-responsive" src="images/galery/foodtrucks/{{ $i }}.webp" alt="foodtrucks">
                    </a>
                </div>
                @endfor
                @for ($i = 1 ; $i < 4 ; $i++)
                <div class="col-sm-6 col-md-4 filter tr">
                    <a class="lightbox" href="images/galery/trailers/3.webp">
                        <img class="img-responsive" src="images/galery/trailers/{{ $i }}.webp" alt="trailers">
                    </a>
                </div>
                @endfor
            </div>

        </div>

    </div>
</section>

@section('scripts')
@parent
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
    $(".filter-button").click(function(){
    var value = $(this).attr('data-filter');

    if(value == "all")
    {
        $('.filter').show('1000');
    }
    else
    {
        $(".filter").not('.'+value).hide('3000');
        $('.filter').filter('.'+value).show('3000');
    }
});

</script>
@endsection
