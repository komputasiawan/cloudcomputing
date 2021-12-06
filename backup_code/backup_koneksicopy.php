<?php 
try { 
    $pdo_conn = new PDO('mysql:host=b8jdbgjyk3o6ikqlwhox-mysql.services.clever-cloud.com:3306;dbname=b8jdbgjyk3o6ikqlwhox', 'uf9hqqqhyvghavva', 'SINRgPtJWA9j3Qisbama',
    array(PDO::ATTR_PERSISTENT => true)); 
} 
catch(PDOException $e) { echo $e->getMessage(); 
} 
?>
