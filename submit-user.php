<?php

// HANDLING USER DATABASE MODIFICATION
// Submitting changes to database

require_once('connection.php');

session_start();

// SecuritySystem

if (!isset($_SESSION['session']) or $_SESSION['session'] != session_id()) {
    header('location: ../login');
    exit();
}
if (isset($_POST['username'])) {

    $sql = 'UPDATE users SET prenom=:prenom, nom=:nom, username=:username,role=:role WHERE id=:id';

    $id = $_POST['ID'];
    $prenom = $_POST['surname'];
    $nom = $_POST['name'];
    $username = $_POST['username'];
    $role = $_POST['role'];

    // making the query
    $res = $conn->prepare($sql);
    $res->execute(array(':id' => $id, ':prenom' => $prenom, ':nom' => $nom, ':username' => $username, ':role' => $role));

    header('location: make?action=see-accounts');

}
