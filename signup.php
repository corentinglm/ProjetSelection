<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Infinite Amethyst</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/styleSignup.css">
    <script src="../scripts/splash.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>

<body>

    <?php

    // Offline ( Comment to activate signup system )
    header('location: ../errors/indev.php');

    ?>

    <body>

        <!-- Prevent textbox username from being empty -->
        <script type="text/javascript">
            function isEmpty() {
                let textBox
                textBox = document.getElementById("usrname").value;
                if (textBox == '') {
                    alert("Cannot be empty");
                    return false;
                }
            }
        </script>


        <?php


        // obtention des deux GET, info ou error

        if (isset($_GET['error'])) {
            $get = $_GET['error'];
        } else {
            $get = '';
        }

        // J'ai eu des problèmes de session en double donc je vais considérer que si l'utilisateur attérit sur cette page c'est qu'il n'a pas de session et par conséquent on va la destroy pour etre bien sur

        session_start();
        session_destroy();
        ?>

        <section class="left">
            <section class="text1">
                <?php
                $greet = 'Inscrivez-vous !';

                if (isset($_GET['error']) && $_GET['error'] == 'badPassword') {
                    echo 'TODO';
                }

                ?>
                <p id="welcome">
                    <?php echo $greet ?>
                </p>

                <?php

                if (isset($info) && $info == 'disconnected') {
                    echo "<p> <br> Déconnexion effectuée avec succès.</p>";
                }

                if ($get == 'badPassword') {

                    echo '<p> <br> Erreur: Mot de passe/Compte invalide</p>';
                }

                ?>

                <hr>

                <!-- la page principale n'est plus la page de login, mais index, index est la page de menu, mais redirige vers le login si l'user n'est pas connecté, j'exploiterais les sessions et cookies pour rester connecter, puis je ferais un système de login, et ce sera prêt, en ce qui concerne les différentes pages, je vais bricoler un peu un truc avec une méthode get -->
                <form method="post" action="../signup-process.php">
                    <div class="contentBx">
                        <div class="inputBx">

                            <input id="usrname" placeholder="Avec un vrai système de login!" type="text" name="username" class="txtBox">
                        </div>

                        <div class="labelUsr">
                            <span class="txtLabel">Nom d'utilisateur</span>
                        </div>

                        <div class="inputBx">

                            <input type="password" placeholder="Mot de passe crypté !" name="password" class="txtBox">
                        </div>
                        <div class="labelPass">
                            <span class="txtLabel">Mot de passe</span>
                        </div>

                        <div class="inputBx">

                            <input type="text" placeholder="prénom" name="surname" class="txtBox">
                        </div>

                        <div class="labelPass">
                            <span class="txtLabel">Prénom</span>
                        </div>

                        <div class="inputBx">

                            <input type="text" placeholder="nom" name="name" class="txtBox">
                        </div>

                        <div class="labelPass">
                            <span class="txtLabel">Nom</span>
                        </div>



                        <div class="remember">

                            <button onClick="return isEmpty()" class="connectBtn" type="submit" value="se connecter">
                                Se connecter

                            </button>
                        </div>

                    </div>

                </form>

            </section>

            <footer>
                <div class="about">
                    <a href="version">Corentin Guillaume - 2022 - Infinite Amethyst 1.0 </a>

                </div>

            </footer>
        </section>
        <section class="right">
            <img src="assets\rightPane.png" class="img">

        </section>

    </body>

</html>