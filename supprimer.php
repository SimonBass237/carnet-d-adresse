<?php
include("./bd.php");

if (isset($_GET['id']) AND !empty($_GET['id'])) {
    $getid=$_GET['id'];
    $supp = $bdd->prepare('DELETE FROM contact WHERE id =?');
    $supp->execute(array($getid));
    $adressSupp= $supp->fetch();
    if ($adressSupp) {
        echo" <script>alert('Contact supprimer')</script>";
        

    }
    header('Location: ajout.php');
    
}else {
    // echo'introuvable';
}
?>