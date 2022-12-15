
<?php

session_start();

// Refonte totale du système de login

require_once('classes/users.php');
require_once('classes/logs.php');



// Login system
if (isset($_POST['username']) && isset($_POST['password'])) {

    $password = $_POST['password'];
    $username = $_POST['username'];

    $login = (new Users())->passwordVerification($username, $password);


    if ($login) {

        $role = (new Users())->getRole($username);
        (new Users)->createSession($username);
        (new Users)->getData($username);
        (new Users())->setCookies($username);
        // IP tracking & logs 
        (new Logs())->handleLogin();

        header('location: ./');
    } else {
        // Invalid Password
        header('location: login?error=badPassword');
    }
} else {
    // NO POST, redirect
    header('location: login');
}



?>
