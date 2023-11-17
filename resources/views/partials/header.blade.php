<header id="header" class="header default fullWidth">
    <div class="topbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 xs-mb-10">
                    <div class="topbar-call text-center text-md-start">
                        <ul>
                            <li><i class="fa fa-envelope-o theme-color"></i> <a href="mailto:{{ env('APP_MAIL') }}">
                                    <span>{{ env('APP_MAIL') }} </span> </a>
                            <li><i class="fa fa-phone"></i> <a
                                    href="tel:{{ \App\View\Helpers\Helper::sanitizePhoneNumber(env('APP_PHONE')) }}">
                                    <span>{{ env('APP_PHONE') }} </span> </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="topbar-social text-center text-md-end">
                        <ul>
                            <li><a href="{{ env('APP_INSTAGRAM') }}" target="_blank"><span
                                        class="ti-instagram"></span></a></li>
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
                                    <a href="{{ app('Helper')->getRouteHref('home') }}"><img
                                            id="logo_img" src="{{ asset('images/logo.png') }}" alt="logo">
                                    </a>
                                </li>
                            </ul>
                            <div class="menu-bar">
                                <ul class="menu-links">
                                    <li><a href="{{ app('Helper')->getRouteHref('home') }}">{{ app('Helper')->getPageTitleByRouteName('home') }}</a>
                                    </li>
                                    <li><a href="{{ app('Helper')->getRouteHref('about-us') }}">{{ app('Helper')->getPageTitleByRouteName('about-us') }}</a></li>
                                    <li><a
                                            href="{{ app('Helper')->getRouteHref('services') }}">{{ app('Helper')->getPageTitleByRouteName('services') }}</a>
                                    </li>
                                    <li><a
                                            href="{{ app('Helper')->getRouteHref('testimonials') }}">{{ app('Helper')->getPageTitleByRouteName('testimonials') }}</a>
                                    </li>
                                    <li><a
                                            href="{{ app('Helper')->getRouteHref('contact') }}">{{ app('Helper')->getPageTitleByRouteName('contact') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </nav>
    </div>
</header>
