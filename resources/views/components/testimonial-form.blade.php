<section class="leave-your-testimonial gray-bg contact-3 page-section-ptb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="contact-3-info text-center">
            <div class="clearfix">
              <div class="section-title mb-0">
                <h2 class="title-effect">Leave Your Testimonial!</h2>
              </div>
              <p class="mb-50">If you have had an experience with Webster and you love webster please share it here. We would love to hear your <span class="tooltip-content theme-color" title="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="This will help"> thoughts and feelings.</span></p>
              <div id="formmessage">Success/Error Message Goes Here</div>
                  <form id="contactform" role="form" method="post" action="php/contact-form.php">
                    <div class="contact-form clearfix">
                      <div class="section-field">
                        <input id="name" type="text" placeholder="Name*" class="form-control" name="name">
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
                      <div class="g-recaptcha section-field clearfix" data-sitekey="6LfNmS0UAAAAAO_ZVFQoQmkGPMlQXmKgVbizHFoq"></div>
                      <div class="section-field submit-button">
                        <input type="hidden" name="action" value="sendEmail">
                        <button id="submit" name="submit" type="submit" value="Send" class="button"><span> Send message </span> <i class="fa fa-paper-plane"></i></button>
                      </div>
                    </div>
                  </form>
                     <div id="ajaxloader" style="display:none"><img class="mx-auto mt-30 mb-30 d-block" src="{{ asset('images/pre-loader/loader-02.svg') }}" alt=""></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>