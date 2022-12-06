<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    

</head>

<?php 

// PAGE INDEX: PAGES D'ACCUEUIL ET GERE LE SYSTEME DE LOGIN

// connecting to database
require_once("connection.php");



// * ça marche, vraiment ça marche, index redirige bien vers login si on est pas connecté, et elle include les bonnes pages si on se log, MA GNI FIQUE, beaucoup mieux avec cette structure "/login" 

// affiche page liée au compte user
session_start();


//* gère le retour en arrière, si la session est déjà faite au niveau du role alors on affiche la page sans interroger le serveur. on exit() si toutes les conditions sont réunies
// ! funfact: ça fait 3 jours que j'essaye de faire un autologin, je viens de le créer sans faire exprès lol 

if(isset($_SESSION['role'])){
    switch ($_SESSION['role']) {
        case 'secretaire';
     include("homepages/secretaire/header.php");
     include("homepages/secretaire/body.php"); 
     include("homepages/secretaire/footer.php");
     exit();
     break;

    case 'admin';
     include("homepages/admin/header.php");
     include("homepages/admin/body.php");
     include("homepages/admin/footer.php");
     exit();
     break;
    

    case 'prof';
     include("homepages/prof/header.php");
     include("homepages/prof/body.php");
     include("homepages/prof/footer.php");
     exit();
     break;
        
        
    }
    
}


// ! BUILDING LOGIN SYSTEM 
// * It. just. works.


if(isset($_POST["username"]) && isset($_POST['password'])){

//  PDO, getting from connection.php $conn

$username = $_POST["username"];
$password = $_POST["password"];


$sql = "SELECT * FROM users WHERE username=:username";

$res=$conn->prepare($sql);
$res->execute(array(':username'=>$username));

$data = $res->fetch(PDO::FETCH_ASSOC);



try{
if($data['username'] == $username && password_verify($password,$data['password'])){
    //* Code to login



    // creating cookies for the autologin system
    

    setcookie('username', $data['username'], time() + (86400 * 30), "/");
    setcookie('role', $data['role'], time() + (86400 * 30), "/");
    setcookie('complete-name', $data['prenom'].' '. $data['nom'], time() + (86400 * 30), "/");
    
    

    // creating sessions in order to keep informations 
    $_SESSION['id'] = $data['ID'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['name'] = $data['nom'];
    $_SESSION['surname'] = $data['prenom'];
    $_SESSION['role'] = $data['role'];
    $_SESSION['complete-name'] = $data['prenom']. ' '. $data['nom'];
    $_SESSION['status'] = 'OK';

    switch($data['role']){
    
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

}} else{
    
    header("location: ../login?error=badPassword");
    
    
    
//  catch exception en gros c'est pour renvoyer a la login page si on arrive pas à faire le if, le else de fin, c'est un peu pareil, ouais en gros c'est du bricolage faut l'avouer mais ça marche plutot pas mal

}} catch(Exception){
    header("location: ../login");

}} else{
    header("location: ../login");
}



//? ça marche??? j'y crois même pas.
// * BON, maintenant je dois coder un système qui me permette de RESTER connecté 
//? avec les sessions ?

//! DEPRECATED ( OLD METHOD ) je la laisse en souvenir 



// if(isset($_POST["username"])){



// switch($_POST["username"]){



// case 'secretaire';
//     include("homepages/secretaire/header.php");
//     include("homepages/secretaire/body.php"); 
//     include("homepages/secretaire/footer.php");
//     break;
    
    

// case 'admin';
//     include("homepages/admin/header.php");
//     include("homepages/admin/body.php");
//     include("homepages/admin/footer.php");
//     break;
    

// case 'prof';
//     include("homepages/prof/header.php");
//     include("homepages/prof/body.php");
//     include("homepages/prof/footer.php");
//     break;


//     // redirect if not connected
// default;
// header("location: login?error=badPassword");

// exit();

    

// }} else{
//     //  default 
//     header("location: login");
    
// exit();







?>



</body>

</html>