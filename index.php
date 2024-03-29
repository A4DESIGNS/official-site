<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>A4 DESIGNS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
-->
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


    <link href="assets/css/main.css" rel="stylesheet">

    <!-- Google Ads -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1142044000739913" crossorigin="anonymous"></script>

    <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>

        <!-- Sweet Alert Js -->
        <script src="assets/vendor/sweetalert/sweetalert.min.js"></script>


</head>

<body>
        <?php
            if(isset($_SESSION['status']))
            {
        ?> 
            <script> swal("Good job!", "<?php echo($_SESSION['status']) ?>", "success"); </script>
        <?php
                unset($_SESSION['status']);
            }
            else if(isset($_SESSION['error']))
            {
        ?>
            <script> swal("Ohh Nooo!", "<?php echo($_SESSION['error']) ?>", "error"); </script>
        <?php
                unset($_SESSION['error']);
            }
        ?>
    <!-- 

  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div> -->
    <div class="social-links d-none d-md-flex align-items-center paddingforicons">
        <span>Follow Us On : </span>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="telegram"><i class="bi bi-telegram"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="google-email"><i class="bi bi-google"></i></a>
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
    </div>
    <style>
        .paddingforicons a {
            padding-left: .5%;
        }
    </style>
    </div>
    </section>
    <!-- End Top Bar -->

    <header id="header" class="header d-flex align-items-center">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">

                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>A4DESIGNS<span>.</span></h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header>



    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Welcome to <span>A4DESIGNS</span></h2>
                    <p>Are You Trying To Build A Website?<br>You Are In The Right Place, Here We Have The Complete Solution For Web Development</p>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
                </div>
            </div>
        </div>

        <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row gy-3 mt-3">

                    <div class="col-xl-4 col-md-5" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-easel"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Web Designing</a></h4>
                        </div>
                    </div>
                    <!--End Icon Box -->

                    <div class="col-xl-4 col-md-5" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-gem"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Web Development</a></h4>
                        </div>
                    </div>
                    <!--End Icon Box -->

                    <div class="col-xl-4 col-md-5" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-geo-alt"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Business Management</a></h4>
                        </div>
                    </div>
                    <!--End Icon Box -->


                </div>
            </div>
        </div>

        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>About Us</h2>
                    <p></p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <h3>We Will Build You, What You Have In Your Mind</h3>

                        <p>A4 DESIGNINS is a fast-growing software company that keeps culture and creativity at the heart of everything we do. </p>
                        <p>Our mission is to help customers unlock their creativity and build exceptional content using our uniquely powerful design platform and our tirelessly helpful support and resources.</p>
                    </div>
                    <div class="col-lg-6">
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1142044000739913" crossorigin="anonymous"></script>
                        <ins class="adsbygoogle" style="display:block" data-ad-format="autorelaxed" data-ad-client="ca-pub-1142044000739913" data-ad-slot="4951921386"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>

                        <amp-ad width="100vw" height="320" type="adsense" data-ad-client="ca-pub-1142044000739913" data-ad-slot="4951921386" data-auto-format="mcrspv" data-full-width="">
                            <div overflow=""></div>
                        </amp-ad>
                    </div>
                </div>
        </section>
        <!-- End About Us Section -->

        <!-- ======= Clients Section ======= -->

        <!-- ======= Stats Counter Section ======= -->
        <section id="stats-counter" class="stats-counter">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4 align-items-center">

                    <div class="col-lg-6">
                        <img src="assets/img/stats-img.svg" alt="" class="img-fluid">
                    </div>

                    <div class="col-lg-6">

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Happy Clients</strong></p>
                        </div>
                        <!-- End Stats Item -->

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Projects</strong></p>
                        </div>
                        <!-- End Stats Item -->

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Hours Of Support</strong></p>
                        </div>
                        <!-- End Stats Item -->

                    </div>

                </div>

            </div>
        </section>
        <!-- End Stats Counter Section -->

        <!-- ======= Our Services Section ======= -->
        <section id="services" class="services sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Services</h2>
                    <p>We Can Provide Many Services To You</p>
                </div>

                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-6 col-md-6">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <i class="bi bi-activity"></i>
                            </div>
                            <h3>Web Development - Static</h3>
                            <p>We Will build Static Websites Such As Personal Websites , Personal Blogs or Any Other Types</p>

                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-6 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-broadcast"></i>
                            </div>
                            <h3>Web Development - Dynamic</h3>
                            <p>We Will Build Dynamic Websites Like , Shopping Sites , Commercial Sites , Educational Sites , Buisness Websites and So On..</p>

                        </div>

                    </div>

                </div>
        </section>
        <!-- End Our Services Section -->




        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio sections-bg">
            <div class="container" data-aos="fade-up">
                <!--
                <div class="section-header">
                    <h2>Portfolio</h2>
                    <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">


                    <div id="portfolio-port" class="row gy-4 portfolio-container">





                          <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Product 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div>
 -->

            </div>
            <!-- End Portfolio Container -->

            </div>
            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Team</h2>
                    <p>We Have A Powerful Team For Our Every Purpose....</p>
                </div>

                <div class="row gy-6">
                    <div class="col-xl-3 col-md-3 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                            <h4>Abin K J</h4>
                            <span>Web Development</span>
                            <div class="social">

                                <a href="mailto:abinra8590@gmail.com"><i class="bi bi-envelope"></i></a>
                                <a href="https://instagram.com/abi._.n_"><i class="bi bi-instagram"></i></a>
                                <!-- <a href=""><i class="bi bi-linkedin"></i></a> -->
                                <a href="https://t.me/mrpops7"><i class="bi bi-telegram"></i></a>
                                <!-- <a href="https://wa.me/+918590814463"><i class="bi bi-whatsapp"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->

                    <div class="col-xl-3 col-md-3 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                            <h4>Ashvant Sunish</h4>
                            <span>Web Designing & Database</span>
                            <div class="social">

                                <a href="mailto:asvantsunish1010@gmail.com"><i class="bi bi-envelope"></i></a>
                                <a href="https://instagram.com/as_official_06"><i class="bi bi-instagram"></i></a>
                                <!-- <a href=""><i class="bi bi-linkedin"></i></a> -->
                                <a href="https://t.me/as_official_06"><i class="bi bi-telegram"></i></a>
                                <!-- <a href="https://wa.me/+918075566324"><i class="bi bi-whatsapp"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->
                </div>

            </div>
        </section>
        <!-- End Our Team Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Pricing</h2>
                    <p>We Will Done Your Work At A Decent Price</p>
                    <span style="color: brown;">*Note : All Prices May Vary According To Your Needs And Budget</span>
                </div>

                <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">

                    <div class="col-lg-4">
                        <div class="pricing-item">
                            <h3>Static Webpage</h3>
                            <center>
                                <p>Basic HTML, CSS, jQuery and responsive webpage</p>
                                <br><br>
                            </center>
                            <div class="icon">
                                <i class="bi bi-box"></i>
                            </div>
                            <h4><sup>₹</sup>3500<span> / Design</span></h4>

                            <div class="text-center"><a href="#" class="buy-btn">Order Now</a></div>
                        </div>
                    </div>
                    <!-- End Pricing Item -->
                    <br>
                    <div class="col-lg-4">
                        <div class="pricing-item">
                            <h3>Dynamic Website</h3>
                            <center>
                                <p>Commercial/Educational/Shopping/other type websites with unlimited webpages including admin pages , customers private pages and so on...&nbsp;&nbsp;&nbsp;</p>
                            </center>
                            <div class="icon">
                                <i class="bi bi-box"></i>
                            </div>
                            <h4><sup>₹</sup>20000<span>/ Website</span></h4>
                            <div class="text-center">
                                <a href="#" class="buy-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Pricing Item -->
                    <br>
                    <div class="col-lg-4">
                        <div class="pricing-item">
                            <h3>Search Engine Optimisation</h3>
                            <center>
                                <p>Search Engine Optimisation</p>
                                <br><br><br>
                            </center>
                            <div class="icon">
                                <i class="bi bi-box"></i>
                            </div>
                            <h4><sup>₹</sup>9500<span>/ Website</span></h4>
                            <div class="text-center">
                                <a href="#" class="buy-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Pricing Item -->
                    <br>
                    <div class="col-lg-4">
                        <div class="pricing-item">
                            <h3>Domain Registration</h3>
                            <center>
                                <p>As Per Your Wish. The Price Varies With Plans</p>
                            </center>
                            <div class="icon">
                                <i class="bi bi-box"></i>
                            </div>
                            <h4><sup>₹</sup>*<span>/ Domain</span></h4>
                            <div class="text-center">
                                <a href="#" class="buy-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Pricing Item -->
                    <br>
                    <div class="col-lg-4">
                        <div class="pricing-item">
                            <h3>Web Hosting</h3>
                            <center>
                                <p>Free And Paid Hosting Are Available. The Price Varies With Plans</p>
                            </center>
                            <div class="icon">
                                <i class="bi bi-box"></i>
                            </div>
                            <h4><sup>₹</sup>*<span> / Domain</span></h4>
                            <div class="text-center">
                                <a href="#" class="buy-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Pricing Item -->
                    <br>
                    <div class="col-lg-4">
                        <div class="pricing-item">
                            <h3>Combo Offer</h3>
                            <center>
                                <p>Search Engine Optimisation,Web Hosting, Domain Registration</p>
                            </center>
                            <div class="icon">
                                <i class="bi bi-box"></i>
                            </div>
                            <h4><sup>₹</sup>8000<span>/ Website</span></h4>
                            <div class="text-center">
                                <a href="#" class="buy-btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Pricing Item -->
                </div>

            </div>
        </section>
        <!-- End Pricing Section -->



        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Contact</h2>
                    <p>You Can Social With Us By Using The Below Social Media Links. Any Queries Or Doubts Regarding The Firm Can Be Cleared By Contacting Us. Feel Free To Contact</p>
                </div>

                <div class="row gx-lg-0 gy-4">

                    <div class="col-lg-4">

                        <div class="info-container d-flex flex-column align-items-center justify-content-center">
                            <div class="info-item d-flex">
                                <i class="bi bi-twitter flex-shrink-0"></i>
                                <div>
                                    <h4>Twitter:</h4>
                                    <a style="color:white;" href="https://twitter.com/a4design_off">
                                        <p>@a4design_off</p>
                                    </a>
                                </div>
                            </div>
                            <!-- End Info Item -->
                            <div class="info-item d-flex">
                                <i class="bi bi-instagram flex-shrink-0"></i>
                                <div>
                                    <h4>Insta:</h4>
                                    <a style="color:white;" href="https://Instagram.com/a4design_off">
                                        <p>@a4design_off</p>
                                    </a>
                                </div>
                            </div>
                            <!-- End Info Item -->
                            <div class="info-item d-flex">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>Email:</h4>
                                    <a style="color:white;" href="mailto:official.a4design@gmail.com"></a>
                                    <p>official.a4design@gmail.com</p>
                                </div>
                            </div>
                            <!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-telegram flex-shrink-0"></i>
                                <div>
                                    <h4>Telegram:</h4>
                                    <a style="color:white;" href="https://t.me/as_official_06">
                                        <p>Ashvant Sunish</p>
                                    </a>
                                    <a style="color:white;" href="https://t.me/mrpops7">
                                        <p>Abin K J</p>
                                    </a>
                                </div>
                            </div>
                            <!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-clock flex-shrink-0"></i>
                                <div>
                                    <h4>Open Hours:</h4>
                                    <p>Mon-Sat: 11AM - 23PM</p>
                                </div>
                            </div>
                            <!-- End Info Item -->
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <form method="POST" action="./database/db_conn_files/send_msg.php" id="submit-form" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject (Only 50 Characters Are Allowed)" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="7" placeholder="Message (Only 1000 Characters Are Allowed)" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>

                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                    <!-- End Contact Form -->
                    <div class="col-lg-4">
                    </div>
                    <div class="col-lg-4">
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span>A4DESIGNS</span>
                    </a>

                    <div class="social-links d-flex mt-4">
                        <a href="#contact" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#contact" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#contact" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#contact" class="telegram"><i class="bi bi-telegram"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#hero">Home</a></li>
                        <li><a href="#about-us">About us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>

                    <strong>Email:</strong> <a style="color:white;" href="mailto:official.a4design@gmail.com"> official.a4design@gmail.com</a><br>
                    <strong>Insta:</strong> <a style="color:white;" href="https://Instagram.com/a4design_off"> a4design_off</a><br>
                    <strong>Twitter:</strong> <a style="color:white;" href="https://twitter.com/a4design_off"> a4design_off</a><br>
                    </p>

                </div>

            </div>
        </div>

        <div class="container mt-4">
            <div class="copyright">
                &copy; Copyright <strong><span>A4DESIGNS</span></strong> | All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/A4DESIGNS-bootstrap-business-website-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>
    <!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-app.js"></script>

    <script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-database.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
        $("#submit-form").submit((e) => {
            e.preventDefault()
            $.ajax({
                url: "https://script.google.com/macros/s/AKfycbwe-_8ZEAjESnW0bDrI5_eeal436z3bBg6CnSwWJo1Zr07z8CNvDepuYZlObiqn04E/exec",
                data: $("#submit-form").serialize(),
                method: "post",
                success: function(response) {
                    alert("Form submitted successfully")
                    window.location.reload()

                },
                error: function(err) {
                    alert("Something Error")

                }
            })
        })
    </script>
</body>

</html>