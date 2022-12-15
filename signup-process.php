<?php

// HANDLING USER-PROCESSED SIGNUP

require_once('connection.php');

session_start();

try{
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['surname']) && isset($_POST['name'])) {

    // query with every values 

    $sql = "INSERT INTO users (`prenom`, `nom`, `username`, `password`,`role`) VALUES (:prenom, :nom, :username,:pass,:role)";

    
    $prenom = $_POST['surname'];
    $nom = $_POST['name'];
    $username = $_POST['username'];
    $role = 'prof';
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // making the query
    $res = $conn->prepare($sql);
    $res->execute(array(':prenom' => $prenom, ':nom' => $nom, ':username' => $username, ':role' => $role, ':pass' => $password));

    header('location: ../login?info=accountCreated');


}} catch(PDOException){
    header('location: ../signup?error=request');
}