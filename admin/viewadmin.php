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
    <link rel="stylesheet" href="../assets/css/styleadmin.css">

    <link rel="stylesheet" href="../css/viewuser.css">


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
            <img src="../assets/images/banner/shape/1.png" alt="shape">
        </div> <!-- header shape one -->

        <div class="shape header-shape-tow animation-one">
            <img src="../assets/images/banner/shape/2.png" alt="shape">
        </div> <!-- header shape tow -->

        <div class="shape header-shape-three animation-one">
            <img src="../assets/images/banner/shape/3.png" alt="shape">
        </div> <!-- header shape three -->

        <div class="shape header-shape-fore">
            <img src="../assets/images/banner/shape/4.png" alt="shape">
        </div> <!-- header shape three -->

        <div class="navigation-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="#">
                                <img src="../assets/images/logo.png" alt="Logo">
                            </a>
                            <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
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
                                    <li class="nav-item">
                                        <a class="page-scroll" href="about.php">About</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#viewadmin">Services</a>
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

        
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="banner-content">
                        <br>
                        <center><a href=formtambahmobil.php><button>Tambah</button></a></center>
                        </div> <!-- banner content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area pt-30 pb-20">
    <div class="container-fluid d">
    
        <div class="container">
        <?php
          $stmt_mobil = $pdo_conn->prepare("SELECT * FROM mobil JOIN admin ORDER BY pemilik ");
          $stmt_mobil->execute();
          $result_mobil = $stmt_mobil->fetchAll();
        ?>
          <div class="row">
          <?php
        		if(!empty($result_mobil)) { 
        		foreach($result_mobil as $row) {
        		?>
				<div class="col-md-4 mb-25" data-aos="slide-up">
                    <!-- <div class="card-group h-300" > -->
                        <div class="card h-100 view zoom">
                            <?php echo "<img style='height: 200px; width: 300px;' src='../img/$row[foto]'/>";?>
                            <div class="card-body">
                            <h4 class="card-title"><?php echo $row["nama_mobil"]; ?></h4>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Nama Toko : <?php echo $row["nama_toko"]; ?></li>
                                    <li class="list-group-item">Biaya : <?php echo $row["biaya"]; ?></li>
                                    <li class="list-group-item">Deskripsi : <?php echo $row["deskripsi"]; ?></li>
                                    <br>
                                    <div class="tombol">
                                    <center><a href='formeditmobil.php?mobil=<?php echo $row['id_mobil']; ?>'><button class="edit">Edit</button></a></center>
                                    <center><a href='hapusmobil.php?mobil=<?php echo $row['id_mobil']; ?>' onclick="return confirm('Yakin Hapus?')"><button class="hapus">Hapus</button></a></center>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    <!-- </div> -->
                </div>
                <?php
					}
					}
				?>
           </div>
        </div>
      </div>
        </div> <!-- container -->
    </section>
    <center>                
    <hr color="#4ebfe8" ridge width="90%">
    </center>
    <!--====== ABOUT PART ENDS ======-->


    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area">
        <div class="footer-widget pt-80 pb-130">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-8">
                        <div class="footer-logo mt-50">
                            <a href="#">
                                <img src="../assets/images/logo.png" alt="Logo">
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
