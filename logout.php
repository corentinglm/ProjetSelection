<?php


// * Handling loggin-out


// destroying session: autologin caduc
session_start();
session_destroy();


// redirection
header("location: ../login?info=disconnected");

// done.
