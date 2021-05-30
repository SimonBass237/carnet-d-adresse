<?php
include("./bd.php");

if (isset($_GET['id']) AND !empty($_GET['id'])) {
    $getid=$_GET['id'];
    // echo "$getid";
    $select=$bdd->prepare('SELECT *FROM contact WHERE id = ?');
    $select->execute(array($getid));
    $contact= $select->fetch();    
    if (isset($_POST['adressModifier'])) {
    //   recuperztion des input 
        $nom_modif=$_POST['nom'];

        $prenom_modif=$_POST['prenom'];
        $tel_modif=$_POST['telephone'];
        $email_modif=$_POST['email'];

        $update_nom = $bdd->prepare('UPDATE contact SET nom = ?  WHERE id = ?');
        $update_nom->execute(array($nom_modif, $getid));

        $update_prenom = $bdd->prepare('UPDATE contact SET prenom = ? WHERE id = ?');
        $update_prenom->execute(array($prenom_modif, $getid));

        $update_telephone = $bdd->prepare('UPDATE contact SET telephone = ? WHERE id = ?');
        $update_telephone->execute(array($tel_modif, $getid));

        $update_email = $bdd->prepare('UPDATE contact SET email = ? WHERE id = ?');
        $update_email->execute(array($email_modif, $getid));

        
        header('Location: consulter.php');
    }
        

}else {
    echo'pas la';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier adresse</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <table align="center" class="padd_marg">
            <tr>
                <td class="padd_marg"><label >Nom</label></td>
                <td><input type="text" name="nom" value="<?=$contact['nom'];?>"></td>
            </tr>
            <tr>
                <td class="padd_marg"><label>Prénom</label></td>
                <td><input type="text" name="prenom" value="<?=$contact['prenom'];?>"></td>
            </tr>
            <tr>
                <td class="padd_marg"><label>Téléphone</label></td>
                <td><input type='tel' name="telephone" value="<?=$contact['telephone'];?>"></input></td>
            </tr>
            <tr>
                <td class="padd_marg"><label>Email</label></td>
                <td><input type='email' name="email" value="<?=$contact['email'];?>"></input></td>
            </tr>
            <tr>
                <td class="padd_marg"><input type="submit" name="adressModifier" value="Sauvegarder" /></td>
            </tr>    
        </table> 
    </form>
</body>
</html>