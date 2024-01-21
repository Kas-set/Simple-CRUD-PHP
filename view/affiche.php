<?php 
    include('../controller/affichagedata.php');
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./index.php">Ajouter un nouvel utilisateur</a>
    <?php
    if(isset( $_GET['msg'])){
        echo"
            <small>".$_GET['msg']."</small>
        ";
    }
    ?>
    <h2>Liste des utilisateurs</h2>

    <div>
        <table border="1">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>prenom</th>
                    <th>age</th>
                    <th colspan="2">Gestion</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($users  as $resultat):
                ?>
                <tr>
                    <td>
                        <?php echo$resultat['nom']; ?>
                    </td>
                    <td> <?php echo$resultat['prenom']; ?></td>
                    <td> <?php echo$resultat['age'] ;?></td>
                    <td>
                        <button>
                            <a href="./modifier.php?id=<?php echo$resultat['id'] ?>">MODIFIER</a>
                        </button>
                    </td>
                    <td>
                        <button>
                            <a href="../controller/effacerdata.php?id=<?php echo$resultat['id'] ?>">SUPPRIMER</a>
                        </button>
                    </td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>
    
</body>
</html>