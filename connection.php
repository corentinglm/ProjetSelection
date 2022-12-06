<?php 

//  Handling Database Connection

$dbUsername = 'root';
$dbPassword = 'guillaume1337';
$dbserv = 'localhost';
$dbName = "ProjetSelection";

try{
$conn = new PDO("mysql:host=".$dbserv.";dbname=".$dbName,$dbUsername,$dbPassword);
} catch(PDOException $e ){
    header('location: ./errors/fatalError.php');
    exit();
}

?> 