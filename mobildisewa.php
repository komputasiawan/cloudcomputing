<?php
session_name("verify");
session_start();
if (isset($_SESSION['login_user']) == '')
{
	header("location: formloginuser.php");
}
require_once("koneksi.php");
$stmt = $pdo_conn->prepare("SELECT * FROM penyewaan JOIN mobil JOIN admin ORDER BY tgl_sewa");
$stmt->execute();
$result = $stmt->fetchAll();
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Mobil disewa </title>
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
        <h3>Mobil yang Sudah Kamu Sewa</h3>
      </div>
      <div class ="col-sm-6" style="text-align: right; padding-top: 20px;">
        <a href="masukuser.php" style="color: white; font-size:20px;">Home</a>
		  |||  
        <a href="viewuser.php" style="color: white; font-size:20px;">Back</a>
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
    $stmt_sewa = $pdo_conn->prepare("SELECT * FROM penyewaan JOIN admin ORDER BY id_pemesanan");
    $stmt_sewa->execute();
    $result_sewa = $stmt_sewa->fetchAll();
  ?>
          <div class="row">
          <?php
        		if(!empty($result_sewa)) { 
        		foreach($result_sewa as $row) {
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
                  <center><a href='hapuspesanan.php?pemesanan=<?php echo $row['id_pemesanan']; ?>' onclick="return confirm('Yakin Hapus?')"><button>Hapus</button></a></center>
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