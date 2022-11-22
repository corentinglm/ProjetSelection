<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Personnel - Professeur</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styleMain.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>

<body>

    <header>

        <div class="logo">ProjetSelection</div>

        <ul class="navlinks">
            
            <li><a href="#">Accueil</a></li>
            <li><a href="interfaceGrille.html">Mes grilles</a></li>
            <li><a href="interfaceClassement.html">Mon classement</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="about.html">A propos</a></li>
            <li><a href="index.html">Déconnexion</a></li>
            <div class="dark-mode-switch">
                <input id="dark-mode" type="checkbox" onclick="document.documentElement.classList.toggle('dark-mode')"> 
                <label id="switch" for="dark-mode">White 
        </ul>


    </header>

    <div class="header2">
        Vous êtes connecté sur votre espace personnel en tant que Steven P. Jobs ( Professeur )
    </div>

    <div class="welcome">
        <div class="mainTitle">Bienvenue, Steve</div>

        <div class="actionList">


            <ul>
                <h1>Accès rapide</h1>
                <li><a href="interfaceGrille.html">- Modifier mes grilles</a></li>
                <li><a href="interfaceClassement.html">- Accéder au classement</a></li>
                <li><a href="">- Contacter l'administrateur</a></li>
                <li><a href="">- Gérer mon compte</a></li>

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
                42 grilles à compléter.

            </div>

            <div class="buttonContinue">
                <a href="interfaceGrille.html">Continuer de compléter mes grilles</a>
            </div>


        </div>

        <div class="container2">
            <div class="title">
                Deadline

            </div>
            <div class="checkup">
                Mardi 13 Octobre 2020
            </div>

            <div class="buttonContinue">
                <a href="interfaceClassement.html">Consulter le classement</a>
            </div>

            <div class="title">Paramètre de mon compte</div>
            <div class="buttonContinue"><a href="">Gérer mon compte</a></div>


        </div>
    </section>



    <footer>
        Egnom, Inc (C) - 01/04/1976

    </footer>






</body>

</html>