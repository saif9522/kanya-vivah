<?php include 'header.php'; ?>
  <!-- Header Section End -->  
  <div class="breadcrumb-wrap">
                    <div class="container">
                        <img src="assets/img/shape-7.png" alt="Image" class="br-shape-one">
                        <img src="assets/img/shape-8.png" alt="Image" class="br-shape-two">
                        <img src="assets/img/shape-7.png" alt="Image" class="br-shape-three">
                        <img src="assets/img/shape-8.png" alt="Image" class="br-shape-four">
                        <div class="breadcrumb-title">
                            <h2>Donate Now</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="index.php">Home </a></li>
                                <li>Donate Now</li>
                            </ul>
                        </div>
                    </div>
                </div>


<section class="contact-us-wrap ptb-100">
                    <div class="container">
                        <div class="section-title style1 text-center mb-30">
                           
                            <h2>Support Us with Your Donation</h2>
                        </div>
                        <div class="row">
                        <div class="col-xl-2 col-lg-12 col-12"></div>
                            <div class="col-xl-8 col-lg-7 col-12">
                                <div class="contact-form">
                                    <form class="form-wrap" id="contactForm" novalidate="true">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="form-label"> Full Name</label>
                                                    <input type="text" name="name" placeholder="Name*" id="name" required="" data-error="Please enter your name">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="" class="form-label"> Email Id</label>
                                                    <input type="email" name="email" id="email" required="" placeholder="Email*" data-error="Please enter your email">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="" class="form-label"> Phone Number</label>
                                                    <input type="number" name="phone" id="phone" required="" placeholder="Phone Number*" data-error="Please enter your email">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="" class="form-label"> Donate Amount (INR)</label>
                                                    <input type="number" name="msg_subject" placeholder="Enter Amount in Rupees  *" id="enter-amount-in-rupees" required="" data-error="Enter Amount in Rupees">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                           
                                           
                                            <div class="col-md-12 d-flex justify-content-center">
                                                <button type="submit" class="btn style1 disabled">Donate Now</button>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    
                        </div>
                    </div>
                </section>

                <?php include 'footer.php'; ?>