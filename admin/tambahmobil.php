<?php
    if(!empty($_POST["tambahmobil"])) {
        require_once("../koneksi.php");

		$nama = $_FILES['foto']['name'];
        $file_tmp = $_FILES['foto']['tmp_name'];
        $folder = '../img/';
        
        $cek = move_uploaded_file($file_tmp, $folder.$nama);
        
        if($cek){
            $sql = "INSERT INTO mobil (pemilik, nama_mobil, biaya, deskripsi, foto) 
            VALUES (:namatoko, :namamobil, :biaya, :deskripsi, :foto)";
            $stmt = $pdo_conn->prepare( $sql );
            $result = $stmt->execute( array
            (':namatoko'=>$_POST['namatoko'], ':namamobil'=>$_POST['namamobil'], ':biaya'=>$_POST['biaya'], ':deskripsi'=>$_POST['deskripsi'], ':foto' =>$nama ));
            if (!empty($result) ){
                echo '<script type="text/javascript">'; 
                echo 'alert("Mobil Sewaan Berhasil Ditambahkan !");'; 
                echo 'window.location.href = "viewadmin.php";';
                echo '</script>';
            }
            else {
                echo '<script type="text/javascript">'; 
                echo 'alert("Mobil Telah ada, Silahkan Masukkan Mobil Lain !");'; 
                echo 'window.location.href = "formtambahmobil.php";';
                echo '</script>';
            }
        }
        else{
            echo '<script type="text/javascript">'; 
            echo 'alert("Upload File Gagal !");'; 
            echo 'window.location.href = "formtambahmobil.php";';
            echo '</script>';
        }
        
    }
?>
