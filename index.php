<?php
session_name("verify");
session_start();
if(isset($_SESSION['login_user'])){
    $userlogin = $_SESSION['login_user'];
    if ($userlogin == "admin")
    {
        header("location: admin/masukadmin.php");
    }
    elseif(isset($_SESSION['login_user']))
    {
        header("location: masukuser.php");
    }
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

        <div class="shape header-shape-one">
            <img src="assets/images/banner/shape/1.png" alt="shape">
        </div> <!-- header shape one -->

        <div class="shape header-shape-tow animation-one">
            <img src="assets/images/banner/shape/2.png" alt="shape">
        </div> <!-- header shape tow -->

        <div class="shape header-shape-three animation-one">
            <img src="assets/images/banner/shape/3.png" alt="shape">
        </div> <!-- header shape three -->

        <div class="shape header-shape-fore">
            <img src="assets/images/banner/shape/4.png" alt="shape">
        </div> <!-- header shape three -->

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
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#service">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#project">Rent</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#team">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#map">Contact</a>
                                    </li>
                                </ul> <!-- navbar nav -->
                            </div>
                            <div class="navbar-btn ml-20 d-none d-sm-block">
                                <a class="main-btn" href="formloginuser.php"><i class=""></i>Sign In</a>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navigation bar -->

        <div class="header-banner d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-9 col-sm-10">
                        <div class="banner-content">
                            <h4 class="sub-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1s">Your healing</h4>
                            <h1 class="banner-title mt-10 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="2s"><span>Rent</span> Your Dream Car Driving & Healing</h1>
                            <a class="banner-contact mt-25 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="2.3s" href="#contact">Get a Free Quote</a>
                        </div> <!-- banner content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="banner-image bg_cover" style="background-image: url(assets/images/banner/bg.png)"></div>
        </div> <!-- header banner -->

    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area pt-80 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-image mt-50 clearfix">
                        <div class="single-image float-left">
                            <img src="assets/images/about/a1.jpg" alt="About">
                        </div> <!-- single image -->
                        <div data-aos="fade-right" class="about-btn">
                            <a class="main-btn" href="#"><span>17</span> Years Experience</a>
                        </div>
                        <div class="single-image image-tow float-right">
                            <img src="assets/images/about/a2.jpg" alt="About">
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

    <!--====== SERVICES PART START ======-->

    <section id="service" class="services-area pt-125 pb-130 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h5 class="sub-title mb-15">Our Services</h5>
                        <h2 class="title">What We Do?</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="services-icon">
                            <i class="lni lni-handshake"></i>
                        </div>
                        <div class="services-content mt-15">
                            <h4 class="services-title">Rent Cars</h4>
                            <p class="mt-20">Mauris aliquam, turpis sed mattis placerat, justo risus pellentesque quam, id finibus risus arcu eget neque.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <div class="services-icon">
                            <i class="lni lni-share-alt"></i>
                        </div>
                        <div class="services-content mt-15">
                            <h4 class="services-title">Offer Travel Route Assistance</h4>
                            <p class="mt-20">Mauris aliquam, turpis sed mattis placerat, justo risus pellentesque quam, id finibus risus arcu eget neque.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.2s">
                        <div class="services-icon">
                            <i class="lni lni-user"></i>
                        </div>
                        <div class="services-content mt-15">
                            <h4 class="services-title">Provide Driver Service</h4>
                            <p class="mt-20">Mauris aliquam, turpis sed mattis placerat, justo risus pellentesque quam, id finibus risus arcu eget neque.</p>
                        </div>
                    </div> <!-- single services -->
                <!-- </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="services-icon">
                            <i class="lni-briefcase"></i>
                        </div>
                        <div class="services-content mt-15">
                            <h4 class="services-title">Commercial Design</h4>
                            <p class="mt-20">Mauris aliquam, turpis sed mattis placerat, justo risus pellentesque quam, id finibus risus arcu eget neque.</p>
                        </div>
                    </div> <!-- single services -->
                <!-- </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <div class="services-icon">
                            <i class="lni-handshake"></i>
                        </div>
                        <div class="services-content mt-15">
                            <h4 class="services-title">Hospitality Design</h4>
                            <p class="mt-20">Mauris aliquam, turpis sed mattis placerat, justo risus pellentesque quam, id finibus risus arcu eget neque.</p>
                        </div>
                    </div> single services -->
                <!-- </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.2s">
                        <div class="services-icon">
                            <i class="lni-grow"></i>
                        </div>
                        <div class="services-content mt-15">
                            <h4 class="services-title">Co-working Space Design</h4>
                            <p class="mt-20">Mauris aliquam, turpis sed mattis placerat, justo risus pellentesque quam, id finibus risus arcu eget neque.</p>
                        </div>
                    </div> single services -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== SERVICES PART ENDS ======-->

    <!--====== RENT PART START ======-->

    <section id="project" class="project-area pt-125 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-50">
                        <h5 class="sub-title mb-15">Featured Works</h5>
                        <h2 class="title">Cars You May Love</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
        </div>
        <div class="container-fluid">
            <div class="row project-active">
                <div class="col-lg-4">
                    <div class="single-project">
                        <div class="project-image">
                            <img src="assets/images/project/m1.jpg" alt="Project">
                        </div>
                        <div class="project-content">
                            <a class="project-title" href="#">High Quality Car</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-project">
                        <div class="project-image">
                            <img src="assets/images/project/m2.jpg" alt="Project">
                        </div>
                        <div class="project-content">
                            <a class="project-title" href="#">High Quality Car</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-project">
                        <div class="project-image">
                            <img src="assets/images/project/m3.jpg" alt="Project">
                        </div>
                        <div class="project-content">
                            <a class="project-title" href="#">High Quality Car</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-project">
                        <div class="project-image">
                            <img src="assets/images/project/m4.jpg" alt="Project">
                        </div>
                        <div class="project-content">
                            <a class="project-title" href="#">High Quality Car</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-project">
                        <div class="project-image">
                            <img src="assets/images/project/m5.jpg" alt="Project">
                        </div>
                        <div class="project-content">
                            <a class="project-title" href="#">High Quality Car</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-project">
                        <div class="project-image">
                            <img src="assets/images/project/m2.jpg" alt="Project">
                        </div>
                        <div class="project-content">
                            <a class="project-title" href="#">High Quality Car</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-project">
                        <div class="project-image">
                            <img src="assets/images/project/m1.jpg" alt="Project">
                        </div>
                        <div class="project-content">
                            <a class="project-title" href="#">High Quality Car</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== PROJECT PART ENDS ======-->

    <!--====== TEAM PART START ======-->

    <section id="team" class="team-area pt-125 pb-130 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h5 class="sub-title mb-15">Meet The Team</h5>
                        <h2 class="title">Our Expert Teams</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="team-image">
                            <img src="assets/images/team/1.jpg" alt="Team">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name"><a href="#">Anisa Luthfia Khairini</a></h4>
                            <span class="sub-title">Back-End Designer</span>
                            <ul class="social mt-25">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <div class="team-image">
                            <img src="assets/images/team/2.jpg" alt="Team">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name"><a href="#">Ibnu Fadillah</a></h4>
                            <span class="sub-title">Front-Back-End Designer</span>
                            <ul class="social mt-25">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.2s">
                        <div class="team-image">
                            <img src="assets/images/team/3.jpeg" alt="Team">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name"><a href="#">Nina Hafizah</a></h4>
                            <span class="sub-title">Front-End Designer</span>
                            <ul class="social mt-25">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.6s">
                        <div class="team-image">
                            <img src="assets/images/team/4.jpeg" alt="Team">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name"><a href="#">Muhammad Fadhillah</a></h4>
                            <span class="sub-title">Front-End Designer</span>
                            <ul class="social mt-25">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.6s">
                        <div class="team-image">
                            <img src="assets/images/team/5.jpg" alt="Team">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name"><a href="#">Razidannor</a></h4>
                            <span class="sub-title">Back-End Designer</span>
                            <ul class="social mt-25">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.6s">
                        <div class="team-image">
                            <img src="assets/images/team/6.jpg" alt="Team">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name"><a href="#">Neysa Nisrina</a></h4>
                            <span class="sub-title">Front-End Designer</span>
                            <ul class="social mt-25">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.6s">
                        <div class="team-image">
                            <img src="assets/images/team/7.jpg" alt="Team">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name"><a href="#">Rozi</a></h4>
                            <span class="sub-title">Intern</span>
                            <ul class="social mt-25">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.6s">
                        <div class="team-image">
                            <img src="assets/images/team/8.jpg" alt="Team">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name"><a href="#">Ivano Gerhart Hadiyudha</a></h4>
                            <span class="sub-title">Intern</span>
                            <ul class="social mt-25">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single team -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TEAM PART ENDS ======-->

    <!--====== TESTIMONIAL PART START ======-->

    <section id="testimonial" class="testimonial-area pt-130 pb-130">
        <div class="shape shape-one">
            <img src="assets/images/testimonial/4.png" alt="testimonial">
        </div>
        <div class="shape shape-tow">
            <img src="assets/images/testimonial/4.png" alt="testimonial">
        </div>
        <div class="shape shape-three">
            <img src="assets/images/testimonial/4.png" alt="testimonial">
        </div>
        <div class="container">
            <div class="testimonial-bg bg_cover pt-80 pb-80" style="background-image: url(assets/images/testimonial/testimonial-bg.jpg)">
                <div class="row">
                    <div class="col-xl-4 offset-xl-7 col-lg-5 offset-lg-6 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                        <div class="testimonial-active">
                            <div class="single-testimonial text-center">
                                <div class="testimonial-image">
                                    <img src="assets/images/testimonial/t-1.jpg" alt="Testimonial">
                                    <div class="quota">
                                        <i class="lni-quotation"></i>
                                    </div>
                                </div>
                                <div class="testimonial-content mt-20">
                                    <p>Lorem ipsum dolor sit amet, ectetur adipiscing elit. Phasellus vel erat ces, commodo lectus eu, finibus diam. m ipsum dolor sit amet, ectetur.</p>
                                    <h5 class="testimonial-name mt-15">Vernon</h5>
                                    <span class="sub-title">Random Customer</span>
                                </div>
                            </div> <!-- single-testimonial -->
                            <div class="single-testimonial text-center">
                                <div class="testimonial-image">
                                    <img src="assets/images/testimonial/t-2.jpg" alt="Testimonial">
                                    <div class="quota">
                                        <i class="lni-quotation"></i>
                                    </div>
                                </div>
                                <div class="testimonial-content mt-20">
                                    <p>Lorem ipsum dolor sit amet, ectetur adipiscing elit. Phasellus vel erat ces, commodo lectus eu, finibus diam. m ipsum dolor sit amet, ectetur.</p>
                                    <h5 class="testimonial-name mt-15">Joshua</h5>
                                    <span class="sub-title">Tesla Motors</span>
                                </div>
                            </div> <!-- single-testimonial -->
                            <div class="single-testimonial text-center">
                                <div class="testimonial-image">
                                    <img src="assets/images/testimonial/t-3.jpg" alt="Testimonial">
                                    <div class="quota">
                                        <i class="lni-quotation"></i>
                                    </div>
                                </div>
                                <div class="testimonial-content mt-20">
                                    <p>Lorem ipsum dolor sit amet, ectetur adipiscing elit. Phasellus vel erat ces, commodo lectus eu, finibus diam. m ipsum dolor sit amet, ectetur.</p>
                                    <h5 class="testimonial-name mt-15">Ayu</h5>
                                    <span class="sub-title">CEO, Alo</span>
                                </div>
                            </div> <!-- single-testimonial -->
                        </div> <!--  testimonial active -->
                    </div>
                </div> <!-- row -->
            </div> <!-- testimonial bg -->
        </div> <!-- container -->
    </section>

    <!--====== TESTIMONIAL PART ENDS ======-->

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
