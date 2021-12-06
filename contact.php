<?php
session_name("verify");
session_start();
if(isset($_SESSION['login_user'])){
    $userlogin = $_SESSION['login_user'];
    if ($userlogin == "admin")
    {
        header("location: admin/masukadmin.php");
    }
}
if (isset($_SESSION['login_user']) == '')
{
	header("location: formloginuser.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Website Rental Mobil</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--====== Aos css ======-->
    <link rel="stylesheet" href="assets/css/aos.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader_34">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER ENDS START ======-->

    <!--====== HEADER PART START ======-->

    <header id="home" class="header-area pt-100">
        <div class="navigation-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="#">
                                <img src="assets/images/logo.png" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll" href="masukuser.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="about.php">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="cart.php">Cart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="viewuser.php">Rent</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="team.php">Team</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#contact">Contact</a>
                                    </li>
                                </ul> <!-- navbar nav -->
                            </div>
                            <div class="navbar-btn ml-20 d-none d-sm-block">
                            <a class="main-btn-logout" href="logout.php"><i class=""></i>LOGOUT</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                                <?php
                                    echo $_SESSION['login_user'];
                                ?>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navigation bar -->
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== CONTACT PART START ======-->
<!--
    <section id="contact" class="contact-area pt-125 pb-130 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h5 class="sub-title mb-15">Contact us</h5>
                        <h2 class="title">Get In touch</h2>
                    </div> --> <!-- section title -->
                <!-- </div> -->
            <!-- </div> row -->
            <!-- <div class="row justify-content-center">
                <div class="col-lg-8"> 
                    <div class="contact-form">
                        <form id="contact-form" action="assets/contact.php" method="post" data-toggle="validator">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="text" name="name" placeholder="Your Name" data-error="Name is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> single form -->
                                <!-- </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="email" name="email" placeholder="Your Email" data-error="Valid email is required." required="required">
                                        <div class="help-block with-errors"></div> -->
                                    <!-- </div> single form -->
                                <!-- </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="text" name="subject" placeholder="Subject" data-error="Subject is required." required="required">
                                        <div class="help-block with-errors"></div> -->
                                    <!-- </div> single form -->
                                <!-- </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="text" name="phone" placeholder="Phone" data-error="Phone is required." required="required">
                                        <div class="help-block with-errors"></div> -->
                                    <!-- </div> single form -->
                                <!-- </div>
                                <div class="col-md-12">
                                    <div class="single-form form-group">
                                        <textarea placeholder="Your Mesaage" name="message" data-error="Please,leave us a message." required="required"></textarea>
                                        <div class="help-block with-errors"></div> -->
                                    <!-- </div> single form -->
                                <!-- </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single-form form-group text-center">
                                        <button type="submit" class="main-btn">send message</button> -->
                                    <!-- </div> single form
                                </div> -->
                            <!-- </div> row -->
                        <!-- </form> -->
                    <!-- </div> row -->
                <!-- </div> -->
            <!-- </div> row -->
        <!-- </div> container -->
    <!-- </section> -->

    <!--====== CONTACT PART ENDS ======-->

    <!--====== MAP PART START ======-->

    <section id="map" class="map-area">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe id="gmap_canvas" <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63730.137689270254!2d114.55919298769724!3d-3.317135143198283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de4209aa1eec961%3A0x26030bfcc09204d2!2sBanjarmasin%2C%20Banjarmasin%20City%2C%20South%20Kalimantan!5e0!3m2!1sen!2sid!4v1638290456948!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <div class="map-bg bg_cover d-none d-lg-block" style="background-image: url(assets/images/map/map-bg.png)"></div>
    </section>

    <!--====== MAP PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area">
        <div class="footer-widget pt-80 pb-130">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-8">
                        <div class="footer-logo mt-50">
                            <a href="#">
                                <img src="assets/images/logo.png" alt="Logo">
                            </a>
                            <ul class="footer-info">
                                <li>
                                    <div class="single-info">
                                        <div class="info-icon">
                                            <i class="lni-phone-handset"></i>
                                        </div>
                                        <div class="info-content">
                                            <p>+1880 123 456 789</p>
                                        </div>
                                    </div> <!-- single info -->
                                </li>
                                <li>
                                    <div class="single-info">
                                        <div class="info-icon">
                                            <i class="lni-envelope"></i>
                                        </div>
                                        <div class="info-content">
                                            <p>komputasiawan6@gmail.com</p>
                                        </div>
                                    </div> <!-- single info -->
                                </li>
                                <li>
                                    <div class="single-info">
                                        <div class="info-icon">
                                            <i class="lni-map"></i>
                                        </div>
                                        <div class="info-content">
                                            <p>1234 Banjarmasin, Indonesia</p>
                                        </div>
                                    </div> <!-- single info -->
                                </li>
                            </ul>
                            <ul class="footer-social mt-20">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-google"></i></a></li>
                                <li><a href="#"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div> <!-- footer logo -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-link mt-45">
                            <div class="f-title">
                                <h4 class="title">Essential Links</h4>
                            </div>
                            <ul class="mt-15">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Projects</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-link mt-45">
                            <div class="f-title">
                                <h4 class="title">Services</h4>
                            </div>
                            <ul class="mt-15">
                                <li><a href="#">Rent Cars</a></li>
                                <li><a href="#">Route Assistance</a></li>
                                <li><a href="#">Driver Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-8">
                        <div class="footer-newsleter mt-45">
                            <div class="f-title">
                                <h4 class="title">Newsleter</h4>
                            </div>
                            <p class="mt-15">Lorem ipsum dolor sit amet, consec tetur adipiscing elit.</p>
                            <form action="#">
                                <div class="newsleter mt-20">
                                    <input type="email" placeholder="info@contact.com">
                                    <button><i class="lni-angle-double-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright text-center">
                            <p>Website Rental Mobil - Cloud Computing by <a href="" rel="nofollow">Group 6</a></p>
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- copyright-area -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TO TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TO TOP PART ENDS ======-->

    <!--====== PART START ======-->

    <!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-"></div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->


    <!-- row -->









    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>

    <!--====== WOW js ======-->
    <script src="assets/js/wow.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/scrolling-nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>

    <!--====== Aos js ======-->
    <script src="assets/js/aos.js"></script>


    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

</body>

</html>
