<section class="white-bg contact-3 clearfix o-hidden">
    <div class="container-fluid pos-r">
        <div class="row row-eq-height full-height">
            <div class="col-xl-6 col-lg-6 map-side g-map" id="map" data-type='black'>
                <div class="contact-map">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-5">
                <div class="contact-3-info page-section-ptb">
                    <div class="clearfix">
                        <div class="section-title mb-0">
                            <h6>If you got any questions </h6>
                            <h2 class="title-effect">Contact Us</h2>
                        </div>
                        <p class="mb-50">It would be great to hear from you! If you got any questions, please do not
                            hesitate to send us a message. We are looking forward to hearing from you! We reply within
                            <span class="tooltip-content theme-color" title="Mon-Fri 10am–7pm (GMT +1)"
                                data-bs-toggle="tooltip" data-bs-placement="top"> 24 hours!</span></p>
                        <div id="formmessage">Success/Error Message Goes Here</div>
                        <form id="contactform" method="post" action="php/contact-form.php">
                            <div class="contact-form clearfix">
                                <div class="section-field">
                                    <input id="name" type="text" placeholder="Name*" class="form-control"
                                        name="name">
                                </div>
                                <div class="section-field">
                                    <input type="email" placeholder="Email*" class="form-control" name="email">
                                </div>
                                <div class="section-field">
                                    <input type="text" placeholder="Phone*" class="form-control" name="phone">
                                </div>
                                <div class="section-field textarea">
                                    <textarea class="input-message form-control" placeholder="Comment*" rows="7" name="message"></textarea>
                                </div>
                                <!-- Google reCaptch-->
                                <!-- <div class="g-recaptcha section-field clearfix" data-sitekey="6LfNmS0UAAAAAO_ZVFQoQmkGPMlQXmKgVbizHFoq"></div> -->
                                <input type="hidden" name="action" value="sendEmail" />
                                <button id="submit" name="submit" type="submit" value="Send"
                                    class="button"><span> Send message </span> <i
                                        class="fa fa-paper-plane"></i></button>
                            </div>
                        </form>
                        <div id="ajaxloader" style="display:none"><img class="mx-auto mt-30 mb-30 d-block"
                                src="images/pre-loader/loader-02.svg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
