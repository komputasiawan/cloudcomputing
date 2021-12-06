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
<html>
<head>
    <!--====== Title ======-->
    <title>Website Rental Mobil</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="datepicker/js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="datepicker/css/datepicker.css">
 <style>
body{
    background-image: url("assets/images/img-2.jpeg");
    background-size: cover;
    background-position: absolute;
    background-repeat: no-repeat;
}
.login-backgrounde{
 font-family: arial !important;
 background: peachpuff !important;
 padding: 10px !important;
 box-shadow: 0px 0px 15px #222 !important;
 border-radius: 3px !important;
 width: 550px ;
 height: auto !important;
 margin: 50px auto !important;
 text-align: center !important;
 color:#222 !important;

}
input[type="text"]{
  border: none !important;
 border-bottom: 1px solid #999 !important;
 /* margin-bottom: 15px !important; */
 color: #222 !important;
 width: 100% !important;
 padding: 10px 0px !important;
 background: none !important;
}


input[type="submit"]{
 background: #0eb7cc;
 color: #fff;
 border-radius: 3px;
 padding: 15px;
 width: 100%;
 border: none;
 margin-top: 18px;
}

.img-logo{
 height: 100px;
 width: 100px;
}
a,a:hover,a:visited,a:active{
 text-decoration: none;
 color: #999;
}
 </style>

</head>
<body>
    <div class="container">
        
        <div class="login-backgrounde">
            <div class="login-headere">
            
           </div>
       
    <?php
        require_once("koneksi.php");

    $stmt = $pdo_conn->prepare("SELECT * FROM mobil join admin WHERE nama_mobil = " ."'" . $_GET['mobil'] . "'");
    // LEFT JOIN user ON penyewaan.penyewa=user.id_penyewa LEFT JOIN admin ON penyewaan.pemilik=admin.id_admin WHERE penyewa = " ."'" . $_SESSION['id_user'] . "'
    $stmt->execute();
    $result = $stmt->fetchAll();
    ?>
           <div class="login-bodye">
           <form name="frmAdd" action="tambahpesanan.php" method="POST" enctype="multipart/form-data">
                <h3 class="text-center title-login">Form Penyewaan Mobil</h3>
                    <div class="form-group ">
                        <input type="text"  name="tglsewa"  class="datepicker"  placeholder="Tanggal Sewa dd-mm-yyyy" required/>       
                    </div>    
                    <!-- <div class="form-group">
                        <input type="text" name="tglsewa" required placeholder="Tanggal Sewa 12-12-2021"  />
                    </div> -->
                    <div class="form-group ">
                        <input type="text"  name="tglkembali"  class="datepicker"  placeholder="Tanggal Kembali dd-mm-yyyy" required/>       
                    </div> 
                    <!-- <div class="form-group">
                         <input type="text" name="tglkembali" required placeholder="Tanggal Kembali 13-12-2021" />
                    </div> -->
                    <div class="form-group">
                        <input type="text" name="jumlah" required placeholder="Jumlah" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="mobil" value="<?php echo $result[0]['nama_mobil']; ?>" readonly=""/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="bacapemilik" value="Toko Rental : <?php echo $result[0]['nama_toko']; ?>" readonly=""/>
                        <input type="hidden" name="pemilik" value="<?php echo $result[0]['id_admin']; ?>" readonly=""/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="bacapenyewa" value="Penyewa : <?php echo $_SESSION['login_user'];?>" readonly=""/>
                        <input type="hidden" name="penyewa" value="<?php echo $_SESSION['id_user'];?>" readonly=""/>
                    </div>
                        <input type="submit" class="btn btn-block btn-custom-pink" value="PESAN" name="tambahpesanan"/>
                    
                    <div class="text-center forget"><br>
                    <a href="viewuser.php">Back</a>
            </form>
           </div>
       </div>

         <!-- Menambahkan jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Menambahakan Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script type="text/javascript">
        $(function(){
            $(".datepicker").datepicker({
                format: 'dd-mm-yyyy',
                autoclose: true,
                todayHighlight: true,
            });
        });
    </script>
</body>
</html>
