<?php 

try { 
    $pdo_conn = new PDO('mysql:host=localhost;dbname=rental_mobil', 'root', '',
    array(PDO::ATTR_PERSISTENT => true)); 
} 
catch(PDOException $e) { echo $e->getMessage(); 
} 

$con = mysqli_connect("localhost", "root","","rental_mobil");

if(mysqli_connect_errno()) {
	echo "Failed to connect " . mysqli_connect_errno();
}

?>