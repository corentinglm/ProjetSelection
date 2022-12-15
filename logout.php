<?php


require_once('./classes/logs.php');

// * Handling loggin-out

// LOGS
(new Logs)->handleLogout();


// destroying session: autologin caduc
session_start();
session_destroy();


// redirection
header("location: login?info=disconnected");

// done.
