<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer...</title>
   

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>

<body>



    <?php 

//! Note à moi même ; Impossible d'aller fetch les données depuis les pages que j'include plus bas, en fait mysqli était tout simplement innacessible, donc pour utiliser mysqli, pas le choix, il faut faire les requêtes depuis la page SOURCE, c'est à dire selection.php, celle ci ++ les variables sont globales entre les pages include ( wow ) ; super, j'ai perdu 45mn... mais le tableau fonctionne! Et c'était le plus dur à faire, hourra!

// affiche page liée au compte user
session_start();

// connect to database
$conn = mysqli_connect('localhost','guillaume','guillaume1337','ProjetSelection');

// Check connection
if(!$conn){
    
    $name = 'Connection error: '. mysqli_connect_error();
}

// write query for username
$sql = "SELECT * FROM eleve";
$result = $conn->query($sql);

//  making query & getting result

$result = mysqli_query($conn,$sql);


// TODO: relier par boutons les différentes pages, à faire avec une méthode post?
// ! Tout fonctionne ! On commence à avoir un site personnalisé; aussi, l'interface est innacessible par l'accès avec le lien.

// * Deuxième étape, ajouter depuis le site. C'est parti

$temp='grille';

if(isset($temp)){



switch($temp){



case 'adminAccounts';
    include("../homepages/admin/header.php");
    include("../pages/adminAccounts.php");
    
    
    break;
    
    

case 'adminAccountsAdd';
    include("../homepages/admin/header.php");
    include("../pages/adminAccountsAdd.php");;
    break;
    

case 'classement';
    include("../homepages/prof/header.php");
    include("../pages/interfaceClassement.php");;
    break;

case 'classementSecretaire';
    include("../homepages/secretaire/header.php");
    include("../pages/interfaceClassementSecretaire.php");;
    break;

case 'grille';
    include("../homepages/prof/header.php");
    include("../pages/interfaceGrille.php");;
    break;

case 'newGrille';
    include("../homepages/prof/header.php");
    include("../pages/newGrille.php");;
    break;
    
default;
    include("/var/www/html/errors/error404");
    break;

    
}} else{
    //  default 
    include("/var/www/html/errors/error404.php");

}


?>