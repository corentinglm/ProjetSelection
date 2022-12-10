<?php 

//  Handling Database Connection
// SecuritySystem.


$dbUsername = 'guillaume';
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