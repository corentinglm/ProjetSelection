<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une grille...</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/newGrille.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>

<body>

<?php


$complete_name
?>

    <div class="menu">


        <b>Ajouter une nouvelle grille...</b>
        <a href="../make?action=see-table">Retour</a>

        <form action="../database.add" method="POST">
            <div class="container">
                <div class="title">
                    <p>Nom et prénom</p>
                    <input type="text" placeholder="Prénom"  name="surname">
                    <input type="text" placeholder="Nom" name="name">

                </div>


                <div class="title">
                    <p>Bac</p>
                    <span>Série Pro 08 ( liée à l'informatique )<input type="radio" value="Bac Pro" name="serieBac" id=""></span>
                    <span>Série S/ES : 12<input type="radio" value="Bac S/ES" name="serieBac" id=""></span>
                    <span>Série L : 09<input type="radio" value="Bac L" name="serieBac" id=""></span>
                    <span>Série STMG : 10<input type="radio" value="Bac STMG" name="serieBac" id=""></span>
                    <span>Autres : 05<input type="radio" value="Autre" name="serieBac" id=""></span>

                </div>
                <div class="title">
                    <p>Travail Sérieux</p>
                    <span>Oui (+1)<input value="Oui" type="radio" name="travail" id=""></span>
                    <span>Non (-1)<input value="Non" type="radio" name="travail"></span>

                </div>
                <div class="title">
                    <p>Absence</p>
                    <span>Oui (-2 ou dossier refusé )<input type="radio" value="Oui" name="absence" id=""></span>
                    <span>Non (+1)<input type="radio" name="absence" value="Non" id=""></span>

                </div>
                <div class="title">
                    <p>Attitude</p>
                    <span>Oui ( dossier refusé !! )<input type="radio" value="Oui" name="attitude" id=""></span>
                    <span>Non ( +1 )<input type="radio" name="attitude" value="Non" id=""></span>



                </div>
                <div class="title">
                    <p>Etudes Supérieures</p>
                    <span>Oui (+1)<input type="radio" name="etudesSup" value="Oui" id=""></span>
                    <span>Non (+0)<input type="radio" name="etudesSup"value="Non" id=""></span>



                </div>
                <div class="title">
                    <p>Avis PP</p>
                    <span>B (+2)<input value="Bien" type="radio" name="avisPP" id=""></span>
                    
                    <span>AB (+1) <input type="radio" value="Assez bien" name="avisPP" id=""></span>
                    
                    <span>Insuf. (-1)<input type="radio" name="avisPP" value="Insuf." id=""></span>
                    
                    <span>Négatif (-2)<input type="radio" name="avisPP" value="Négatif" id=""></span>




                </div>
                <div class="title">
                    <p>Avis Proviseur</p>
                    <span>B (+2)<input type="radio"value="Bien" name="avisProv" id="avisProv"></span>
                    <span>AB (+1)<input value="Assez bien" type="radio" name="avisProv" value="2" id=""></span>
                    <span>Insuf. (-1)<input type="radio" name="avisProv" value="Insuf."  id=""></span>
                    <span>Négatif (-2)<input type="radio" name="avisProv"value="Négatif"  id=""></span>



                </div>
                <div class="title">
                    <p>Lettre motivation</p>
                    <span>B (+2)<input value="Bien" type="radio" name="lettreMotiv" id=""></span>
                    <span>AB (+1)<input value="Assez bien" type="radio" name="lettreMotiv" id=""></span>
                    <span>Insuf. (-1)<input type="radio" name="lettreMotiv" value="Insuf." id=""></span>
                    <span>Négatif (-2)<input value="Négatif" type="radio" name="lettreMotiv" id=""></span>



                </div>
                <div class="title">
                    <p>Remarques</p>
                    <input id="txt1" type="text" placeholder="Remarques" name="remarques">




                </div>

                <div class="title">
                    <p>Note ( Sur 20 )</p>
                    <input type="number" id="note" name="note" min="0" max="20">




                </div>

                <div class="button">
                    <button type="submit" name="submit">Terminer</button>
                    


                </div>

        </form>





    </div>














</body>

</html>