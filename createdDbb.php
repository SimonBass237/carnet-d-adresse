<!-- creation de la bd -->
<?php
$server='localhost';
$username='root';
$password='';
try {
    $dbco=new PDO("mysql:host=$server;", $username, $password);
    // $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)
    $query="CREATE DATABASE test";
    $dbco->exec($query);
    echo 'DB create <br>'; 
    
} catch(PDOException $e){
    echo "Erreur :" .$e->getMessage();
}
?>