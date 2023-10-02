@section('styles')
    @parent
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
@endsection

<section class="galery pt-70 pb-120">
    <div class="container gallery-container">

        <h1>Gallery</h1>

        <div class="tz-gallery">

            <div class="row">
                <div class="col-12 p-5" align="center">

                        <button class="btn btn-default filter-button" data-filter="all">All</button>
                        <button class="btn btn-default filter-button" data-filter="outside">Outside</button>
                        <button class="btn btn-warning  filter-button" data-filter="inside">Inside</button>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 filter outside">
                    <a class="lightbox" href="images/galery/11.webp">
                        <img class="img-responsive" src="images/galery/11.webp" alt="Bridge">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 filter outside">
                    <a class="lightbox" href="images/galery/12.webp">
                        <img class="img-responsive" src="images/galery/12.webp" alt="Park">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 filter outside">
                    <a class="lightbox" href="images/galery/13.webp">
                        <img class="img-responsive" src="images/galery/13.webp" alt="Tunnel">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 filter inside">
                    <a class="lightbox" href="images/galery/21.webp">
                        <img class="img-responsive" src="images/galery/21.webp" alt="Traffic">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 filter inside">
                    <a class="lightbox" href="images/galery/22.webp">
                        <img class="img-responsive" src="images/galery/22.webp" alt="Coast">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 filter inside">
                    <a class="lightbox" href="images/galery/23.webp">
                        <img class="img-responsive" src="images/galery/23.webp" alt="Rails">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 filter inside">
                    <a class="lightbox" href="images/galery/31.webp">
                        <img class="img-responsive" src="images/galery/31.webp" alt="Rails">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 filter inside">
                    <a class="lightbox" href="images/galery/32.webp">
                        <img class="img-responsive" src="images/galery/32.webp" alt="Rails">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 filter inside">
                    <a class="lightbox" href="images/galery/23.webp">
                        <img class="img-responsive" src="images/galery/33.webp" alt="Rails">
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
