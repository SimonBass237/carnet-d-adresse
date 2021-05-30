<?php
include("./bd.php");
if (isset($_POST['adresseAjouter'])){
    if (!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['telephone']) AND !empty($_POST['email']) ) {
        
        // $id = htmlspecialchars($_POST['id']) ;
        $nom = nl2br(htmlspecialchars($_POST['nom']));
        $prenom = nl2br(htmlspecialchars($_POST['prenom']));
        
        $telephone = htmlspecialchars($_POST['telephone']);
        $email = htmlspecialchars($_POST['email']);
        $add_adress = $bdd->prepare("INSERT INTO contact(nom,prenom,telephone,email) VALUES(?, ?, ?, ?)");
        $add_adress->execute(array($nom, $prenom, $telephone, $email));
        if($add_adress){
            echo " <script>alert('adresse ajouter')</script>";
        }
        else{
            echo " <script>alert('essayer encore')</script>";
        }
    }
    else {
        $msg="<script>alert('Remplir tout les champs')</script>" ;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="padd_marg text_align_center" style="">Ajouter une adresse</div> <br>
    <form method="POST" enctype="multipart/form-data">
        <table align="center" class="padd_marg">
            <tr>
                <td class="padd_marg"><label >Nom</label></td>
                <td><input class="button" type="text" name="nom"></td>
            </tr>
            <tr>
                <td class="padd_marg"><label>Prénom</label></td>
                <td><input class="button" type="text" name="prenom"></td>
            </tr>
            <tr>
                <td class="padd_marg"><label>Téléphone</label></td>
                <td><input class="button" type='tel' name="telephone"></input></td>
            </tr>
            <tr>
                <td class="padd_marg "><label>Email</label></td>
                <td><input class="button" type='email' name="email"></input></td>
            </tr>
            <tr>
                <td class="padd_marg"><input class="button" type="submit" name="adresseAjouter" value="Sauvegarder" /></td>
            </tr>    
        </table> 
    </form>
    <?php
    if(isset($msg)){
        echo $msg;
    }
    ?>

    <div class="text_align_center padd_marg"><a class="button" href="./consulter.php">Consulter le carnet</a></div>
</body>
</html>