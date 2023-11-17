<section class="theme-bg contact-2 clearfix o-hidden">
    <div class="container-fluid pos-r">
        <div class="row">
            <div class="col-lg-6 map map-side map-right" data-type='black'>
                <img src="{{ asset('images/maps/map.png') }}">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-3-info page-section-ptb text-white">
                    <div class="clearfix">
                        <h6 class="text-white">Our Offices</h6>
                        <h2 class="text-white">Contact Info</h2>
                        <p class="mb-50 text-white">It would be great to hear from you! If you got any questions, please
                            do not hesitate to send us a message. We are looking forward to hearing from you! We reply
                            within <span class="tooltip-content-2" data-original-title="Mon-Fri 10am–7pm (GMT +1)"
                                data-bs-toggle="tooltip" data-placement="top"> 24 hours!</span></p>

                        <ul class="addresss-info list-unstyled">
                            <li><i class="ti-map-alt"></i>
                                <p>Address: {{ env('APP_ADDRESS') }}</p>
                            </li>
                            <li><i class="ti-mobile"></i>Phone: {{ env('APP_PHONE') }}</li>
                            <li><i class="ti-email"></i>Email: {{ env('APP_MAIL') }}</li>
                        </ul>
                        <div class="social-icons social-border rounded color-hover mt-50">
                            <ul>
                                <li class="social-instagram"><a href="{{ env('APP_INSTAGRAM') }}" target="_blank"><i
                                            class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
