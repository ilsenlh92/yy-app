@section('styles')
    @parent
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
@endsection

<section id="galery" class="galery pt-70 pb-120">
    <div class="container gallery-container">
        <div class="row" style="justify-content: center;">
            <h2>Gallery</h2>
        </div>
        <div class="tz-gallery">
            <div class="row">
                <div class="col-12 p-5" align="center">
                    <button class="btn btn-light  filter-button" data-filter="all">All</button>
                    <button class="btn btn-default filter-button" data-filter="ft">Foodtrucks</button>
                    <button class="btn btn-warning  filter-button" data-filter="tr">Trailers</button>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 filter ft">
                    <a class="lightbox" href="images/galery/foodtrucks/1.webp">
                        <img class="img-responsive" src="images/galery/foodtrucks/1.webp" alt="foodtrucks">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 filter ft">
                    <a class="lightbox" href="images/galery/foodtrucks/2.webp">
                        <img class="img-responsive" src="images/galery/foodtrucks/2.webp" alt="foodtrucks">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 filter ft">
                    <a class="lightbox" href="images/galery/foodtrucks/3.webp">
                        <img class="img-responsive" src="images/galery/foodtrucks/3.webp" alt="foodtrucks">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 filter tr">
                    <a class="lightbox" href="images/galery/trailers/1.webp">
                        <img class="img-responsive" src="images/galery/trailers/1.webp" alt="trailers">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 filter tr">
                    <a class="lightbox" href="images/galery/trailers/2.webp">
                        <img class="img-responsive" src="images/galery/trailers/2.webp" alt="trailers">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 filter tr">
                    <a class="lightbox" href="images/galery/trailers/3.webp">
                        <img class="img-responsive" src="images/galery/trailers/3.webp" alt="trailers">
                    </a>
                </div>
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
