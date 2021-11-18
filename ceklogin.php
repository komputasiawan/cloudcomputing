<?php
require_once("koneksi.php");
session_name("verify");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$user = $pdo_conn->prepare('SELECT * FROM user WHERE username_penyewa = :username and pass_penyewa = :pass');
$user->execute(array(
                  ':username' => $_POST['userlog'],
                  ':pass' => $_POST['passlog']
                  ));
$row = $user->fetch(PDO::FETCH_ASSOC);
if(empty($row['username_penyewa']))
{
    echo "Username atau password yang dimasukan tidak valid";
    echo"<br/><a href='formloginuser.php'>Login Ulang</a>";
}
else 
{
    $_SESSION['login_user'] = $_POST['userlog'];
    $_SESSION['level_user'] = $row['level'];
    header("location: masukuser.php");
}
}
?>