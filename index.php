<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">


</head>

<?php

session_start();

// Refonte totale du système de login

require('classes/users.php');


// Session handler
if (isset($_SESSION['session'])) {
    if ($_SESSION['session'] == session_id()) {
        switch ($_SESSION['role']) {

            case 'secretaire';
                include("homepages/secretaire/header.php");
                include("homepages/secretaire/body.php");
                include("homepages/secretaire/footer.php");
                break;

            case 'admin';
                include("homepages/admin/header.php");
                include("homepages/admin/body.php");
                include("homepages/admin/footer.php");
                break;


            case 'prof';
                include("homepages/prof/header.php");
                include("homepages/prof/body.php");
                include("homepages/prof/footer.php");
                break;
        }
    }
    exit();
}

// Login system
if (isset($_POST['username']) && isset($_POST['password'])) {

    $password = $_POST['password'];
    $username = $_POST['username'];

    $login = (new Users())->passwordVerification($username, $password);
    (new Users())->setCookies($username);


    if ($login) {

        $role = (new Users())->getRole($username);
        (new Users)->createSession($username);
        

        switch ($role) {

            case 'secretaire';
                include("homepages/secretaire/header.php");
                include("homepages/secretaire/body.php");
                include("homepages/secretaire/footer.php");
                break;

            case 'admin';
                include("homepages/admin/header.php");
                include("homepages/admin/body.php");
                include("homepages/admin/footer.php");
                break;


            case 'prof';
                include("homepages/prof/header.php");
                include("homepages/prof/body.php");
                include("homepages/prof/footer.php");
                break;
        }
    } else {
        // Invalid Password
        header('location: ../login?error=badPassword');
    }
} else {
    // NO POST, redirect
    header('location: ../login');
}



?>



</body>

</html>