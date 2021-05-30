<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body >
    <div class=" "><a class="button" href="ajout.php">Retour</a></div>
    <div class="padd_marg text_align_center">
    <table id="myTableConsulter" >
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>action</th>
        </tr>
        <?php
        include("./bd.php");
        $selectAdress = $bdd->query('SELECT * FROM contact');
        if($selectAdress->rowCount() > 0){
            while ($a = $selectAdress->fetch()) :
                echo"
                    
                <tr>
                   <td>".$a['nom']."</td>
                   <td>".$a['prenom']."</td>
                   <td><a href='details.php?id=" .$a['id']."'>Détails</a></td>
                </tr>";
            endwhile;
        }
    ?>
    </div>
    
    </table>
</body>
</html>