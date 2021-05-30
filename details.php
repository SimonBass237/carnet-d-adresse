<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails adresse</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        table,tr,td{
            border-collapse: collapse;
            border: 1px solid black;
            width:50%;
            background-color: #f1efef;
        }
    </style>
</head>
<body>
    <?php
    include("./bd.php");
    
    if (isset($_GET['id']) AND !empty($_GET['id'])) {
        $getid=$_GET['id'];
        // echo "$getid";
        $detail=$bdd->prepare('SELECT *FROM contact WHERE id = ?');
        $detail->execute(array($getid));
        $adress= $detail->fetch();
        // echo $adresse['nom'] .' '. $adresse['prenom'].' '. '<br>'. $adresse['telephone'].' '.$adresse['email'];
    }
    else {
        echo'pas la';
    }
    ?>

    <div class="padd_marg row">
        <table align="center"   class="col-12-xl col-12 padd_marg">
            <tr>
                <td class="padd_marg">Nom</td>
                <td class="padd_marg"><?php echo $adress['nom']; ?></td>
            </tr>
            <tr>
                <td class="padd_marg">Prénom</td>
                <td class="padd_marg"><?php echo $adress['prenom']; ?></td>
            </tr>
            <tr>
                <td class="padd_marg">Téléphone</td>
                <td class="padd_marg"><?php echo $adress['telephone']; ?></td>
            </tr>
            <tr>
                <td class="padd_marg">Email</td>
                <td class="padd_marg"><?php echo $adress['email']; ?></td>
            </tr>
        </table>
        <ul class="padd_marg row justify_between">
            <li class=" col-5-xl text_align_center padd_marg"><a class="button" href="modifier.php?id=<?= $adress['id'];?>" > Modifier </a></li>
            <li class=" col-6-xl text_align_center padd_marg"><a class="button" href="supprimer.php?id=<?= $adress['id'];?>" > Supprimer </a></li>
        </ul>
    </div>
    
 

</body>
</html>