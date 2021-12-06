<?php
session_name("verify");
session_start();
if (isset($_SESSION['login_user']) == '')
{
	header("location: formloginuser.php");
}
require_once("koneksi.php");
$stmt = $pdo_conn->prepare("SELECT * FROM mobil ORDER BY nama_mobil DESC");
$stmt->execute();
$result = $stmt->fetchAll();
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sewa Mobil </title>
    <meta name="keywords" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">
    <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">
  
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="css/viewuser.css">

</head>
<body>
  <div class="container-fluid oke">
    <div class="row">
      <div class ="col-sm-4">
        <h3>Temukan Mobil Rental disini</h3>
      </div>
      <div class ="col-sm-6" style="text-align: right; padding-top: 20px;">
        <a href="masukuser.php" class="warna_tulisan" style="color: white; font-size:20px;">Home</a>
		  |||  
        <a href="mobildisewa.php" class="warna_tulisan" style="color: white; font-size:20px;">Keranjang</a>
      </div>
      </div>
    </div>
    </div>
  </div>
  </div>
  <br><br>
    <div class="container-fluid d">
        <div class="container">
        <?php
    $stmt_mobil = $pdo_conn->prepare("SELECT * FROM mobil JOIN admin ORDER BY nama_mobil");
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
              <?php echo "<img style='height: 200px; width: 300px;' src='img/$row[foto]'/>";?>
					  	<div class="card-body">
						  <h4 class="card-title"><?php echo $row["nama_mobil"]; ?></h4>
					    	<ul class="list-group list-group-flush">
                  
                <li class="list-group-item">Nomor Mobil : <?php echo $row["id_mobil"]; ?></li>
                  <li class="list-group-item">Nama Toko : <?php echo $row["nama_toko"]; ?></li>
                  <li class="list-group-item">Biaya : <?php echo $row["biaya"]; ?></li>
                  <li class="list-group-item">Deskripsi : <?php echo $row["deskripsi"]; ?></li>
								<center><a href='formpemesan.php?mobil=<?php echo $row['nama_mobil']; ?>'><button class="btn btn-info">PESAN</button></a></center>
							</ul>
					  	</div>
					</div>
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
</body>
</html>