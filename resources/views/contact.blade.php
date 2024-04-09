@extends('layouts.app')
@section('meta_title','contactus')
@section('meta_keywords','contactus')
@section('meta_description','contactus')
@section('content') 
<section class="map py-0">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13724.7713490635!2d76.825735!3d30.684850000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x82491e1ebe2879ce!2sJanus%20Biotech%20(I)%20Pvt%20Ltd!5e0!3m2!1sen!2sus!4v1670409968773!5m2!1sen!2sus" height="620" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <div class="map-container">
        <div class="contact-panel p-0">
          <div class="panel-header">
            <h3 class="panel-title color-white mb-0">Offices and Main Labs</h3>
          </div>
          <div class="accordion" id="accordion">
            <div class="accordion-item opened">
              <div class="accordion-header" data-toggle="collapse" data-target="#collapse1">
                <a class="accordion-title" href="#">Corporate Office</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse1" class="collapse show" data-parent="#accordion">
                <div class="accordion-body">
                  <ul class="contact-list list-unstyled mb-0">
                    <li>Phone: +91-7877000013</li>
                    <li>Email: sales@janusbiotech.com</li>
                    <li>Address: Plot No-84, Raipur Kalan, Chandigarh-160102</li>
                    <li>Hours: Mon-Fri: 10am – 6pm</li>
                    
                  </ul>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            <div class="accordion-item">
              <div class="accordion-header" data-toggle="collapse" data-target="#collapse2">
                <a class="accordion-title" href="#">Unit</a>
              </div><!-- /.accordion-item-header -->
              <div id="collapse2" class="collapse" data-parent="#accordion">
                <div class="accordion-body">
                  <ul class="contact-list list-unstyled mb-0">
                   
                    <li>Unit-1: Village Ogli, Kala Amb,Himachal Pradesh 173030</li>
                     <li>Unit-2:</li>
                    
                  </ul>
                </div><!-- /.accordion-item-body -->
              </div>
            </div><!-- /.accordion-item -->
            
          </div><!-- /.accordion -->
        </div>
      </div><!-- /.map-container -->
    </section>
    <section class="contact-layout1">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7">
            <div class="heading-layout2 mb-50">
              <h2 class="heading-subtitle">Contact Us And We Will Respond Within The Next Two Working Days</h2>
              <h3 class="heading-title">Get In Touch With Your Nearest Local Health Business Sales Executive
              </h3>
            </div>
          </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="text-block">
              <p class="text-block-desc">Depending on the nature of your enquiry, the customer care centre staff will
                then
                distribute your request for consultation to the appropriate Laboratory Medicine discipline.</p>
              <p class="text-block-desc">A member of the Medical/Scientific Staff will get back to the requesting
                healthcare provider within one business day.
              </p>
            </div>
            
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-12 col-lg-8">
            <form class="contact-panel-form" method="post" action="https://7oroof.com/demos/provetta/assets/php/contact.php" id="contactForm">
              <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                      required>
                  </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" id="contact-email" name="contact-email"
                      required>
                  </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone" id="contact-Phone" name="contact-phone"
                      required>
                  </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-12">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Additional Details" id="contact-message"
                      name="contact-message"></textarea>
                  </div>
                  <button type="submit" class="btn btn-secondary  btn-block btn-xhight mt-10">
                    <span>Submit Request</span> <i class="icon-arrow-right"></i>
                  </button>
                  <div class="contact-result"></div>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
            </form>
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact layout 1 -->
@endsection