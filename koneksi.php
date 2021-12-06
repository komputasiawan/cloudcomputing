<?php 

try { 
<<<<<<< HEAD
    $pdo_conn = new PDO('mysql:host=localhost;dbname=rental_mobil', 'root', '',
=======
    $pdo_conn = new PDO('mysql:host=remotemysql.com:3306;dbname=v0p9UyNpxs', 'v0p9UyNpxs', 'zO2Q5GwKl6',
>>>>>>> 2ebf4a3b1e8a858ae25c7e8b2c37bbe648f1f9f5
    array(PDO::ATTR_PERSISTENT => true)); 
} 
catch(PDOException $e) { echo $e->getMessage(); 
} 

$con = mysqli_connect("localhost", "root","","rental_mobil");

if(mysqli_connect_errno()) {
	echo "Failed to connect " . mysqli_connect_errno();
}

?>