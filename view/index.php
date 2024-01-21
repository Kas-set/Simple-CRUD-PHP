<?php
include('../controller/recuperationdata.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <div>
        <a href="./affiche.php">Afficher la liste des Inscrits</a>
    </div>
  
    <div>
        <form action="#" method="POST">
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom">
                <span>
                    <?php if(!empty($nomError)){
                        echo $nomError;
                    } ?>
                </span>
            </div>
            <div>
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom"> 
                <span>
                    <?php if(!empty($prenomError)){
                        echo $prenomError;
                    } ?>
                </span>
            </div>
            <div>
                <label for="age">Age</label>
                <input type="text" name="age" id="age">
                <span>
                    <?php if(!empty($ageError)){
                        echo $ageError;
                    } ?>
                </span>
            </div>
            <div>
                <button type="submit" name="submit">S'inscrire</button>
            </div>



        </form>
    </div>

</body>
</html>