<footer class="footer page-section-pt black-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 sm-mb-30">
                <div class="footer-logo">
                    <img id="logo-footer" class="mb-20" src="{{ asset('images/logo.png') }}" alt="">
                    <p class="pb-10"> Webster is the most enticing, creative, modern and multipurpose Premium HTML5
                        Template suitable for any business or corporate websites. Build whatever you like with the
                        Webster. It has endless possibilities for creating stunning websites no matter what type of
                        business is!</p>
                </div>
                <div class="social-icons color-hover">
                    <ul>
                        <li class="social-instagram"><a href="{{ env('APP_INSTAGRAM') }}" target="_blank"><i
                                    class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 sm-mb-30">
                <div class="footer-useful-link footer-hedding">
                    <h6 class="text-white mb-30 mt-10 text-uppercase">Navigation</h6>
                    <ul>
                        <li><a href="{{ app('Helper')->getRouteHref('home', app()->getLocale()) }}">Home</a></li>
                        <li><a href="{{ app('Helper')->getRouteHref('about-us', app()->getLocale()) }}">About Us</a>
                        </li>
                        <li><a href="{{ app('Helper')->getRouteHref('services', app()->getLocale()) }}">Services</a>
                        </li>
                        <li><a
                                href="{{ app('Helper')->getRouteHref('testimonials', app()->getLocale()) }}">Testimonials</a>
                        </li>
                        <li><a href="{{ app('Helper')->getRouteHref('contact', app()->getLocale()) }}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 xs-mb-30">
                <div class="footer-useful-link footer-hedding">
                    <h6 class="text-white mb-30 mt-10 text-uppercase">Useful Links</h6>
                    <ul>
                        <li><a href="{{ app('Helper')->getRouteHref('data-privacy', app()->getLocale()) }}">Data Privacy</a></li>
                        <li><a href="{{ app('Helper')->getRouteHref('imprint', app()->getLocale()) }}">Imprint</a></li>
                        <li><a href="{{ app('Helper')->getRouteHref('sitemap', app()->getLocale()) }}">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <h6 class="text-white mb-30 mt-10 text-uppercase">Contact Us</h6>
                <ul class="addresss-info">
                    <li><i class="fa fa-map-marker"></i>
                        <p>{{ env('APP_ADDRESS') }}</p>
                    </li>
                    <li><i class="fa fa-phone"></i> <a
                            href="tel:{{ \App\View\Helpers\Helper::sanitizePhoneNumber(env('APP_PHONE')) }}">
                            <span>{{ env('APP_PHONE') }} </span> </a> </li>
                    <li><i class="fa fa-envelope-o"></i>Email: {{ env('APP_MAIL') }}</li>
                </ul>
            </div>
        </div>
        <div class="footer-widget mt-20">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mt-15"> &copy; Copyright <span id="copyright">{{ date('Y') }}
                        </span> <a href="#"> {{ env('APP_NAME') }} </a> All Rights Reserved </p>
                </div>
            </div>
        </div>
    </div>
</footer>
