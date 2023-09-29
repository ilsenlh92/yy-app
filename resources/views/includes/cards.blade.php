<section id="cards" class="pt-70 pb-120">
    <div class="container">
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
    }

    setInterval(function() {
        for (var i = 0; i < imgElements.length; i++) {
            imgElements[i].style.transform = "scale(1.1)"; // Efecto de agrandar
        }

        setTimeout(function() {
            for (var i = 0; i < imgElements.length; i++) {
                imgElements[i].currentIndex = (parseInt(imgElements[i].currentIndex) + 1) % imgElements[i].images.length; // Cambiar a la siguiente imagen
                imgElements[i].src = imgElements[i].images[imgElements[i].currentIndex];

                imgElements[i].onload = function() {
                    this.style.transform = "scale(2.5)"; // Efecto de encoger
                };
            }
        }, 2000);
    }, 4000); // Cambiar la imagen cada 4 segundos
</script>
