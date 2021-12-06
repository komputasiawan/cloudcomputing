<?php
session_name("verify");
session_start();
if (isset($_SESSION['login_user']) == '')
{
	header("location: formloginadmin.php");
}
require_once("../koneksi.php");
$stmt = $pdo_conn->prepare("SELECT * FROM admin");
$stmt->execute();
$result = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
 <title>
 Tambahkan Mobil
</title>
 <style>
     body{
		 background-size: cover;
		 background-position: absolute;
    background-repeat: no-repeat;
 background-image: url("https://luxurylaunches.com/wp-content/uploads/2018/04/jaguar-XJ50-4.jpg");
 margin-right: 20%;
 margin-left: 20%;

}
.login-background{
 font-family: arial;
 background: peachpuff;
 padding: 10px;
 box-shadow: 0px 0px 15px #222;
 border-radius: 3px;
 width: 500px;
 height: auto;
 margin: 50px auto;
 text-align: center;
 color:#222;

}
input[type="text"]{
  border: none;
 border-bottom: 1px solid #999;
 margin-bottom: 15px;
 color: #222;
 width: 100%;
 padding: 15px 0px;
 background: none;

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
        
        <div class="login-background">
            <div class="login-header">
            
           </div>
           <div class="login-body">
           <form name="frmAdd" action="tambahmobil.php" method="POST" enctype="multipart/form-data">
                <h3 class="text-center title-login">Tambah Mobil Sewaan</h3>
                    <div class="form-group">
                         <input type="text" name="namatoko" value="<?php echo $result[0]['id_admin']; ?>" placeholder="<?php echo $result[0]['nama_toko']; ?>" readonly="" />
                    </div>
                    <div class="form-group">
                         <input type="text" name="namamobil" required placeholder="Nama Mobil" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="biaya" required placeholder="Biaya Penyewaan" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="deskripsi" required placeholder="Deskripsi" />
                    </div>
                    <div class="form-group">
                        <small style="color:grey;">Tambahkan Foto Mobil</small><br><br>
                        <input type="file" name="foto" required/>
                    </div>
                        <input type="submit" class="btn btn-block btn-custom-pink" value="TAMBAH" name="tambahmobil"/>
                    
                    <div class="text-center forget"><br>
                    <a href="viewadmin.php">Back</a>
</form>
       
            
           </div>
          
        
       </div>
</body>
</html>
