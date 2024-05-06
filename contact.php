<?php include 'header.php'; ?>
<!--
      ============================
      Google Maps Section
      ============================
      -->
      <section class="map">
        <iframe class="map-gray" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3915.67106801866!2d76.9795382740913!3d11.063269353839214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8f7deb4055555%3A0xa2652b95f9e0da82!2sUnicon%20Engineers!5e0!3m2!1sen!2sin!4v1714114251847!5m2!1sen!2sin" width="600" height="450" style="border:0;"></iframe>
      </section> 
      <!--
      ============================
      Contact #3 Section
      ============================
      -->
      <section class="contact contact-3" id="contact">
        <div class="container"> 
          <div class="row">
            <div class="contact-panel contact-panel-3">
              <div class="row">
                <div class="col-12 col-lg-7 col-xl-7 col-xxl-8">
                  <div class="contact-card">
                    <div class="contact-body">
                      <h5 class="card-heading">get in touch</h5>
                      <form class="contactForm" method="post" action="assets/php/contact.php">
                        <div class="row">
                          <div class="col-12 col-md-6">
                            <input class="form-control" type="text" id="contact-name" name="contact-name" placeholder="Name" required=""/>
                          </div>
                          <div class="col-12 col-md-6">
                            <input class="form-control" type="text" id="designation" name="contact-email" placeholder="Designation" required=""/>
                          </div>
                          <div class="col-12 col-md-6">
                            <input class="form-control" type="text" id="organisation" name="contact-phone" placeholder="Organisation" required=""/>
                          </div>
                          <div class="col-12 col-md-6">
                            <input class="form-control" type="text" id="contact-email" name="contact-email" placeholder="Email Address" required=""/>
                          </div>
                          <div class="col-12 col-md-6">
                            <input class="form-control" type="text" id="contact-phone" name="contact-phone" placeholder="Phone Number" required=""/>
                          </div>
                          <div class="col-12 col-md-6">
                            <select class="form-control" id="select-1">
                              <option value="s1">Area of Interest</option>
                              <option value="s2">Air Pollution Control Equipments</option>
                              <option value="s3">Material Handling</option>
                              <option value="s4">Process Equipments</option>
                              <option value="s5">Inspection & Testing</option>
                              <option value="s6">Project Management</option>
                              <option value="s7">Plant Maintenance & Spares</option>
                            </select>
                          </div>
                          <div class="col-12 col-md-12">
                            <select class="form-control" id="select-2">
                              <option value="s1" selected>Select Equipment</option>
                              <option value="s2">Spares for ESP</option>
                              <option value="s3">Spares for Baghouse</option>
                              <option value="s4">Residual Life Assessment</option>
                              <option value="s5">Shut Down Maintenance</option>
                              <option value="s6">Annual Maintenance</option>
                              <option value="s7">Spares of Cement Plant</option>
                            </select>
                          </div>
                          <div class="col-12">
                            <textarea class="form-control" id="contact-infos" placeholder="Message" name="contact-infos" cols="30" rows="10"></textarea>
                          </div>
                          <div class="col-12">
                            <button class="btn btn--secondary-dark justify-content-between"> Send Enquiry <i class="icon-arrow-right"></i></button>
                          </div>
                          <div class="col-12">
                            <div class="contact-result"></div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- End .contact-body -->
                  </div>
                </div>
                <div class="col-12 col-lg-5 col-xl-5 col-xxl-4 img-card-holder">
                  <div class="img-card bg-overlay bg-overlay-theme-secondary">
                    <div class="bg-section"><img src="assets/images/contact/2.jpg" alt="image"/></div>
                    <div class="card-content">
                      <div class="content-top">
                        <h2 class="heading-title">We Help to Product the Environment for a Greener Tomorrow</h2>
                      </div>
                      <div class="content-bottom">
                        <ul class="list-unstyled contact-infos"> 
                          <li class="contact-info"><i class="fas fa-phone-alt"></i>
                            <p>Emergency Line: <a href="tel:+[91]94877 44417"> +[91]94877 44417</a></p>
                          </li>
                          <li class="contact-info"><i class="fas fa-map-marker-alt"></i>
                            <p>Location: Bharathi Road, Chinnavedampatty (PO), Coimbatore - 641 049, Tamil Nadu, India.</p>
                          </li>
                          <li class="contact-info"><i class="fas fa-envelope"></i>
                            <p>Email: <a href="mailto:info@uniconinter.com">info@uniconinter.com</a></p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End .row-->
            </div>
            <!-- End .contact-panel-->
          </div>
          <!-- End .row-->
        </div>
        <!-- End .container-->
      </section>
<?php include 'footer.php'; ?>