<?php
    require_once("../koneksi.php");
    $stmt=$pdo_conn->prepare("DELETE from mobil WHERE id_mobil=" ."'" . $_GET['mobil'] . "'");
    $stmt->execute();
    echo '<script type="text/javascript">'; 
    echo 'alert("Mobil Berhasil Dihapus !");'; 
    echo 'window.location.href = "viewadmin.php";';
    echo '</script>';
?>