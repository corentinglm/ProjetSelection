<?php 

// on get la deadline

require_once('connection.php');
$sql='SELECT * FROM other';

$res=$conn->prepare($sql);
$res->execute();

$data = $res->fetch(PDO::FETCH_ASSOC);

$deadline = $data["deadline"];

var_dump($_SESSION);

?>




<div class="welcome">
        <div class="mainTitle">Bienvenue, <?php echo $_SESSION["surname"] ?> </div>

        <div class="actionList">


            <ul>
                <h1>Accès rapide</h1>
                <li><a href="make?action=download-ranking">- Accéder au classement </a></li>
                
            </ul>

            </ul>



        </div>



    </div>

    <section class="right">
        <div class="container">
            <div class="glance">En un coup d'oeil.</div>

            <div class="title">
                Etat du classement

            </div>
            <div class="checkup">
                Classement prêt

            </div>

            <div class="buttonContinue">
                <a href="make?action=download-ranking">Voir le classement</a>
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

            </div>

            <div class="title">Paramètre de mon compte</div>
            <div class="buttonContinue"><a href="">Gérer mon compte</a></div>
        
        </div>
    </section>
