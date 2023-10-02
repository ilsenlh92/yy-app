<section id="cards" class="pt-70 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center pb-25">
                    <h3 class="title">Why You Should Choose <span style="text-transform: uppercase; color: #e6905c;">windows service corp</span></h3>
                    <p class="text">Cleaning and moving services are very important to make sure everything is in order and clean before you move.</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row align-items-center">
            <div class="col-lg-4 p-4">
                <div class="card bg-dark text-white card-img-container">
                    <img class="card-img card-img-transition" src="images/cards/card1.webp" alt="Card image" data-images="images/cards/card1.webp,images/cards/card2.webp,images/cards/card3.webp">
                    <div class="card-img-overlay">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text">Last updated 3 mins ago</p>
                      <button type="button" class="btn btn-warning position-absolute" style="right: 10%; bottom: 10%;">Button</button>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 p-4">
                <div class="card bg-dark text-white card-img-container">
                    <img class="card-img card-img-transition" src="images/cards/card1i.webp" alt="Card image" data-images="images/cards/card1i.webp,images/cards/card2i.webp,images/cards/card3i.webp">
                    <div class="card-img-overlay">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text">Last updated 3 mins ago</p>
                      <button type="button" class="btn btn-warning position-absolute" style="right: 10%; bottom: 10%;">Button</button>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 p-4">
                <div class="card bg-dark text-white card-img-container">
                    <img class="card-img card-img-transition" src="images/cards/card1r.webp" alt="Card image" data-images="images/cards/card1r.webp,images/cards/card2r.webp,images/cards/card3r.webp">
                    <div class="card-img-overlay">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text">Last updated 3 mins ago</p>
                      <button type="button" class="btn btn-warning position-absolute" style="right: 10%; bottom: 10%;">Button</button>
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
