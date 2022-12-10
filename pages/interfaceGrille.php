<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes grilles - PS </title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/styleGrille.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

<?php


require_once("connection.php");

$sql = "SELECT * FROM eleve";

$res=$conn->prepare($sql);
$res->execute();

$data = $res->fetchAll(PDO::FETCH_ASSOC);

?>
    <div class="table">
        <table class="tableau">
            
            <b>Consulter, modifier ou supprimer mes grilles
                <?php if (isset($_GET['error']) && $_GET['error'] == 'empty') {
                    echo '(Erreur: Une ligne vide, au moins.)';}?>
            </b>
                
                <a id="add" href="../make?action=new-row">Cliquez ici pour ajouter une nouvelle grille</a>
            <thead>
                <tr>

                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Bac</th>
                    <th>Travail<br>sérieux</th>
                    <th>Absence</th>
                    <th>Attitude</th>
                    <th>Etudes<br>Sup.</th>
                    <th>Avis PP</th>
                    <th>Avis<br>Proviseur</th>
                    <th>Lettre<br>motiv.</th>
                    <th>Rq.</th>
                    <th>Note</th>
                    <th>Modifier</th>
                    <th>Supp.</th>

                </tr>

            </thead>

            <tbody>

                <?php

// ! ça fonctionne, bref maintenant, je dois coder la page pour ajouter directement une v à la vbase, depuis le site, ah et je dois trouver un moyen de les supprimer aussi, depuis le site ; mais bon maintenant j'ai la logique, donc ça devrait être bon

    
   

    foreach($data as $v){
        
    echo 
    "<tr>
    
    <td>" . $v["prenom"] . "</td>
    <td>" . $v["nom"] . "</td>
    <td>" . $v["bac"] . "</td>
    <td>" . $v["travail"] . "</td>
    <td>" . $v["absences"] . "</td>
    <td>" . $v["attitude"] . "</td>
    <td>" . $v["etudes"] . "</td>
    <td>" . $v["avis_pp"] . "</td>
    <td>" . $v["avis_prov"] . "</td>
    <td>" . $v["lettre"] . "</td>
    <td>" . $v["remarques"] . "</td>
    <td>" . $v["note"] . "</td>
    <td><a href='modify-eleve?id={$v['id']}'> Modifier </a> </td>

    
    <td><a href='confirm-delete?id={$v['id']}'> Supprimer </a> </td>


</tr>";

            }


            ?>

            </tbody>


        </table>

    </div>














</body>

</html>