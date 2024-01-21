<?php 
include('../model/add.php');


$query = "SELECT * FROM `users`";
$resultats = mysqli_query($connect, $query);
$users = mysqli_fetch_all($resultats, MYSQLI_ASSOC);


?>