<?php
session_name("verify");
session_start();
if (isset($_SESSION['login_user']) == '')
{
	header("location: formloginadmin.php");
}
require_once("../koneksi.php");
$stmt = $pdo_conn->prepare("SELECT * FROM admin id_admin");
$stmt->execute();
$result = $stmt->fetchAll();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Index Admin</title>
  <meta name="keywords" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">
  <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">

  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/fonts/flat-icon/flaticon.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <div id="content-wrapper">
    <header class="header header--bg">
      <div class="container">
        <nav class="navbar">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span> 
            </button>
            <h3 style="color: aliceblue;">|| Rental Mobil</h3>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav pull-right">
              <li><a href="#" style="color: white;">HOME</a></li>
              <li><a href="#" style="color: white;">TESTIMONIALS</a></li>
              <li><a href="#" style="color: white;">ABOUT</a></li>
              <li><a href="logout.php" style="color: white;">LOGOUT</a></li>
            </ul>
          </div>
        </nav>
        <div class="row">
          <div class="col-lg-6 header__title">
            <h1>DISCOVER <br> YOUR <br> DREAM <br> CAR </h1>
          </div>
          <div class="col-lg-6 header__content">
            <h3 class="title"><br> GO RIDE<br>UNDER THE BEAUTIFUL SKY</h3>
            <p>Saatnya jalan-jalan untuk menyenangkan hati dan pikiran. Sewa mobil impianmu di sini..</p>
            <a class="header__button" href="viewadmin.php">DISCOVER</a>
          </div>
        </div>
      </div>
    </header>

    
  
    <!-- video-popup -->
    <div class="container">
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- video-popup-end -->
	<!--
    <section class="sponsors sponsors--bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 sponsors__single">
            <img src="assets/images/sponsors1.png" alt="">
          </div>
           <div class="col-lg-2 sponsors__single">
            <img src="assets/images/sponsors2.png" alt="">
          </div>
           <div class="col-lg-2 sponsors__single">
            <img src="assets/images/sponsors3.png" alt="">
          </div>
           <div class="col-lg-2 sponsors__single">
            <img src="assets/images/sponsors4.png" alt="">
          </div>
           <div class="col-lg-2 sponsors__single">
            <img src="assets/images/sponsors5.png" alt="">
          </div>
           <div class="col-lg-2 sponsors__single">
            <img src="assets/images/sponsors6.png" alt="">
          </div>
        </div>
      </div>
    </section>
	-->
    <section class="testimonial">
      <div class="container">
        <div class="page-section">
          <div class="text-center">
            <h2 class="page-section__title">Sewa Mobil</h2>
            <div class="testimonial__title-style">
            </div>
            <p class="page-section__subtitle">Di bawah ini adalah preview mobil yang kami sewakan <br> di Rental kami</p>
          </div>
          <div class="row">
            <div class="col-md-8">
              <div class="accordion-group">
                <div class="collapse in indent" id="one">
                  <div class="collapse__wrapper">
                    <div class="bio bio-1">
                      <h2>Samson</h2>
                      <p>Banjarmasin</p>
                    </div>
                    <div class="star">
                      <li><i class="material-icons">star</i></li>
                      <li><i class="material-icons">star</i></li>
                      <li><i class="material-icons">star</i></li>
                      <li><i class="material-icons">star</i></li>
                      <li><i class="material-icons">star</i></li>
                    </div>
                    <p class="paragraph">Pesan di sini sungguh sangat menyenangkan, webnya sangat mudah dipahami dan juga mobil yang disewa juga memuaskan.  </p>
                  </div>
                </div>
                <div class="collapse" id="two">
                  <div class="collapse__wrapper">
                    <div class="bio bio-2">
                      <h2>Rima</h2>
                      <p>Banjarmasin</p>
                    </div>
                    <div class="star">
                      <li><i class="material-icons">star</i></li>
                      <li><i class="material-icons">star</i></li>
                      <li><i class="material-icons">star</i></li>
                      <li><i class="material-icons">star</i></li>
                      <li><i class="material-icons">star</i></li>
                    </div>
                    <p class="paragraph">Well, saya senang karena mengetahui web ini dapat menyediakan pemesanan mobil untuk travelling. Tanpa susah-susah untuk membeli yang baru. </p>
                  </div>
                </div>
                <div class="collapse" id="three">
                  <div class="collapse__wrapper">
                    <div class="bio bio-3">
                      <h2>Tono</h2>
                      <p>Banjarbaru</p>
                    </div>
                    <div class="star">
                      <li><i class="material-icons">star</i></li>
                      <li><i class="material-icons">star</i></li>
                      <li><i class="material-icons">star</i></li>
                      <li><i class="material-icons">star</i></li>
                      <li><i class="material-icons">star</i></li>
                    </div>
                    <p class="paragraph"> Untuk mobil yang dipesan sangat layak untuk dipakai dan juga pesan di sini termasuk murah dan efektif karena dapat langsung dipakai tanpa menunggu lama</p>
                  </div>
                </div>
                <div class="collapse" id="four">
                  <div class="collapse__wrapper">
                    <div class="bio bio-4">
                      <h2>Bandon</h2>
                      <p>Banjarbaru</p>
                    </div>
                    <div class="star">
                      <li><i class="material-icons">star</i></li>
                      <li><i class="material-icons">star</i></li>
                      <li><i class="material-icons">star</i></li>
                      <li><i class="material-icons">star</i></li>
                      <li><i class="material-icons">star</i></li>
                    </div>
                    <p class="paragraph"> Untuk saya yang suka travelling dan tanpa perlu membeli yang baru sungguh sangat senang karena web ini menyediakan penyewaan mobil yang baik dan layak pakai. </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 testimonial-right open-default">
              <button class="button-testimonial button-testimonial-1" data-toggle="collapse" data-target="#one">
                <div class="bio">
                  <h2>Samson</h2>
                  <p>Banjarmasin</p>
                </div>
              </button>
              <button class="button-testimonial button-testimonial-2" data-toggle="collapse" data-target="#two">
                <div class="bio">
                  <h2>Rima</h2>
                  <p>Banjarmasin</p>
                </div>
              </button>
              <button class="button-testimonial button-testimonial-3" data-toggle="collapse" data-target="#three">
                <div class="bio">
                  <h2>Tono</h2>
                  <p>Banjarbaru</p>
                </div>
              </button>
              <button class="button-testimonial button-testimonial-4" data-toggle="collapse" data-target="#four">
                <div class="bio">
                  <h2>Bandon</h2>
                  <p>Banjarbaru</p>
                </div>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="team team--bg">
      <div class="container">
        <div class="page-section">
          <div class="text-center">
            <h2 class="page-section__title">About Us</h2>
            </div>
            <p class="page-section__subtitle">Berikut sekilas tentang kami mengenai kelompok, tugas dan wesbite yang kami buat</p>
          </div>
          <div class="row gutters-80">
            <div class="col-md-4">
              <div class="thumbnail team__single">
                <div class="bio text-center">
                  <img src="../assets/images/step1.png" alt="">
                  <h2>Kelompok 4</h2>
                </div>
                <div class="caption">
                  <h3>Anisa</h3>
                  <h3>Fadhil</h3>
                  <h3>Ibnu</h3>
                  <h3>Nina</h3>
                  <h3>Nesya</h3>
                  <h3>Rozi</h3>
                  <h3>Razidan</h3>
                  <h3>Ivano</h3>
                  
                  <div class="social-icons">
                    <li><a href="#"><i class="flaticon-facebook-letter-logo"></i></a></li>
                    <li><a href="#"><i class="flaticon-twitter-logo-silhouette"></i></a></li>
                    <li><a href="#"><i class="flaticon-google-plus"></i></a></li>
                    <li><a href="#"><i class="flaticon-pinterest-logo"></i></a></li>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail team__single">
                <div class="bio text-center">
                  <img src="../assets/images/step2.png" alt="">
                  <h2>Cloud Computing</h2>
                </div>
                <div class="caption">
                  <h4>Website ini dibuat untuk menyelesaikan tugas matakuliah cloud computing dan juga bisa belajar mengenai cloud computing</h4>
                  <div class="social-icons">
                    <li><a href="#"><i class="flaticon-facebook-letter-logo"></i></a></li>
                    <li><a href="#"><i class="flaticon-twitter-logo-silhouette"></i></a></li>
                    <li><a href="#"><i class="flaticon-google-plus"></i></a></li>
                    <li><a href="#"><i class="flaticon-pinterest-logo"></i></a></li>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail team__single">
                <div class="bio text-center">
                  <img src="../assets/images/step3.png" alt="">
                  <h2>Sistem Informasi Rental<br>Mobil</h2>
                </div>
                <div class="caption">
                  <h4>Sistem informasi Rental Mobil impianmu</h4>
                  <div class="social-icons">
                    <li><a href="#"><i class="flaticon-facebook-letter-logo"></i></a></li>
                    <li><a href="#"><i class="flaticon-twitter-logo-silhouette"></i></a></li>
                    <li><a href="#"><i class="flaticon-google-plus"></i></a></li>
                    <li><a href="#"><i class="flaticon-pinterest-logo"></i></a></li>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="form form--bg">
      <div class="container">
        <div class="page-section">
          <div class="text-center">
            <h2 class="page-section__title page-section__title--white">Contact us</h2>
            <div class="form__title-style">
              <span class="first-line"></span>
              <span class="second-line"></span>
            </div>
            <p class="page-section__subtitle page-section__subtitle--white">Hubungin kami untuk pertanyaan atau kritik dan saran</p>
          </div>
          <form action="#">
            <div class="form-group">
              <input class="form-control" type="text" placeholder="Name">
            </div>
            <div class="form-group">
              <input class="form-control" type="email" placeholder="Email">
            </div>
            <div class="form-group">
               <textarea class="form-control" rows="5" placeholder="Message"></textarea>
            </div>
            <div class="row">
              <div class="col-md-6 checkbox">
                <input type="checkbox" id="checkbox-1">
                <label for="checkbox-1"> Subscribe to newslatter</label>
              </div>
              <div class="col-md-6 form-button">
                <input class="button--form" type="submit" value="SEND">
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>

    <footer class="footer footer--bg">
      <div class="container">
        <div class="row">
          <div class="col-md-4 footer__left">
            <h3 style="color: aliceblue;">|| Rental Mobil</h3>
            <p>Copyright <span>&copy;</span> Group 6 of Cloud Computing 2021</p>
          </div>
          <div class="col-md-2 footer__link">
            <li><a href="#">Home</a></li>
            <li><a href="#">Sewa Mobil</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact</a></li>
          </div>
          <div class="col-md-2 footer__link">
            <li><a href="#">Group 6</a></li>
            <li><a href="#">Cloud Computing</a></li>
            <li><a href="#">Information Technology</a></li>
            <li><a href="#">Engineering Faculty</a></li>
          </div>
          <div class="col-md-4 footer__social-icons">
            <li><a href="#"><i class="flaticon-facebook-letter-logo"></i></a></li>
            <li><a href="#"><i class="flaticon-twitter-logo-silhouette"></i></a></li>
            <li><a href="#"><i class="flaticon-google-plus"></i></a></li>
            <li><a href="#"><i class="flaticon-pinterest-logo"></i></a></li>
          </div>
        </div>
      </div>
    </footer>

  </div>






  <script src="assets/jquery/jquery-3.2.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- <script src="assets/owl-slider/owl.carousel.min.js"></script> -->

  <script>
    $(document).ready(function() {
      
      $('button').click( function(e) {
        $('.collapse').collapse('hide');
      });


      
    });
  </script>
</body>
</html>  

