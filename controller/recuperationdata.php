<?php
include('../model/add.php');

function insertion($nom, $prenom, $age){

$query ="INSERT INTO `users`(`id`,`nom`, `prenom`, `age`) VALUES (NULL, '$nom','$prenom','$age')";    

if(mysqli_query($GLOBALS['connect'], $query)){
    echo'ça marche';
    header('Location: ../view/affiche.php?msg= Nouvel utilisateur enregistrer');
}else{
    echo" Unne erreur est survenue ".mysqli_error($connect);

}}
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

        insertion($nom, $prenom, $age);
    }
}


    

       
?>