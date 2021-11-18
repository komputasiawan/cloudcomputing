<?php
    if(!empty($_POST["tambahpesanan"])) {
        require_once("koneksi.php");

            $sql = "INSERT INTO penyewaan (tgl_sewa, tgl_kembali, jumlah, mobil, pemilik, penyewa) 
            VALUES (:tglsewa, :tglkembali, :jumlah, :mobil, :pemilik, :penyewa)";
            $stmt = $pdo_conn->prepare( $sql );
            $result = $stmt->execute( array
            (':tglsewa'=>$_POST['tglsewa'], ':tglkembali'=>$_POST['tglkembali'], ':jumlah'=>$_POST['jumlah'], ':mobil'=>$_POST['mobil'], ':pemilik'=>$_POST['pemilik'], ':penyewa'=>$_POST['penyewa'] ));
            if (!empty($result) ){
                echo '<script type="text/javascript">'; 
                echo 'alert("Mobil Berhasil Disewa !");'; 
                echo 'window.location.href = "viewuser.php";';
                echo '</script>';
            }
            else {
                echo '<script type="text/javascript">'; 
                echo 'alert("Mobil Telah disewa, Silahkan Masukkan Mobil Lain !");'; 
                echo 'window.location.href = "formpemesan.php";';
                echo '</script>';
            }
        }
?>
