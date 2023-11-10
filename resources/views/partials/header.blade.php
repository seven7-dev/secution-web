<header id="header" class="header default fullWidth">
    <div class="topbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 xs-mb-10">
                    <div class="topbar-call text-center text-md-start">
                        <ul>
                            <li><i class="fa fa-envelope-o theme-color"></i> <a href="mailto:{{ env('APP_MAIL') }}">
                                    <span>{{ env('APP_MAIL') }} </span> </a>
                            <li><i class="fa fa-phone"></i> <a href="tel:{{ env('APP_PHONE') }}">
                                    <span>{{ env('APP_PHONE') }} </span> </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="topbar-social text-center text-md-end">
                        <ul>
                            <li><a href="#"><span class="ti-facebook"></span></a></li>
                            <li><a href="#"><span class="ti-instagram"></span></a></li>
                            <li><a href="#"><span class="fa fa-google"></span></a></li>
                            <li><a href="#"><span class="ti-twitter"></span></a></li>
                            <li><a href="#"><span class="ti-linkedin"></span></a></li>
                            <li><a href="#"><span class="ti-dribbble"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <nav id="menu" class="mega-menu">
            <section class="menu-list-items">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 position-relative">
                            <ul class="menu-logo">
                                <li>
                                    <a href="{{ route('home') }}"><img id="logo_img" src="{{ asset('images/logo.png') }}"
                                            alt="logo">
                                    </a>
                                </li>
                            </ul>
                            <div class="menu-bar">
                                <ul class="menu-links">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('about-us') }}">About Us</a></li>
                                    <li><a href="{{ route('services') }}">Services</a></li>
                                    <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                                <div class="search-cart">
                                    <div class="search">
                                        <a class="search-btn not_click" href="javascript:void(0);"></a>
                                        <div class="search-box not-click">
                                            <form action="search.html" method="get">
                                                <input type="text" class="not-click form-control" name="search"
                                                    placeholder="Search.." value="">
                                                <button class="search-button" type="submit"> <i
                                                        class="fa fa-search not-click"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </nav>
    </div>
</header>
