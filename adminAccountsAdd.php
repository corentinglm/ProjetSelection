<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un nouveau compte</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/adminAccountsAdd.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>

<body>

    <header>

        <div class="logo">ProjetSelection</div>

        <ul class="navlinks">

            <li><a href="adminAccounts.html">Accueil</a></li>
            <li><a href="adminAccounts.html">Gérer les comptes</a></li>

            <li><a href="#">Contact</a></li>
            <li><a href="about.html">A propos</a></li>
            <li><a href="index.html">Déconnexion</a></li>
            <div class="dark-mode-switch">
                <input id="dark-mode" type="checkbox" onclick="document.documentElement.classList.toggle('dark-mode')">
                <label id="switch" for="dark-mode">White
        </ul>


    </header>

    <div class="header2">
        Vous êtes connecté sur votre espace personnel en tant que Tim Cook (Administrateur)
    </div>

    <div class="menu">


        <b>Ajouter un nouveau compte...</b>
        <a href="adminAccounts.html">Retour</a>


        <div class="container">


            <form action="">
                <div class="title">
                    <p>Nom et prénom</p>
                    <input type="text" name="name" placeholder="Nom">
                    <input type="text" name="surname" placeholder="Prénom">

                </div>
                <div class="title">
                    <p>Nom d'utilisateur</p>
                    <input type="text" placeholder="Username" name="username">
                

            </div>
            <div class=" title">
                    <p>Rôle</p>
                    <span>Admin<input type="checkbox" name="roleAdmin" id=""></span>
                    <span>Secrétaire<input type="checkbox" name="roleSecretaire" id=""></span>
                    <span>Correcteur<input type="checkbox" name="" id="roleCorrecteur"></span>



                </div>



                <div><button class="button" type="submit" action="adminAccounts.html">Terminer</button>
                    <button type="submit" action="adminAccounts.html">Ajouter un autre compte</button>


                </div>
            </form>






            <!-- <th>Nom</th>
                    <th>Prénom</th>
                    <th>Bac</th>
                    <th>Travail sérieux</th>
                    <th>Absence</th>
                    <th>Attitude/ Comportement</th>
                    <th>Etudes Supérieures</th>
                    <th>Avis PP</th>
                    <th>Avis Proviseur</th>
                    <th>Lettre motivation</th>
                    <th>Remarques</th>
                    <th>Note</th> -->




        </div>









        <footer>
            Egnom, Inc (C) - 01/04/1976

        </footer>






</body>

</html>