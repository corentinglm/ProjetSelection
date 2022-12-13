<?php

//  Handling Database Connection
// INFO : se connecte à la database pour la manipulation de données

// Le login se fait maintenant avec les classes Database et Users


$dbUsername = 'guillaume';
$dbPassword = 'guillaume1337';
$dbserv = 'localhost';
$dbName = "ProjetSelection";

try {
    $conn = new PDO("mysql:host=" . $dbserv . ";dbname=" . $dbName, $dbUsername, $dbPassword);
} catch (PDOException $e) {
    header('location: ./errors/fatalError.php');
    exit();
}
