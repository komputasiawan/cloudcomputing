<!DOCTYPE html>
<html>
<head>
	<title>FORGOT PASSWORD</title>
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
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'koneksi.php';

if(isset($_POST["email_penyewa"])) {

    $email = $_POST["email_penyewa"];
    $sql = "SELECT email_penyewa FROM USER WHERE email_penyewa = '$email' ";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {


      $code = uniqid(true);
      $query = mysqli_query($con,"INSERT INTO resetpasswords(code, email_penyewa) VALUES ('$code', '$email')");
      if(!$query){
          exit("Error Saja");
      }
  
  
      $mail = new PHPMailer(true);
      try {
          //Server settings
          $mail->isSMTP();                                            //Send using SMTP
          $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
          $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
          $mail->Username   = 'komputasiawan6@gmail.com';                     //SMTP username
          $mail->Password   = 'PenggembalaBabi123';                               //SMTP password
          $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
          $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  
          //Recipients
          $mail->setFrom('komputasiawan6@gmail.com','PB RENT CAR');
          $mail->addAddress($email);     //Add a recipient
          $mail->addReplyTo('no-reply@gmail.com', 'No reply');
  
          //Content
          $url = "http://". $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/resetPassword.php?code=$code";
          $mail->isHTML(true);                                  //Set email format to HTML
          $mail->Subject = 'Your password reset link';
          $mail->Body    = "<h1> You requested a password reset</h1>
                              Click <a href='$url'>this link</a> to do so";
          $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
  
          $mail->send();
          echo 'Reset password link has been sent to your email';
      } catch (Exception $e) {
          echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }
      exit();




      
    } else {
      echo "EMAIL TIDAK ADA";
    }
  $con->close();

  


  
}

?>
    <h2>Forgotten Your Password? Find Your Account </h2>
    <form method="POST">
      <label>
        <span>Your Email</span>
        <input type="text" name="email_penyewa" placeholder="Email" autocomplete="on">
      </label>
      <button class="submit" name="reset" value="Reset Password">Reset Password</button>

      <p class="forgot-pass"><a href="formloginuser.php">Sign In</a></p>
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
          <h2>Forgot Your Password?</h2>
          <p>Reset your password here</p>
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