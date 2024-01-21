<?php
include('../controller/modificationdata.php');
foreach ($user as $data):
?>

<!DOCTYPE html>
<?php
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <div>
        <a href="./affiche.php">Retourner la liste des Inscrits</a>
    </div>
  
    <div>
        <form action="#" method="POST">
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" value="<?php echo $data['nom']?>">
                <span>
                    <?php if(!empty($nomError)){
                        echo $nomError;
                    } ?>
                </span>
            </div>
            <div>
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom" value="<?php echo $data['prenom']?>" > 
                <span>
                    <?php if(!empty($prenomError)){
                        echo $prenomError;
                    } ?>
                </span>
            </div>
            <div>
                <label for="age">Age</label>
                <input type="text" name="age" id="age" value="<?php echo $data['age']?> ">
                <span>
                    <?php if(!empty($ageError)){
                        echo $ageError;
                    } ?>
                </span>
            </div>
            <div>
                <button type="submit" name="submit">Modifier</button>
            </div>



        </form>
    </div>
<?php endforeach ?>
</body>
</html>