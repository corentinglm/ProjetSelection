<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une grille...</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/newGrille.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>

<body>

    <?php

// SecuritySystem

    session_start();

if( !isset($_SESSION['session']) or $_SESSION['session'] != session_id()){
    header('location: ../login');
    exit();
}



// Je reprends la structure de modify user account

require_once('connection.php');

// Inclusion du header
include('homepages/prof/header.php');



if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "SELECT * FROM eleve WHERE id=:id";

    $res = $conn->prepare($sql);
    $res->execute(array(':id' => $id));


    $data = $res->fetchAll(PDO::FETCH_ASSOC);



    // creating values

    //  error handling: on check si le tableau est vide, si oui donc dans else, on repart dans see-accounts
    if ($data) {
        foreach ($data as $v) {

            $nom = $v["nom"];
            $prenom = $v["prenom"];
            $travail = $v["travail"];
            $bac = $v["bac"];
            $absences = $v["absences"];
            $attitude = $v["attitude"];
            $etudes = $v["etudes"];
            $avis_pp = $v["avis_pp"];
            $avis_prov = $v["avis_prov"];
            $lettre = $v["lettre"];
            $remarques = $v["remarques"];
            $note = $v["note"];
            $id = $v['id'];
            $complete_name = $v["prenom"] . " " . $v["nom"];


        }
    } else {
        header('location: make?action=see-accounts');
    }














} else {
    header('location: make?action=see-table');
}














?>

    <div class="menu">


        <b>Modifier une grille :
            <?php echo $complete_name ?>
        </b>
        <a href="../make?action=see-table">Retour</a>

        <form action="submit-eleve" method="POST">
            <div class="container">
                <div class="title">
                    <p>Nom et prénom</p>
                    <input type="text" <?php echo "value={$prenom}"; ?> placeholder="Prénom" name="surname">
                    <input type="text" <?php echo "value={$nom}"; ?> placeholder="Nom" name="name">

                </div>

                <div class="title">
                    <p>ID</p>
                    <input type="text" placeholder="ID" name="id" <?php echo "value={$id}"; ?> readonly>


                </div>


                <div class="title">
                    <p>Bac</p>

                    <?php
                    if ($bac == 'Bac Pro') {
                        echo '<span>Série Pro 08 ( liée à l informatique )<input type="radio" value="Bac Pro" name="serieBac" id="" checked></span>';
                    } else {
                        echo '<span>Série Pro 08 ( liée à l informatique )<input type="radio" value="Bac Pro" name="serieBac" id=""></span>';
                    }

                    if ($bac == 'Bac S/ES') {
                        echo '<span>Série S/ES : 12<input type="radio" value="Bac S/ES" name="serieBac" id="" checked ></span>';
                    } else {
                        echo '<span>Série S/ES : 12<input type="radio" value="Bac S/ES" name="serieBac" id="" ></span>';
                    }

                    if ($bac == 'Bac L') {
                        echo '<span>Série L : 09<input type="radio" value="Bac L" name="serieBac" id=""></span> checked';
                    } else {
                        echo '<span>Série L : 09<input type="radio" value="Bac L" name="serieBac" id=""></span>';
                    }

                    if ($bac == 'Bac STMG') {
                        echo '<span>Série STMG : 10<input type="radio" value="Bac STMG" name="serieBac" id="" checked></span>';
                    } else {
                        echo '<span>Série STMG : 10<input type="radio" value="Bac STMG" name="serieBac" id=""></span>';
                    }

                    if ($bac == 'Autre') {
                        echo '<span>Autres : 05<input type="radio" value="Autre" name="serieBac" id="" checked></span>';
                    } else {
                        echo '<span>Autres : 05<input type="radio" value="Autre" name="serieBac" id=""></span>';
                    }


                    ?>



                </div>
                <div class="title">
                    <p>Travail Sérieux</p>

                    <?php
                if ($travail == 'Oui') {
                    echo '<span>Oui (+1)<input value="Oui" type="radio" name="travail" id="" checked ></span>';
                    echo '<span>Non (-1)<input value="Non" type="radio" name="travail"></span>';
                } else {
                    echo '<span>Oui (+1)<input value="Oui" type="radio" name="travail" id=""  ></span>';
                    echo '<span>Non (-1)<input value="Non" type="radio" name="travail" checked></span>';
                }

                ?>



                </div>
                <div class="title">
                    <p>Absence</p>

                    <?php

                    if ($absences == 'Oui') {
                        echo '<span>Oui (-2 ou dossier refusé )<input type="radio" value="Oui" name="absence" checked id=""></span>';
                        echo '<span>Non (+1)<input type="radio" name="absence" value="Non" id=""></span>';

                    } else {
                        echo '<span>Oui (-2 ou dossier refusé )<input type="radio" value="Oui" name="absence"  id=""></span>';
                        echo '<span>Non (+1)<input type="radio" checked name="absence" value="Non" id=""></span>';
                    }


                    ?>
                </div>
                <div class="title">
                    <p>Attitude</p>

                    <?php

                    if ($attitude == 'Oui') {
                        echo '<span>Oui ( dossier refusé !! )<input checked type="radio" value="Oui" name="attitude" id=""></span>';
                        echo '<span>Non ( +1 )<input type="radio" name="attitude" value="Non" id=""></span>';

                    } else {
                        echo '<span>Oui ( dossier refusé !! )<input  type="radio" value="Oui" name="attitude" id=""></span>';
                        echo '<span>Non ( +1 )<input checked type="radio" name="attitude" value="Non" id=""></span>';
                    }

                    ?>



                </div>
                <div class="title">
                    <p>Etudes Supérieures</p>

                    <?php

                    if ($etudes == 'Oui') {
                        echo '<span>Oui (+1)<input type="radio" name="etudesSup" checked value="Oui" id=""></span>';
                        echo '<span>Non (+0)<input type="radio" name="etudesSup"value="Non" id=""></span>';

                    } else {
                        echo '<span>Oui (+1)<input type="radio" name="etudesSup" value="Oui" id=""></span>';
                        echo '<span>Non (+0)<input type="radio" name="etudesSup" checked value="Non" id=""></span>';
                    }

                    ?>



                </div>
                <div class="title">
                    <p>Avis PP</p>


                    <span>B (+2)<input value="Bien" <?php if ($avis_pp == 'Bien') {
                        echo 'checked';
                    } ?> type="radio"
                        name="avisPP" id=""></span>

                    <span>AB (+1) <input type="radio" value="Assez bien" <?php if ($avis_pp == 'Assez bien') {
                        echo
                            'checked';
                    } ?> name="avisPP" id=""></span>

                    <span>Insuf. (-1)<input type="radio" name="avisPP" <?php if ($avis_pp == 'Insuf.') {
                        echo 'checked';
                    } ?>
                        value="Insuf." id=""></span>

                    <span>Négatif (-2)<input type="radio" name="avisPP" <?php if ($avis_pp == 'Négatif') {
                        echo 'checked';
                    }
                            ?> value="Négatif" id=""></span>




                </div>
                <div class="title">





                    <p>Avis Proviseur</p>
                    <span>B (+2)<input type="radio" value="Bien" <?php if ($avis_prov == 'Bien') {
                        echo 'checked';
                    } ?>
                        name="avisProv" id="avisProv"></span>
                    <span>AB (+1)<input value="Assez bien" <?php if ($avis_prov == 'Assez bien') {
                        echo 'checked';
                    } ?>
                        type="radio" name="avisProv" value="2" id=""></span>
                    <span>Insuf. (-1)<input type="radio" <?php if ($avis_prov == 'Insuf.') {
                        echo 'checked';
                    } ?>
                        name="avisProv" value="Insuf." id=""></span>
                    <span>Négatif (-2)<input type="radio" <?php if ($avis_prov == 'Négatif') {
                        echo 'checked';
                    } ?>
                        name="avisProv"value="Négatif" id=""></span>



                </div>
                <div class="title">



                    <p>Lettre motivation
                        <?php echo $lettre ?>
                    </p>

                    <span>B (+2)<input value="Bien" <?php if ($lettre == 'Bien') {
                        echo 'checked';
                    } ?> type="radio"
                        name="lettreMotiv" id=""></span>

                    <span>AB (+1)<input type="radio" value="Assez bien" type="radio" name="lettreMotiv" <?php
                            if ($lettre == 'Assez bien') {
                        echo 'checked';
                    } ?> id=""></span>

                    <span>Insuf. (-1)<input type="radio" <?php if ($lettre == 'Insuf.') {
                        echo 'checked';
                    } ?>
                        name="lettreMotiv" value="Insuf." id=""></span>

                    <span>Négatif (-2)<input type="radio" value="Négatif" <?php if ($lettre == 'Négatif') {
                        echo 'checked';
                    }
                            ?> type="radio" name="lettreMotiv" id=""></span>



                </div>
                <div class="title">
                    <p>Remarques</p>
                    <input id="txt1" type="text" placeholder="Remarques" name="remarques" <?php echo
                        "value={$remarques}"; ?> >




                </div>

                <div class="title">
                    <p>Note ( Sur 20 )</p>
                    <input type="number" id="note" name="note" min="0" max="20" <?php echo "value={$note}"; ?>>




                </div>

                <div class="button">
                    <button type="submit" name="submit">Mettre à jour l'élève</button>



                </div>

        </form>





    </div>














</body>

</html>