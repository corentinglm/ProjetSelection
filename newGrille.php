<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une grille...</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/newGrille.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>

<body>

    <header>

        <div class="logo">ProjetSelection</div>

        <ul class="navlinks">

            <li><a href="main.html">Accueil</a></li>
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

    <div class="menu">


        <b>Ajouter une nouvelle grille...</b>
        <a href="interfaceGrille.html">Retour</a>

        <form action="">
            <div class="container">
                <div class="title">
                    <p>Nom et prénom</p>
                    <input type="text" placeholder="Nom" name="name">
                    <input type="text" placeholder="Prénom" name="surname">

                </div>


                <div class="title">
                    <p>Bac</p>
                    <span>Série Pro 08 ( liée à l'informatique )<input type="radio" value="pro" name="serieBac" id=""></span>
                    <span>Série S/ES : 12<input type="radio" value="serie-s" name="serieBac" id=""></span>
                    <span>Série L : 09<input type="radio" value="serie-L" name="serieBac" id=""></span>
                    <span>Série STMG : 10<input type="radio" value="stmg" name="serieBac" id=""></span>
                    <span>Autres : 05<input type="radio" value="autre" name="serieBac" id=""></span>

                </div>
                <div class="title">
                    <p>Travail Sérieux</p>
                    <span>Oui (+1)<input value="yes" type="radio" name="travail" id=""></span>
                    <span>Oui (-1)<input value="no" type="radio" name="travail id="></span>

                </div>
                <div class="title">
                    <p>Absence</p>
                    <span>Oui (-2 ou dossier refusé )<input type="radio" value="yes" name="absence" id=""></span>
                    <span>Non (+1)<input type="radio" name="absence" value="no" id=""></span>

                </div>
                <div class="title">
                    <p>Attitude</p>
                    <span>Oui ( dossier refusé !! )<input type="radio" value="yes" name="Attitude" id=""></span>
                    <span>Non ( +1 )<input type="radio" name="Attitude" value="no" id=""></span>



                </div>
                <div class="title">
                    <p>Etudes Supérieures</p>
                    <span>Oui (+1)<input type="radio" name="etudesSup" value="yes" id=""></span>
                    <span>Non (+0)<input type="radio" name="etudesSup" id=""></span>



                </div>
                <div class="title">
                    <p>Avis PP</p>
                    <span>B (+2)<input type="radio" name="avisPP" id=""></span>
                    <span>AB (+1)<input type="radio" name="avisPP" id=""></span>
                    <span>Insuf. (-1)<input type="radio" name="avisPP" id=""></span>
                    <span>Négatif (-2)<input type="radio" name="avisPP" id=""></span>




                </div>
                <div class="title">
                    <p>Avis Proviseur</p>
                    <span>B (+2)<input type="radio" name="" id=""></span>
                    <span>AB (+1)<input type="radio" name="" id=""></span>
                    <span>Insuf. (-1)<input type="radio" name="" id=""></span>
                    <span>Négatif (-2)<input type="radio" name="" id=""></span>



                </div>
                <div class="title">
                    <p>Lettre motivation</p>
                    <span>B (+2)<input type="radio" name="lettreMotivA" id=""></span>
                    <span>AB (+1)<input type="radio" name="lettreMotivAB" id=""></span>
                    <span>Insuf. (-1)<input type="radio" name="" id=""></span>
                    <span>Négatif (-2)<input type="radio" name="" id=""></span>



                </div>
                <div class="title">
                    <p>Remarques</p>
                    <input id="txt1" type="text" placeholder="Remarques" name="remarques">




                </div>

                <div class="button">
                    <button type="submit">Terminer</button>
                    <button type="submit">Ajouter une autre grille</button>


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