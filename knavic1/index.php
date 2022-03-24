<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="we are manufacturer of die punches, die springs and mould accesories and many others mechanical tools. contact on contact@knavictools.com">
    
    <!-- Title -->
    <title>Knavic Tools</title>
 
    <!-- Favicon -->
    <link rel="icon" href="./logo/main.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">


</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div>
    </div>

                           


   <?php include 'header.php'; ?>
    <!-- ***** Welcome Area Start ***** -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide">
                <!-- Background Curve -->
                <div class="background-curve">
                    <img src="./img/core-img/curve-1.png" alt="">
                </div>

                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-text">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">Knavic tools </h2>
                                    <h5 data-animation="fadeInUp" data-delay="400ms">This Website is under construction. <br>Scroll down to contact us</h5>
                                    
                                </div>
                            </div>
                            <!-- Welcome Thumbnail -->
                            <div class="col-12 col-md-6">
                                <div class="welcome-thumbnail">
                                    <img src="./img/1.png" alt="" data-animation="slideInRight" data-delay="400ms">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

            

        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

   
   

    <!-- ***** Services Area Start ***** -->
    <section class="uza-services-area section-padding-80-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Service Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-service-area mb-80">
                        <!-- Service Icon -->
                        <div class="service-icon">
                            <i class="icon_cone_alt"></i>
                        </div>
                        <h5>Individual Configuration</h5>
                        <p>Our strength is the individual requests from our customers. We produce parts to customer design.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-service-area mb-80">
                        <!-- Service Icon -->
                        <div class="service-icon">
                            <i class="icon_piechart"></i>
                        </div>
                        <h5>Compititive Price</h5>
                        <p>We are based in India. price is 20 to 50% lower then western countries.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-service-area mb-80">
                        <!-- Service Icon -->
                        <div class="service-icon">
                            <i class="icon_easel"></i>
                        </div>
                        <h5>Quick Response</h5>
                        <p>After we got inquiry, our team will review your requirments and provide you a quotation as soon as possible.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ***** Services Area End ***** -->

    <!-- ***** Portfolio Area Start ***** -->
    <section class="uza-portfolio-area section-padding-80">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Our Products</h2>
                        <p>We stay on top of our industry by being experts in yours.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <!-- Portfolio Slides -->
                <div class="portfolio-sildes owl-carousel">

                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="./images/slider11.jpg" alt="">
                        <div class="overlay-effect">
                            <h4>All types Die Punch</h4> 
                        </div>
                    </div>
                     <div class="single-portfolio-slide">
                        <img src="./images/slider22.jpg" alt="">
                        <div class="overlay-effect">
                            <h4>All types Die springs</h4> 
                        </div>
                    </div>
                     <div class="single-portfolio-slide">
                        <img src="./images/slider33.jpg" alt="">
                        <div class="overlay-effect">
                            <h4>Mould and Parts</h4> 
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>

        <br><br><br><br><br><br>

        <!-- Border -->
        <div class="container">
            <div class="border-line"></div>
        </div>

        <!-- Background Curve -->
        <div class="portfolio-bg-curve">
            <img src="./img/core-img/curve-3.png" alt="">
        </div>
    </section>
    <!-- ***** Portfolio Area End ***** -->

    
    <!-- ***** Newsletter Area Start ***** -->
    <section class="uza-newsletter-area">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <!-- Newsletter Content -->
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="nl-content mb-80">
                        <h2>Subscribe to our Newsletter</h2>
                        <p>Subscribe our newsletter gor get notification about new updates, etc...</p>
                    </div>
                </div>
                <!-- Newsletter Form -->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="nl-form mb-80">
                        <form action="https://knavictools.com/" method="POST" >
                            <input type="email" name="nl-email" value="" placeholder="Your Email" required>
                            <button type="submit">Subscribe</button>
                        </form>
                            <?php

                        // Please specify your Mail Server - Example: mail.example.com.
                      
                        

                       
                        if(isset($_POST["nl-email"]))  
                         {  
                        ini_set( 'display_errors', 1 );
                        error_reporting( E_ALL );
                        $to = "contact@knavictools.com";
                        $subject = "Subscribe Newsletter";
                        $txt = $_POST["nl-email"];
                       

                        mail($to,$subject,$txt);
                        
                        echo '<script>alert("You subscribed successfully.")</script>';

                         }
                        ?>
                    </div>
                </div>
            </div>
            <!-- Border Bottom -->
            <div class="border-line"></div>
        </div>
    </section>
    <!-- ***** Newsletter Area End ***** -->

     <!-- ***** Contact Area Start ***** -->
    <section class="uza-contact-area section-padding-80">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Contact Form -->
                <div class="col-12 col-lg-8">
                    <div class="uza-contact-form mb-80">
                        <div class="contact-heading mb-50">
                            <h4>Thank you for your interest. <br>Please fill out the form below to inquire about our work.</h4>
                        </div>
                        <form action="https://knavictools.com/" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mb-30" name="full-name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control mb-30" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mb-30" name="phone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mb-30" name="company" placeholder="Organization">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control mb-30" name="message" rows="8" cols="80" placeholder="Message" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn uza-btn btn-3 mt-15">Contact Us</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <?php
                        if(isset($_POST["full-name"]))  
                         {  
                            ini_set( 'display_errors', 1 );
                        error_reporting( E_ALL );
                        $to = "sales@knavictools.com";
                        $subject = "contact someone";
                        $txt = $_POST["full-name"].' email: '.$_POST["email"].' phone: '.$_POST["phone"].' company: '.$_POST["company"].' message: '.$_POST["message"];
                        error_reporting(E_ERROR | E_PARSE);
                        
                        mail($to,$subject,$txt);
                        
                        echo '<script>alert("Your data submited successfully.")</script>';

                         }
                        ?>

                <!-- Single Contact Card -->
                <div class="col-12 col-lg-3">
                    <div class="contact-sidebar-area mb-80">
                        <!-- Single Sidebar Area -->
                        <div class="single-contact-card mb-50">
                            <h4>Contact Us</h4>
                            <a href="tel:+919978859702"><h3>(+91) 99788 59702</h3></a>
                            <a href="mailto: contact@knavictools.com"><h3>sales@knavictools.com</h3></a>
                            <h6>A-03 Golden city, Kadi-sujatpura road, Kadi, Mehsana, Gujarat, India.<br> Pin code: 382715 </h6>
                            
                            <h6>Mon - Fri: 9:00 - 19:00</h6>
                            <br><br>
                            <div class="login-register-btn mx-3">
                            <a href="privacy.html">Privacy Policies</a>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>

            
        </div>
    </section>
    <!-- ***** Contact Area End ***** -->


    <!-- ******* All JS Files ******* -->
    <!-- jQuery js -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js -->
    <script src="js/uza.bundle.js"></script>
    <!-- Active js -->
    <script src="js/default-assets/active.js"></script>


</body>

</html>