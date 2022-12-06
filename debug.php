<?php

// Sert à recréer un compte admin 'Corentin Guillaume'

require_once("connection.php");


$sql = "INSERT INTO users (`prenom`, `nom`, `username`, `password`,`role`) VALUES (:prenom, :nom, :username,:pass,:role)";

$res=$conn->prepare($sql);

$prenom = "Corentin";
$nom = "Guillaume";
$username = "corentinglm";

$pass = "1337";
$role = "admin";

$hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

$res->execute(array(':prenom'=>$prenom,':nom'=>$nom,':username'=>$username,':pass'=>$hashed_pass,':role'=>$role));

header('location: ../');



?>