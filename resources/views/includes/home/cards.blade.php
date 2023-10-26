<section id="cards" class="pt-70 pb-70">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-6 col-lg-5 p-4">
                <div class="card bg-dark text-white card-img-container">
                    <img class="card-img card-img-transition" src="{{ asset('images/cards/card1.webp') }}" alt="Card image" data-images="images/cards/card1.webp,images/cards/card2.webp,images/cards/card3.webp">
                    <div class="card-img-overlay">
                      <h1 class="card-title"><span style="color: white">{{ __('cards.card-1-title-1') }}</span> <br> {{ __('cards.card-1-title-2') }}</h1>
                      <p class="card-text">{{ __('cards.card-1-text') }}</p>
                      <a type="button" href="{{ route('foodtrucks')}}" class="btn btn-warning position-absolute" style="right: 10%; bottom: 10%;">{{ __('cards.general-go') }}</a>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-md-6 col-lg-5 p-4">
                <div class="card bg-dark text-white card-img-container">
                    <img class="card-img card-img-transition" src="images/cards/card4.webp" alt="Card image" data-images="images/cards/card4.webp,images/cards/card5.webp,images/cards/card6.webp">
                    <div class="card-img-overlay">
                      <h1 class="card-title"><span style="color: white">{{ __('cards.card-2-title-1') }}</span> <br> {{ __('cards.card-2-title-2') }}</h1>
                      <p class="card-text">{{ __('cards.card-1-text') }}</p>
                      <a type="button" class="btn btn-warning position-absolute" href="{{ route('trailers')}}" style="right: 10%; bottom: 10%;">{{ __('cards.general-go') }}</a>
                    </div>
                  </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<script>
    var imgElements = document.getElementsByClassName('card-img-transition');

    for (var i = 0; i < imgElements.length; i++) {
        imgElements[i].images = imgElements[i].getAttribute('data-images').split(',');
        imgElements[i].currentIndex = 0;
        imgElements[i].style.transition = '0.25s ease-in-out, transform 1s ease-in-out'; // Añade transición suave
    }

// Primera tarjeta cambia cada 4 segundos
setInterval(changeImage, 4000, imgElements[0]);

// Segunda tarjeta cambia cada 5 segundos
setInterval(changeImage, 5000, imgElements[1]);

// Tercera tarjeta cambia cada 6 segundos
setInterval(changeImage, 6000, imgElements[2]);

function changeImage(imgElement) {
    imgElement.style.transform = "scale(1.1)"; // Efecto de agrandar

    setTimeout(function() {
        imgElement.currentIndex = (parseInt(imgElement.currentIndex) + 1) % imgElement.images.length; // Cambiar a la siguiente imagen
        var newImage = new Image();
        newImage.src = imgElement.images[imgElement.currentIndex];
        newImage.onload = function() {
            imgElement.src = this.src;
            imgElement.style.transform = "scale(1)"; // Efecto de encoger
        };
    }, 1000); // Espera 1 segundo para cambiar la imagen
}
</script>
