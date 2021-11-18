<?php
    require_once("koneksi.php");
    $stmt=$pdo_conn->prepare("DELETE from penyewaan WHERE id_pemesanan=" ."'" . $_GET['pemesanan'] . "'");
    $stmt->execute();
    echo '<script type="text/javascript">'; 
    echo 'alert("Pesanan Berhasil Dihapus !");'; 
    echo 'window.location.href = "mobildisewa.php";';
    echo '</script>';
?>