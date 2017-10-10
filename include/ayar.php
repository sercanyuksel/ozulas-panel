<?php


require('fnk.php');


$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=ozulas", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "HATA: " . $e->getMessage();
    }
$conn->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");


?>