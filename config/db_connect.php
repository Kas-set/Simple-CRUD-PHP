<?php
   define('DB_HOST', 'localhost');
   define('DB_USER', 'root');
   define('DB_PASS', '');
   define('DB_NAME', 'crudLearning');

   $connect = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
   if($connect ->connect_error){
    die("Failure to connect ");
   }
   echo"Connected";
    
?>