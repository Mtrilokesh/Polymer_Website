<!DOCTYPE html>
<html lang="en">
 <?Php
 include("includes/header.php")?>

        <!-- Start Page Banner Area -->
        <div class="page-banner-area">
            <div class="container">
                <div class="single-page-banner-content">
                    <h1>Contact Us</h1>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->

        <!-- Start Contact Area -->
        <div class="contact-area pt-100 pb-100">
            <div class="container">
                <div class="section-title">
                    <span class="top-title">Send Message</span>
                    <h2>Don't Hesitate To Contact Us</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-contact-item">
                            <div class="contact-text">
                                <div class="contact-icon">
                                    <i class="ri-map-pin-fill"></i>
                                </div>
                                <h3>Our Location</h3>
                                <p>D.no.05-055/15p OWNERS SOCIETY PHASE-2DOOLAPALLY ROAD.IDA JEEDIMETLA HYD.500055</p>
                            </div>
                            <div class="contact-text">
                                <div class="contact-icon">
                                    <i class="ri-mail-line"></i>
                                </div>
                                <h3>Sent Us Email</h3>
                                <p><a href="mailto:srivigneshwarapolymers@gmails.com">srivigneshwarapolymers@gmails.com</span></a></p>
                            </div>
                            <div class="contact-text">
                                <div class="contact-icon">
                                    <i class="ri-phone-line"></i>
                                </div>
                                <h3>Phone Number</h3>
                                <p><a href="tel:+918978088118">8978088118</a></p>
                           
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="contact-form"> 
                            <form > 
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                                            <!-- <div class="help-block with-errors"></div>  -->
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required data-error="Please enter your email">
                                            <!-- <div class="help-block with-errors"></div> -->
                                        </div>
                                    </div> 

                                    <div class="col-lg-6 col-md-6">  
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" placeholder="Phone" required data-error="Please enter your number" class="form-control">
                                            <!-- <div class="help-block with-errors"></div> -->
                                        </div>
                                    </div> 

                                    <div class="col-lg-6 col-md-6">  
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="Subject" placeholder="Subject" required data-error="Please enter your subject" class="form-control">
                                            <!-- <div class="help-block with-errors"></div> -->
                                        </div>
                                    </div>  
                    
                                    <div class="col-lg-12">
                                        <div class="form-group"> 
                                            <textarea name="message" class="form-control message" id="message" cols="30" rows="3" placeholder="Message" required data-error="Write your message"></textarea>
                                            <!-- <div class="help-block with-errors"></div> -->
                                        </div>
                                    </div>

                                   

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="btn">    
                                            Send Message
                                        </button>
                                        <div id="#" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <!-- End Contact Area -->

        
<?php
include("includes/footer.php")
?>