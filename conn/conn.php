<?php


$servername = "localhost";
$username = "root";
$password = "g9uhpohvp";

    try{
        $conn = new PDO("mysql:host=$servername;dbname=flower", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      

    } catch(PDOException $e){
        echo "Connection failed" . $e->getMessage();
    }





?>