<?php
include("../config/db_connect.php");
$connect->select_db(DB_NAME);


// Sélectionner la base de données
$connect->select_db(DB_NAME);
// Créer la table users
$queryCreateTable = "
    CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nom VARCHAR(255) NOT NULL,
        prenom VARCHAR(255) NOT NULL,
        age INT NOT NULL
    )
";
$connect->query($queryCreateTable);



    


?>