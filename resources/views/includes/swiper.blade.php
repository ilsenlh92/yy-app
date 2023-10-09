@section('styles')
    @parent
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        .swiper-container {
            width: 100%;
        }
        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            position: relative;
            width: 100%;
            height: 50vh;
        }
        .swiper-slide img {
            transition: transform 2s;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
        .swiper-slide-active img {
            transform: scale(1.2);
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: hsla(0, 0%, 0%, 0.897);
        }
        .carda {
            position: absolute;
            bottom: 20px;
            left: 20px;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 20px;
            border-radius: 10px;
        }
        .carda h2, .carda p {
            margin: 0;
        }
        .callatention{
            align-content: center;
            align-items: center;
            text-align: center;
            padding: 2rem;
            background-color: orange
        }
        .callatention p{
            color: black
        }
        .callatention a.btn{
            text-transform: uppercase;
            font-family: "Poppins", sans-serif;
            font-weight: bold
        }
    </style>
@endsection

<section class="swiper">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="images/swiper1.webp" alt="trailers">
                <div class="overlay">
                    <div class="carda">
                        <h2>We make DREAMS COME TRUE</h2>
                        <p>Discovery the best food truck and trailer builder service</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="images/swiper2.webp" alt="trailers">
                <div class="overlay">
                    <div class="carda">
                        <h2>We TRANSFORM VISIONS INTO REALITY</h2>
                        <p>Uncover the premier service for constructing food trucks and trailers.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="callatention">
    <p class="mb-3">License application and drawings are FREE when purchasing a food truck builder or food trailer builder.</p>
    <a class="btn btn-light btn-lg" href="Jumbo action link" role="button">Begin your build</a>
</section>

@section('scripts')
    @parent
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            effect: 'fade',
            speed: 2000,
            autoplay: {
                delay: 5000,
            },
        });
    </script>
@endsection
