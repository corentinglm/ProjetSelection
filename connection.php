<?php

//  Handling Database Connection
// INFO : se connecte à la database pour la manipulation de données

// Le login se fait maintenant avec les classes Database et Users

// Changez aussi classes/database.php


$dbUsername = 'guillaume';
$dbPassword = 'guillaume1337';
$dbserv = 'localhost';
$dbName = "projetselection";

try {

    $conn = new PDO("mysql:host=" . $dbserv . ";dbname=" . $dbName . ";charset=UTF8", $dbUsername, $dbPassword);
} catch (PDOException $e) {
    include('./errors/fatalError.php');
    exit();
}
