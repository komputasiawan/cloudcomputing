<?php
if(!empty($_POST["editmobil"])){
    
    require_once("../koneksi.php");

    $nama = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    $folder = '../img/';
    
    $cek = move_uploaded_file($file_tmp, $folder.$nama);

    if($cek){
        $stmt=$pdo_conn->prepare("UPDATE mobil set 
        nama_mobil=:namamobil, 
        biaya=:biaya,
        deskripsi=:deskripsi,
        foto=:foto
        where id_mobil=:idmobil");
		
		$stmt->bindParam(':idmobil', $_POST['idmobil']);
        $stmt->bindParam(':namamobil', $_POST['namamobil']);
        $stmt->bindParam(':biaya', $_POST['biaya']);
        $stmt->bindParam(':deskripsi', $_POST['deskripsi']);
        $stmt->bindParam(':foto', $nama);
        $re = $stmt->execute();
        if($re) {
            echo '<script type="text/javascript">'; 
            echo 'alert("Mobil Berhasil Diupdate !");'; 
            echo 'window.location.href = "viewadmin.php";';
            echo '</script>';
        }
    }
    else{
        echo '<script type="text/javascript">'; 
        echo 'alert("Upload File Gagal!");'; 
        echo 'window.location.href = "formeditmobil.php";';
        echo '</script>';
    }
}   
?>