<?php
    include('../model/add.php');
    $id = $_GET['id'];

    $query = "SELECT * FROM `users` WHERE id = $id ";
    $resultats = mysqli_query($connect, $query);
    $user = mysqli_fetch_all($resultats, MYSQLI_ASSOC);


    function modification($nom, $prenom, $age){
        $id = $GLOBALS['id'];  // Ajout de cette ligne pour récupérer l'id

        $query = "UPDATE `users` SET `nom`='$nom', `prenom`='$prenom', `age`='$age' WHERE id = $id";    
         
        if(mysqli_query($GLOBALS['connect'], $query)){
            echo'ça marche';
            header('Location: ../view/affiche.php?msg=  utilisateur modifier avec success');
        }else{
            echo" Unne erreur est survenue ".mysqli_error($connect);
        
        }
    }

    if(isset( $_POST['submit'])){
        $nomError = "" ;$prenomError="";$ageError = "";
        $nom ='';
        $prenom ='';
            $age ='';
          
        
            if(empty($_POST['nom'])){
                $nomError ="Le nom doit être renseigner";
            }
            if(empty($_POST['prenom'])){
                $prenomError ="Le prenom doit être renseigner";
            }
            if(empty($_POST['age'])){
                $ageError ="l'age  doit être renseigner";
            }
        
            if(empty($nomError) && empty($prenomError) && empty($ageError)){
                $nom = htmlspecialchars($_POST['nom']);
                $prenom = htmlspecialchars($_POST['prenom']);
                $age = htmlspecialchars($_POST['age']);
        
                modification($nom, $prenom, $age);
        }
    }
        
        

?>