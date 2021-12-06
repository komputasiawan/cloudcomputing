<?php
session_name("verify");
session_start();
if(isset($_SESSION['login_user'])){
    $userlogin = $_SESSION['login_user'];
    if ($userlogin == "admin")
    {
        header("location: admin/masukadmin.php");
    }
    else{
        header("location: masukuser.php");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign In - Sign Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!--====== Favicon Icon ======-->
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

  <link rel="stylesheet" type="text/css" href="images/style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
  <div class="cont">
    <div class="form sign-in">
      <?php
		if(isset($errorMsg))
		{
			?>
            <div class="alert alert-danger">
            	<strong>UPS! <?php echo $errorMsg; ?></strong>
            </div>
            <?php
		}
		if(isset($insertMsg)){
		?>
			<div class="alert alert-success">
				<strong>SUCCESS! <?php echo $insertMsg; ?></strong>
			</div>
        <?php
		}
		?>
    <h2>Sign In</h2>
    <form action="ceklogin.php" method="post">
      <label>
        <span>Username</span>
        <input type="text" name="userlog" id="userlog">
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="passlog" id="passlog">
      </label>
      <button class="submit" name="masuk" id="masuk">Sign In</button>
      <p class="forgot-pass"><a href="forgetpassword.php">Forgot Password ?</a></p>
      <center><a href="admin/formloginadmin.php" class="forgot-pass">Masuk sebagai Admin</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="index.php" class="forgot-pass">Home</a></center>
      <div class="social-media">
        <ul>
          <li><img src="images/facebook.png"></li>
          <li><img src="images/twitter.png"></li>
          <li><img src="images/linkedin.png"></li>
          <li><img src="images/instagram.png"></li>
        </ul>
      </div>
  </form>
    </div>

    <div class="sub-cont">
    <form action="tambahakun.php" name="tambahadmin" method="post">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and discover great amount of new opportunities!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <div class="form sign-up">
        <h2>Sign Up</h2>
        <label>
          <span>Name</span>
          <input type="text" name="nama" placeholder="Nama Lengkap..." required="required">
          
          <span>Username</span>
          <input type="text" name="username" placeholder="Username" required="required">
          
          <span>Password</span>
          <input type="password" name="pass" placeholder="********" required="required">
          
          <span>Email</span>
          <input type="email" name="email" placeholder="Alamat Email..." required="required">
          
          <span>No. HP</span>
          <input type="number" name="nohp" placeholder="089612345678" required="required">
          
          <span>Alamat</span>
          <input type="text" name="alamat" placeholder="Alamat Tempat Tinggal" required="required">
        </label>

        <button class="submit" name="daftar" value="daftar" id="daftar">Sign Up Now</button>
      </div>
    </form>
    </div>
  </div>
<script type="text/javascript" src="images/script.js"></script>
</body>
</html>