<header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-float navbar-fixed">
        <div class="container">
            <a href="/" class="navbar-brand">
                <img src="/assets/img/Main Logo - Springboard Microfinance.png" alt="Springboard" width="160px" height="60px" /></a>

            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbarContent">
                <ul class="navbar-nav ml-lg-4 pt-3 pt-lg-0">
                    <!--Home-->
                    <li class="nav-item {{request()->routeIs(['home'])? 'active' : ''}}">
                        <a href="/" class="nav-link">Home</a>
                    </li>

                    <!--Services-->
                    <li class="nav-item {{request()->routeIs(['services'])? 'active' : ''}}">
                        <a href="{{route('services')}}" class="nav-link">Services</a>
                    </li>

                    <!--News-->
                    <li class="nav-item {{request()->routeIs(['news', 'news-single'])? 'active' : ''}}">
                        <a href="{{route('news')}}" class="nav-link">News</a>
                    </li>

                    <!--About-->
                    <li class="nav-item {{request()->routeIs(['about'])? 'active' : ''}}">
                        <a href="{{route('about')}}" class="nav-link">About</a>
                    </li>

                    <!--Contact-->
                    <li class="nav-item {{request()->routeIs(['contact'])? 'active' : ''}}">
                        <a href="{{route('contact')}}" class="nav-link">Contact</a>
                    </li>
                </ul>

                <!--Get a quote-->
                <div class="ml-auto">
                    <a href="{{route('getQuote')}}" class="btn btn-outline rounded-pill">Get a Quote</a>
                </div>
            </div>
        </div>
    </nav>


</header>