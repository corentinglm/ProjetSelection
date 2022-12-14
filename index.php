<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">


</head>

<?php

require_once('./classes/database.php');
require_once('./classes/logs.php');
session_start();

// Refonte totale du système de login, maintenant dans un fichier PHP à part.


// On vérifie si la base de données est accessible
new Database();



// Session handler
if (isset($_SESSION['session'])) {
    if ($_SESSION['session'] == session_id()) {
        switch ($_SESSION['role']) {

            case 'secretaire';
                include("homepages/secretaire/header.php");
                include("homepages/secretaire/body.php");
                include("homepages/footer.php");
                break;

            case 'admin';
                include("homepages/admin/header.php");
                include("homepages/admin/body.php");
                include("homepages/footer.php");
                break;


            case 'prof';
                include("homepages/prof/header.php");
                include("homepages/prof/body.php");
                include("homepages/footer.php");
                break;
        }
    }
    exit();
} else{
    header('location: ./login');
}


?>



</body>

</html>