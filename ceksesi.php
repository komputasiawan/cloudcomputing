<?php
require_once("koneksi.php");
session_name("verify");
session_start();
$loginuser = $_SESSION['login_user'];
$passuser = $_SESSION['pass_user'];
echo $_SESSION['login_user'];
echo"<br>";
echo $_SESSION['pass_user'];
echo"<br>";
echo $_SESSION['id_user'];

$admin = $pdo_conn->prepare("SELECT * FROM user WHERE username_penyewa = 'kelompok6' and pass_penyewa = '123'");
$row = $admin->fetch(PDO::FETCH_ASSOC);
if(empty($row['username_penyewa']))
{
    echo "Username atau password yang dimasukan tidak valid";
    echo"<br/><a href='formloginadmin.php'>Login Ulang</a>";
}
else 
{
    $_SESSION['login_user'] = $_POST['userlog'];
    echo $_SESSION['login_user'];
    $_SESSION['id_user'] = $row['id_admin'];
    echo $_SESSION['id_user'];
    header("location: masukadmin.php");
}
?>