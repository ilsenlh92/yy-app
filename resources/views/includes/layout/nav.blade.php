<div class="navbar-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="/">
                        <img class="logo wsc" src="images/logo.png" alt="Logo Y&Y Window Service Corp">
                        <title id="logo-text"> Window Service Corp </title>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                        <ul id="nav" class="navbar-nav ml-auto nav justify-content-end">
                            <li class="nav-item {{request() -> routeIs('home') ? 'active' : ''}} ">
                                <a class="page-scroll" href="{{ route ('home')}}#home">{{ __('layout.home')}}</a>
                            </li>
                            <li class="nav-item {{request() -> routeIs('foodtrucks') ? 'active' : ''}}">
                                <a class="page-scrolls" href="{{ route('foodtrucks')}}">{{ __('layout.foodtrucks')}}</a>
                            </li>
                            <li class="nav-item {{request() -> routeIs('trailers') ? 'active' : ''}}">
                                <a class="page-scrolls" href="{{ route('trailers')}}">{{ __('layout.trailers')}}</a>
                            </li>
                            <li class="nav-item {{request() -> routeIs('about-us') ? 'active' : ''}}">
                                <a class="page-scrolls" href="{{ route('about-us')}}">{{ __('layout.about-us')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll" href="{{ route ('home')}}#why">{{ __('layout.why-us')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll" href="{{ route ('home')}}#cards">{{ __('layout.cards')}}</a>
                            </li>

                            <li class="nav-item">
                                <a class="page-scroll" href="#footer">{{ __('layout.contact')}}</a>
                            </li>

                            <li class="nav-item">
                                <a  id="wa" href="https://wa.me/+1305989611" >
                                    <span class="badge rounded-pill bg-warning" style="color: #201f1e;padding: 7px 15px;">
                                        <i class="lni lni-whatsapp" style="margin: 0 4px;"></i>
                                        <span id="wanum" style="display: none"><em>+1 (305) 989 - 6611</em></span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div> <!-- navbar collapse -->
                </nav> <!-- navbar -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div> <!-- navbar area -->