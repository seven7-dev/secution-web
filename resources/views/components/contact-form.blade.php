<section class="page-section-ptb contact-2">
    <div class="container">
    <div class="row justify-content-center text-center mb-50">
    <div class="col-md-8">
        <div class="section-title">
        <h6>let's work together</h6>
         <h2 class="title-effect">Contact Us</h2>
         <p>It would be great to hear from you! If you got any questions.</p>
         </div>
     </div>
     </div>
    <div class="row">
    <div class="col-lg-12">
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
  </section>