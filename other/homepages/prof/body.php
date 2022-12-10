<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Prof</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>

<?php 

//* DEPRECATED: Avant, je voulais accéder aux informations directement avec des requêtes SQL, maintenant, tout se fait lors de la connexion, on stocke tout ça directement dans la $_SESSION! Mon dieu qu'est ce que j'aime programmer

//* Parcontre, je pense utiliser cette méthode pour récuperer tout ce qui est information globale, type deadline ou nombre d'élèves restant à corriger.


//  on va récuperer les données de la table other pour entre autre obtenir la deadline et le nb d'élèves restant a corriger bref

// PDO

require_once('connection.php');

$sql = "SELECT * FROM other";

$res=$conn->prepare($sql);
$res->execute();

$data = $res->fetch(PDO::FETCH_ASSOC);

$totalEleve = $data["total_eleve"];
$deadline = $data["deadline"];

$sql = "SELECT * FROM eleve";
$res=$conn->prepare($sql);
$res->execute();

$data = $res->fetchAll();

// count = le nombre de grilles remplies
// toComplete va être égale au nombre d'élèves total - les grilles faites
// * update: ça marche! 72 elèves j'ai mis, moins la valeur, la maintenant j'ai bien 71 griles restantes, super
$toComplete =  $totalEleve - count($data);



//  C'est ok ! 


//! OLD (MYSQLI): DEPRECATED!

// //  prions le saint mysqli

// // connect to database
// $conn = mysqli_connect('localhost','guillaume','guillaume1337','ProjetSelection');

// // Check connection
// if(!$conn){
    
//     $name = 'Connection error: '. mysqli_connect_error();
// }

// // write query for username
// $sql = "SELECT username FROM users";

// //  making query & getting result

// $result = mysqli_query($conn,$sql);

// // fetcjing the results, returning as an array

// $usernames = mysqli_fetch_all($result, MYSQLI_ASSOC);

// // it just works.

// mysqli_free_result($result);

// // close connection to db;
// mysqli_close($conn);

// $name = implode($usernames[0])

?>



<div class="welcome">
        <div class="mainTitle"><?php echo $_SESSION["greetings"]?></div>

        <div class="actionList">


            <ul>
                <h1>Accès rapide</h1>
                <li><a href="../make?action=see-table">- Modifier mes grilles</a></li>
                <li><a href="../make?action=see-ranking">- Accéder au classement</a></li>
                

            </ul>



        </div>



    </div>

    <section class="right">
        <div class="container">
            <div class="glance">En un coup d'oeil.</div>

            <div class="title">
                Il vous reste...

            </div>
            <div class="checkup">
                <?php echo $toComplete ?> grille(s) à compléter.

            </div>

            <div class="buttonContinue">
                <a href="../make?action=new-row">Continuer de compléter mes grilles</a>
            </div>


        </div>

        <div class="container2">
            <div class="title">
                Deadline

            </div>
            <div class="checkup">
                <?php echo $deadline ?>
            </div>

            <div class="buttonContinue">
                <a href="../make?action=see-ranking">Consulter le classement</a>
            </div>

            <div class="title">Paramètres de mon compte</div>
            <div class="buttonContinue"><a href="./indev.php">Gérer mon compte</a></div>


        </div>
    </section>
