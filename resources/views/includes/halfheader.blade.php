<header id="{{Route::currentRouteName()}}" class="header-area">
    <div id="half-header" class="header-hero half bg_cover d-lg-flex align-items-center">
        <div class="container">
            <div class="row align-items-center justify-content-center justify-content-lg-between">

                <div class="fullscreen-video-wrap">
                    <video src="{{ asset('video/videoplayback.webm') }}" autoplay muted loop>
                        Tu navegador no soporta el elemento de video.
                    </video>
                </div>
                <div class="header-overlay"></div>
                <div class="header-content">
                    <h1>{{str_replace("-", " ", Route::currentRouteName())}}</h1>
                    <p>We manufacture and customize your Food Truck</p>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header hero -->
</header>
