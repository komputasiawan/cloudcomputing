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
require_once("koneksi.php");
$stmt = $pdo_conn->prepare("SELECT * FROM penyewaan JOIN mobil JOIN admin ORDER BY penyewa");
$stmt->execute();
$result = $stmt->fetchAll();
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

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style1.css">
    <link rel="stylesheet" href="assets/css/viewuser.css">
</head>
<body>
    <!--====== HEADER PART START ======-->
    <header id="home">
        <div class="navigation-bar sticky">
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
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="cart.php">Cart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="viewuser.php">Rent</a>
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
    <!-- Navbar Section Ends Here -->
    <!-- Navbar Section Ends Here -->
  <br><br><br><br><br><br>
    <div class="container-fluid d">
        <div class="container">
    <?php
    $stmt_mobil = $pdo_conn->prepare("SELECT * FROM penyewaan LEFT JOIN user ON penyewaan.penyewa=user.id_penyewa LEFT JOIN admin ON penyewaan.pemilik=admin.id_admin WHERE penyewa = " ."'" . $_SESSION['id_user'] . "'");
    $stmt_mobil->execute();
    $result_mobil = $stmt_mobil->fetchAll();
    ?>
          <div class="row">
          <?php
        		if(!empty($result_mobil)) { 
        		foreach($result_mobil as $row) {
        		?>
				<div class="col-md-4" data-aos="slide-up">
					<div class="card view zoom">
					  	<div class="card-body">
						  <h4 class="card-title"><?php echo $row["mobil"]; ?></h4>
					    	<ul class="list-group list-group-flush">
                <li class="list-group-item">Tanggal Sewa : <?php echo $row["tgl_sewa"]; ?></li>
                  <li class="list-group-item">Tanggal Kembali : <?php echo $row["tgl_kembali"]; ?></li>
                  <li class="list-group-item">Jumlah : <?php echo $row["jumlah"]; ?></li>
                  <li class="list-group-item">Nama Toko : <?php echo $row["nama_toko"]; ?></li>
                  <li class="list-group-item">Nomor Toko : <?php echo $row["no_hp"]; ?></li>
                  <!-- <center><a href='hapuspesanan.php?pemesanan=<?php //echo $row['id_pemesanan']; ?>' onclick="return confirm('Yakin Hapus?')"><button>Hapus</button></a></center> -->
							</ul>
					  	</div>
					</div>
                    <br><br>
				</div>
				<?php
					}
					}
				?>
           </div>
        </div>
      </div>
      <br><br>
      </div>
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
    <!--====== BACK TO TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TO TOP PART ENDS ======-->
</body>
</html>