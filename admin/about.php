<?php
session_name("verify");
session_start();
if(isset($_SESSION['login_user'])){
    $userlogin = $_SESSION['login_user'];
    if ($userlogin != "admin")
    {
        header("location: ../masukuser.php");
    }
}

if (isset($_SESSION['login_user']) == '')
{
	header("location: formloginadmin.php");
}
require_once("../koneksi.php");
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
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="../assets/css/LineIcons.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="../assets/css/animate.css">

    <!--====== Aos css ======-->
    <link rel="stylesheet" href="../assets/css/aos.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="../assets/css/slick.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="../assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="../assets/css/style.css">


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
                                <img src="../assets/images/logo.png" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll" href="masukadmin.php">Home</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="viewadmin.php">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="order.php">Order</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="team.php">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="contact.php">Contact</a>
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

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area pt-80 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-image mt-50 clearfix">
                        <div class="single-image float-left">
                            <img src="../assets/images/about/a1.jpg" alt="About">
                        </div> <!-- single image -->
                        <div data-aos="fade-right" class="about-btn">
                            <a class="main-btn" href="#"><span>17</span> Years Experience</a>
                        </div>
                        <div class="single-image image-tow float-right">
                            <img src="../assets/images/about/a2.jpg" alt="About">
                        </div> <!-- single image -->
                    </div> <!-- about image -->
                </div>
                <div class="col-lg-6">
                    <div class="about-content mt-45">
                        <h4 class="about-welcome">About Us </h4>
                        <h3 class="about-title mt-10">Reasons to be a customer</h3>
                        <p class="mt-25">Banyaknya orang yang ingin bepergian keluar daerah, namun tidak memiliki kendaraan pribadi yang dapat memuat banyak orang selain dirinya. Kami hadir untuk menyediakan jasa rental mobil, dengan berbagai jenis mobil. Tak hanya itu, kualitas dari mobil yang kami miliki adalah salah satu dari yang terbaik, karena kami sangat mementingkan kenyaman dari pengguna mobil, tak hanya itu harga yang kami tawarkan juga sangat baik dan bersahabat bagi kantong anda.
                            <br> <br>In ultrices justo nec sem ullamcorper, sed porta nisl porttitor. Donec sed lacus nulla. Integer blandit tellus metus, sit amet convallis lectus vehicula scelerisque. Duis vel quam sed ipsum sodales aliquam. Vestibulum ut dolor vestibulum arcu tempor pellentesque. Etiam suscipit pellentesque velit eu semper. Maecenas accumsan odio erat, vel tempor magna finibus ac.</p>
                        <a class="main-btn mt-25" href="#">learn more</a>
                    </div> <!-- about content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->
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
    <script src="../assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="../assets/js/bootstrap.min.js"></script>

    <!--====== WOW js ======-->
    <script src="../assets/js/wow.min.js"></script>

    <!--====== Slick js ======-->
    <script src="../assets/js/slick.min.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="../assets/js/scrolling-nav.js"></script>
    <script src="../assets/js/jquery.easing.min.js"></script>

    <!--====== Aos js ======-->
    <script src="../assets/js/aos.js"></script>


    <!--====== Main js ======-->
    <script src="../assets/js/main.js"></script>

</body>

</html>
