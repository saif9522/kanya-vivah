<?php include 'header.php'; ?>
  <!-- Header Section End -->  
  <div class="breadcrumb-wrap">
                    <div class="container">
                        <img src="assets/img/shape-7.png" alt="Image" class="br-shape-one">
                        <img src="assets/img/shape-8.png" alt="Image" class="br-shape-two">
                        <img src="assets/img/shape-7.png" alt="Image" class="br-shape-three">
                        <img src="assets/img/shape-8.png" alt="Image" class="br-shape-four">
                        <div class="breadcrumb-title">
                            <h2>Contact Us</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="index.php">Home </a></li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>


<section class="contact-us-wrap ptb-100">
                    <div class="container">
                        <div class="section-title style1 text-center mb-30">
                            <span>Contact Us</span>
                            <h2>Connect with Kanya Vivah & Vikash Society</h2>
                        </div>
                        <div class="row">
                            <div class="col-xl-8 col-lg-7 col-12">
                                <div class="contact-form">
                                    <form class="form-wrap" id="contactForm" novalidate="true">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="name" placeholder="Name*" id="name" required="" data-error="Please enter your name">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" name="email" id="email" required="" placeholder="Email*" data-error="Please enter your email">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="number" name="phone" id="phone" required="" placeholder="Phone Number*" data-error="Please enter your email">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="msg_subject" placeholder="Subject*" id="msg_subject" required="" data-error="Please enter your subject">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group v1">
                                                    <textarea name="message" id="message" placeholder="Your Messages.." cols="30" rows="10" required="" data-error="Please enter your message"></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check checkbox">
                                                    <input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input" type="checkbox" id="gridCheck" required="">
                                                    <label class="form-check-label" for="gridCheck">
                                                        I agree to the <a class="link style2" href="terms-of-service.html">Terms &amp; Conditions</a> and <a class="link style2" href="privacy-policy.html">Privacy Policy</a>
                                                    </label>
                                                    <div class="help-block with-errors gridCheck-error"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn style1 disabled">Send Message</button>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5 col-md-12">
                                <div class="contact-item-wrap">
                                    <div class="contact-item">
                                        <span class="contact-icon">
                                            <i class="ri-map-pin-fill"></i>
                                        </span>
                                        <div class="contact-info">
                                            <h3>Our Location</h3>
                                            <p>Ramdhanpur, Bairagi Road Near Harijan Temple, Gaya-823001 (Bihar)
                                            </p>
                                        </div>
                                    </div>
                                    <div class="contact-item">
                                        <span class="contact-icon">
                                            <i class="ri-mail-fill"></i>
                                        </span>
                                        <div class="contact-info">
                                            <h3>Send An Email</h3>
                                            <a href="mailto:kanyavivah327@gmail.com">kanyavivah327@gmail.com</a>
                                            <!-- <a href="mailto:support@wazo.com">support@wazo.com</a> -->
                                        </div>
                                    </div>
                                    <div class="contact-item">
                                        <span class="contact-icon">
                                            <i class="ri-phone-fill"></i>
                                        </span>
                                        <div class="contact-info">
                                            <h3>Phone Number</h3>
                                            <a href="tel:111111111">+91 111 111 1111</a>
                                            <a href="tel:111111111">+91 111 111 1111</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <?php include 'footer.php'; ?>