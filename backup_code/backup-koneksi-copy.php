<?php 
try { 
    $pdo_conn = new PDO('mysql:host=remotemysql.com:3306;dbname=v0p9UyNpxs', 'v0p9UyNpxs', 'zO2Q5GwKl6',
    array(PDO::ATTR_PERSISTENT => true)); 
} 
catch(PDOException $e) { echo $e->getMessage(); 
} 
?>

<?php 
try { 
    $pdo_conn = new PDO('mysql:host=34.116.89.81;dbname=rental_mobil', 'root', 'sRX3s12DDz533d',
    array(PDO::ATTR_PERSISTENT => true)); 
} 
catch(PDOException $e) { echo $e->getMessage(); 
} 
?>
