<?php

$serveur="localhost";
$login="root";
$mdp= "";
$base="carnet_d'adresse";

try{
    $bdd=new PDO("mysql:host=$serveur;dbname=$base", $login, $mdp);
    // echo 'Connexion réussie.</br>';
   
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>
