<!DOCTYPE html>
<html>
<head>
	<title>RESET PASSWORD</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!--====== Favicon Icon ======-->
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

  <link rel="stylesheet" type="text/css" href="images/style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
  <div class="cont">
    <div class="form reset">

<?php
include ("koneksi.php");

if(!isset($_GET["code"])){
	exit("Can't Find Page");
}

$code = $_GET["code"];
$getEmailQuery = mysqli_query($con, "SELECT email_penyewa FROM resetpasswords WHERE code='$code'");

if(mysqli_num_rows($getEmailQuery) == 0){
	exit("Can't find page <br><a href='formloginuser.php'>Login Here</a>");
}
// if(!$getEmailQuery || mysqli_num_rows($getEmailQuery == 0)){
//     exit("Can't find page");
// }


    if(isset($_POST["pass_penyewa"])) {
        $pw = $_POST["pass_penyewa"];


        $row = mysqli_fetch_array($getEmailQuery);
        $email_penyewa = $row["email_penyewa"];

        $query = mysqli_query($con,"UPDATE user SET pass_penyewa='$pw' WHERE email_penyewa ='$email_penyewa'");

        if($query) {
            $query = mysqli_query($con, "DELETE from resetpasswords WHERE code='$code'");
            exit("Password Updated! <br><a href='formloginuser.php'>Login Here</a>");
        }
        else {
            exit("Something went wrong! <br><a href='formloginuser.php'>Login Here</a>");
        }
    }
?>
<!-- <form method="POST">
	<input type="password" name="pass_penyewa" placeholder="new password">
	<br>
	<input type="submit" name="submit" value="Update Password">
</form> -->

<h2>RESET YOUR PASSWORD</h2>
    <form method="POST">
      <label>
        <span>Enter Your New Password</span>
        <input type="password" name="pass_penyewa" placeholder="...">
      </label>
      <button class="submit" name="submit" value="Update Password">Reset Password</button>

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
          <h2>RESET PASSWORD</h2>
          <p>Continue where you left off</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Back</span>
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