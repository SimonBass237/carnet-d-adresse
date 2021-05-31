<?php
$server='localhost';
$username='root';
$password='';
$db="carnet_d'adresse";
try{
    $dbco=new PDO("mysql:host=$server;dbname=$db", $username, $password);
    // echo 'Connexion réussie.</br>';
    // $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)

    $sql= "CREATE TABLE contact(
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nom VARCHAR(25) NOT NULL,
        prenom VARCHAR(25) NOT NULL,
        telephone INT(10),
        email VARCHAR(25)NOT NULL
    )";
    $dbco->exec($sql);
    echo' <br> Table créer !';
   
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>