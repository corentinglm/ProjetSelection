<?php


// WE BUILT THIS CITY ON ROCK AND ROLL.

// Verbindung mit Datenbank ( en allemand ça change un peu )
require_once("connection.php");

session_start();

// SecuritySystem.


    if( !isset($_SESSION['session']) or $_SESSION['session'] != session_id()){
        header('location: ../login');
        exit();
    }




// query with every values 
$sql = "INSERT INTO users (`prenom`, `nom`, `username`, `password`,`role`) VALUES (:prenom, :nom, :username,:pass,:role)";

$res = $conn->prepare($sql);


if (isset($_POST["username"]) && isset($_POST["surname"]) && isset($_POST["name"]) && isset($_POST["password"]) && isset($_POST["role"])) {


    // declaring values

    $prenom = $_POST['surname'];
    $nom = $_POST['name'];
    $username = $_POST['username'];

    $pass = $_POST['password'];
    $role = $_POST['role'];


    //  cryptage du password ! ( super!!! )
    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);



    // making the query
    $res->execute(array(':prenom' => $prenom, ':nom' => $nom, ':username' => $username, ':pass' => $hashed_pass, ':role' => $role));

    //? J'ai passé 10mn à inspecter le payload dans la section Network de chrome
    //  Mais pourquoi malgré un payload complet il ne se passe rien?
    //* J'avais oublié le mail, y'avais pas de text box pour le mail. Bon sang
    // * ah et là j'avais oublié admin, la fatigue arrive.....

    // UPDATE: ça marche.

    // redirection
    header('location: make?action=see-accounts');

} else {
    header('location: make?action=add-user-account&error=empty');

}






?>