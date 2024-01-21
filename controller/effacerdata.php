<?php
include('../model/add.php');
$id = $_GET['id'];
// $msg =$_GET['msg'];

$query = "DELETE  FROM `users` WHERE id =$id ";
$resultats = mysqli_query($connect, $query);

if($resultats){
    header('Location: ../view/affiche.php?msg=Utilisateur supprimer avec success');
}else{
    echo "Un probleme est survenu lors de la Supression";
}


?>