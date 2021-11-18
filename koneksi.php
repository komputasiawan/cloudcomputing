<?php 
try { 
    $pdo_conn = new PDO('mysql:host=sql6.freemysqlhosting.net:3306;dbname=sql6451167', 'sql6451167', 'SLzCyKMvYR',
    array(PDO::ATTR_PERSISTENT => true)); 
} 
catch(PDOException $e) { echo $e->getMessage(); 
} 
?>
