
  <?php include 'header.php';?>

  
  <!-- Content -->
  <div id="content"> 
    
    <!-- Contact Us -->
    <section class="p-t-b-150"> 
      <!-- CONTACT FORM -->
      <div class="container"> 
        <!-- Tittle -->
        <div class="heading-block">
          <h4>CONTACT US</h4>
          <hr>
          <span>Thank you for considering HMS for your healthcare needs. We are here to assist you and provide the best possible care. Please find our contact information below:. </span> </div>
        <div class="contact">
          <div class="contact-form"> 
            <!-- FORM  -->
            <form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
              <div class="row">
                <div class="col-md-6">
                  <ul class="row">
                    <li class="col-sm-12">
                      <label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="* Name">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="* Email">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>
                        <input type="text" class="form-control" name="company" id="company" placeholder="Phone">
                      </label>
                    </li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="row">
                    <li class="col-sm-12">
                      <label>
                        <input type="text" class="form-control" name="website" id="website" placeholder="Department">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>
                        <textarea class="form-control" name="message" id="message" rows="5" placeholder="* Message"></textarea>
                      </label>
                    </li>
                    <li class="col-sm-12 no-margin">
                      <button type="submit" value="submit" class="btn" id="btn_submit" onClick="proceed();">SEND MESSAGE</button>
                    </li>
                  </ul>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    
    <!-- BOXES -->
    <section class="contact-box">
      <div class="container">
        <div class="row"> 
          
          <!-- Shop Location -->
          <div class="col-md-8">
            <div class="boxes-in">
              <h6>HOSPITAL INFO</h6>
              <ul class="location">
                <li> <i class="fa fa-location-arrow"></i>
                  <p>Londrina Paraná, 
                    Brazil</p>
                </li>
                <li> <i class="fa fa-phone"></i>
                  <p>1111 222 33333</p>
                  <p>1-222-333-4444</p>
                </li>
                <li> <i class="fa fa-envelope"></i>
                  <p>Matheus@sample.com</p>
                  <p>hms@sample.com</p>
                </li>
                <li> <i class="fa fa-clock-o"></i>
                  <p>Mon-Fri: 9AM - 8PM</p>
                  <p>Sat-Sun: 9AM - 8PM</p>
                </li>
              </ul>
            </div>
          </div>
          
          <!-- NEWSLETTER -->
          <div class="col-md-4">
            <div class="boxes-in">
              <h6>SOCIAL LINKS</h6>
              
              <!--======= FOOTER ICONS =========-->
              <ul class="social_icons">
                <li class="facebook"><a href="#."> <i class="fa fa-facebook"></i></a></li>
                <li class="twitter"><a href="#."> <i class="fa fa-twitter"></i></a></li>
                <li class="googleplus"><a href="#."> <i class="fa fa-google"></i></a></li>
                <li class="skype"><a href="#."> <i class="fa fa-skype"></i></a></li>
                <li class="pinterest"><a href="#."> <i class="fa fa-pinterest"></i></a></li>
                <li class="dribbble"><a href="#."> <i class="fa fa-dribbble"></i></a></li>
                <li class="flickr"><a href="#."> <i class="fa fa-flickr"></i></a></li>
                <li class="behance"><a href="#."> <i class="fa fa-behance"></i></a></li>
                <li class="linkedin"><a href="#."> <i class="fa fa-linkedin"></i></a></li>
                <li class="youtube"><a href="#."> <i class="fa fa-youtube"></i></a></li>
                <li class="instagram"><a href="#."> <i class="fa fa-instagram"></i></a></li>
                <li class="stumbleupon"><a href="#."> <i class="fa fa-stumbleupon"></i></a></li>
                <li class="soundcloud"><a href="#."> <i class="fa fa-soundcloud"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- MAP -->
    <section class="map-block margin-top-100">
      <div class="map-wrapper" id="map-canvas" data-lat="23.740051" data-lng="90.371239" data-zoom="13" data-style="1"></div>
      <div class="markers-wrapper addresses-block"> <a class="marker" data-rel="map-canvas" data-lat="23.740051" data-lng="90.371239" data-string="Medical Hospital"></a> </div>
    </section>
  </div>
  
  <!-- Footer -->

  <?php include 'footer.php';?>
