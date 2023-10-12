<section id="elements" class="elements-area pt-70 pb-70">
    <div class="container">
        <div class="row align-items-center">
            @foreach(['caravan', 'ruler-alt', 'layers'] as $i => $e)
            <div class="col-12 col-lg-4 elements-widget-container">
                <div class="elements-icon-box-icon">
                    <i class="lni lni-{{$e}}"></i>
                </div>
                <div class="elements-icon-box-content">
                    <h4 class="elements-icon-box-title"> <span> {{ __('elements.element-title-'.$i+1) }} </span></h4>
                    <p class="elements-icon-box-description"> {{ __('elements.element-description-'.$i+1) }} </p>
                </div>
            </div>
            @endforeach
        </div> <!-- row -->
    </div> <!-- container -->
</section>

