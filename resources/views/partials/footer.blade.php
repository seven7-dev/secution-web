<footer class="footer page-section-pt black-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 sm-mb-30">
                <div class="footer-logo">
                    <img id="logo-footer" class="mb-20" src="../images/logo.png" alt="">
                    <p class="pb-10"> Webster is the most enticing, creative, modern and multipurpose Premium HTML5
                        Template suitable for any business or corporate websites. Build whatever you like with the
                        Webster. It has endless possibilities for creating stunning websites no matter what type of
                        business is!</p>
                </div>
                <div class="social-icons color-hover">
                    <ul>
                        <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i> </a></li>
                        <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i> </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 sm-mb-30">
                <div class="footer-useful-link footer-hedding">
                    <h6 class="text-white mb-30 mt-10 text-uppercase">Navigation</h6>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('home') }}">About Us</a></li>
                        <li><a href="{{ route('home') }}">Service</a></li>
                        <li><a href="{{ route('home') }}">Team</a></li>
                        <li><a href="{{ route('home') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 xs-mb-30">
                <div class="footer-useful-link footer-hedding">
                    <h6 class="text-white mb-30 mt-10 text-uppercase">Useful Link</h6>
                    <ul>
                        <li><a href="#">Create Account</a></li>
                        <li><a href="#">Company Philosophy</a></li>
                        <li><a href="#">Corporate Culture</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Client Management</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <h6 class="text-white mb-30 mt-10 text-uppercase">Contact Us</h6>
                <ul class="addresss-info">
                    <li><i class="fa fa-map-marker"></i>
                        <p>{{ env('APP_ADDRESS') }}</p>
                    </li>
                    <li><i class="fa fa-phone"></i> <a href="tel:{{ env('APP_PHONE') }}"> <span>{{ env('APP_PHONE') }} </span> </a> </li>
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
