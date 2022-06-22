<?php
$HOST = "localhost";
$USER = "root";
$PASSWORD = "";
$DATABASE = "school";


//  define("HOST", '127.0.0.1');
//  define("DB_NAME", 'school');
//  define("DB_USER", 'root');
//  define("PASSWORD", '');

 try {
     $con = new PDO("mysql:host=" . $HOST . ";dbname=" . $DATABASE, $USER, $PASSWORD);
 } catch (Exception $e) {
     echo $e->getMessage();
 }
?>
