<?php

// Clearing cookies 
if(isset($_COOKIE['surname'])){
    
    setcookie('surname', $data['prenom'], time() - (86400 * 30), "/");
    setcookie('username', $data['prenom'], time() - (86400 * 30), "/");
    header('location: ../');

} else{
    header('location: ../');
}


?>