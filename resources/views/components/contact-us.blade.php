<section id="contact-us" class="resume-contact contact contact-4 gray-bg o-hidden">
    <div class="container-fluid p-0 pos-r">
        <div class="row">
            <div class="col-lg-4 map map-right map-side" data-type="black" style="overflow: hidden;">
                <img src="{{ asset('images/maps/map.png') }}">
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-form-main">
                    <div class="section-title text-start">
                        <h3>Do You Want To Contact Me?</h3>
                        <p class="mb-30">It would be great to hear from you! If you got any questions, please do not
                            hesitate to send me a message. I am looking forward to hearing from you!</p>
                    </div>
                    <div id="formmessage" style="display:block">
                        <div class="success" style="display:none">Success</div>
                        <div class="error" style="display:none">Error</div>
                    </div>
                    <form class="contactus-form" method="post" action="{{ route('contact.submit') }}">
                        <div class="contact-form clearfix">
                            <div class="section-field">
                                <input id="name" type="text" placeholder="Name*" class="form-control"
                                    name="name" required>
                            </div>
                            <div class="section-field">
                                <input type="email" placeholder="Email*" class="form-control" name="email" required>
                            </div>
                            <div class="section-field">
                                <input type="text" placeholder="Phone*" class="form-control" name="phone" required>
                            </div>
                            <div class="section-field">
                                <input id="subject" type="text" placeholder="Subject*" class="form-control"
                                    name="subject" required>
                            </div>
                            <div class="section-field textarea">
                                <textarea class="input-message form-control" placeholder="Comment*" rows="7" name="msg" required></textarea>
                            </div>
                            <!-- Google reCaptch-->
                            <input type="text" name="company">
                            <button id="submit" name="submit" type="submit" value="Send"
                                class="button button-border white mb-20"><span> Send message </span> <i
                                    class="fa fa-paper-plane"></i></button>
                        </div>
                    </form>
                    <div id="ajaxloader" style="display:none"><img class="mx-auto mt-30 mb-30 d-block"
                            src="{{ asset('images/pre-loader/loader-02.svg') }}" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</section>
