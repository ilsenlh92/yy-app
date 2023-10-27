@section('styles')
    @parent
    <style>
        .testimonial .card {
        background-color: #1d1a1a;
        padding: 40px;
        margin-bottom: 25px;
        min-height: 95%;
        }

        .testimonial h2 {
        margin-top: 0;
        }

        .testimonial p {
        font-style: italic;
        font-size: 0.9em;
        }
    </style>
@endsection

<section id="testimonials" class="pt-70 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center pb-25">
                    <h3 class="title">
                        {{ __('about-us.testimonials')}}
                    </h3>
                </div>
            </div>
        </div>
        <div class="row mt-25">
            @foreach ($data['testimonials'] as $tsm)
                <div class="col-12 col-md-6 col-lg-4 testimonial">
                    <div class="card wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <h4>{{$tsm['name']}}</h4>
                        <p>{{$tsm['testimonial']}}</p>
                    </div> 
                </div>
            @endforeach
        </div>
    </div> 
</section>