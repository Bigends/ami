<?php 

try {
    $db = new PDO('mysql:host=localhost:3306;dbname=HI-907728-CB_AMI;charset=utf8','HI-907728-CB_chris','Amiteam973');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
    return $db;
} catch (PDOException $e) {
    echo "erreur de la connexion à la base de donnée".$e->getMessage();
}


?>