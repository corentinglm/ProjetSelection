<?php 

require_once("connection.php");

//  OBTENTION DU NOMBRE D ELEVES

$sql = "SELECT * FROM eleve";

$res=$conn->prepare($sql);
$res->execute();

$data = $res->fetchAll(PDO::FETCH_ASSOC);

$eleves = count($data);

// DEUXIEME REQUETE SQL POUR OBTENIR LE NB DE COMPTES

$sql = "SELECT * FROM users";

$res=$conn->prepare($sql);
$res->execute();


$data = $res->fetchAll(PDO::FETCH_ASSOC);

$comptes = count($data);


?>



<div class="welcome">
        <div class="mainTitle"><?php echo $_SESSION["greetings"]?></div>

        <div class="actionList">


            <ul>
                <h1>Accès rapide</h1>
                <li><a href="make?action=see-accounts">- Gérer les comptes</a></li>
                <li><a href="make?action=see-table">- Gérer les grilles</a></li>
                <li><a href="make?action=see-ranking">- Consulter le classement</a></li>
                
                
            </ul>
                

            </ul>



        </div>



    </div>

    <section class="right">
        <div class="container">
            <div class="glance">Gestion du site.</div>

            <div class="title">
                Le site comptabilise

            </div>
            <div class="checkup">
                <ul>
                    <li><?php echo $comptes ?> comptes </li>
                    <li><?php echo $eleves ?> grilles d'elèves remplies</li>
                    




                </ul>
                


            </div>

            <div class="buttonContinue">
                <a href="make?action=see-accounts">Gérer les comptes</a>
            </div>


        </div>

       
    </section>