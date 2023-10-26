<header id="header" class="header default fullWidth">
    <div class="topbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 xs-mb-10">
                    <div class="topbar-call text-center text-md-start">
                        <ul>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <a href="mailto:{{ env('APP_MAIL') }}">
                                    <span>{{ env('APP_MAIL') }} </span>
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <a href="tel:{{ env('App_PHONE') }}">
                                    <span>{{ env('APP_PHONE') }} </span>
                                </a>
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
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="menu">
        <nav id="menu" class="mega-menu">
            <section class="menu-list-items" style="height: 90px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 position-relative">
                            <ul class="menu-logo">
                                <li>
                                    <a href="index-01.html"><img id="logo_img" src="images/logo.png" alt="logo"> </a>
                                    <div class="menu-mobile-collapse-trigger"><span></span></div>
                                </li>
                            </ul>
                            <div class="menu-bar">
                                <ul class="menu-links" style="max-height: 400px; display: none;">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li class="hoverTrigger"><a href="javascript:void(0)">Submenu<i
                                                class="fa fa-angle-down fa-indicator"></i>
                                            <div class="mobileTriggerButton"></div>
                                        </a>
                                        <ul class="drop-down-multilevel effect-expand-top"
                                            style="transition: all 400ms ease 0s;">
                                            <li class="hoverTrigger"><a href="javascript:void(0)">First
                                                    <div class="mobileTriggerButton"></div>
                                                </a>
                                            </li>
                                            <li class="hoverTrigger"><a href="javascript:void(0)">Second <i
                                                        class="ti-plus fa-indicator"></i>
                                                    <div class="mobileTriggerButton"></div>
                                                </a>
                                                <ul class="drop-down-multilevel effect-expand-top"
                                                    style="transition: all 400ms ease 0s;">
                                                    <li><a href="blog-grid-2-column.html"> First </a></li>
                                                    <li><a href="blog-grid-3-column.html"> Second </a></li>
                                                    <li><a href="blog-grid-2-column-left-sidebar.html">Third</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="search-cart">
                                    <div class="search">
                                        <a class="search-btn not_click" href="javascript:void(0);"></a>
                                        <div class="search-box not-click">
                                            <form action="search.html" method="get">
                                                <input type="text" class="not-click form-control" name="search"
                                                       placeholder="Search.." value="">
                                                <button class="search-button" type="submit"><i
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

{{-- must be removed --}}
<section class="slider-parallax popup-video-banner bg-overlay-black-50 parallax"
         style="background: url(images/bg/03.jpg);">
    <div class="slider-content-middle">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="slider-content text-start">
                        <p class="text-white mt-20">Flexible. Stunning. Lightweight.</p>
                        <h1 class="text-white">We're the <span class="theme-color"> Secution GmbH </span> <br> Your
                            Business.
                            Our Solutions.</h1>
                        <div class="mt-20">
                            <a class="button" href="#"> read more </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="scroll-down move" title="Scroll Down" href="#about-us"><i></i></a>
</section>
