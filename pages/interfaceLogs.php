<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes grilles - PS </title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/styleGrille.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <?php


    require_once("connection.php");

    $sql = "SELECT * FROM logs";

    $res = $conn->prepare($sql);
    $res->execute();

    $data = $res->fetchAll(PDO::FETCH_ASSOC);

    ?>
    <div class="table">
        <table class="tableau">

            <b>Consulter les logs
                
                <?php if (isset($_GET['error']) && $_GET['error'] == 'empty') {
                    echo '(Erreur: Une ligne vide, au moins.)';
                } ?>
                
            </b>
            

            <a id="add" href="./delete-logs.php">Supprimer les logs</a>
            <thead>
                <tr>

                    <th>IP</th>
                    <th>Date</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    


                </tr>

            </thead>

            <tbody>

                <?php

                // ! ça fonctionne, bref maintenant, je dois coder la page pour ajouter directement une v à la vbase, depuis le site, ah et je dois trouver un moyen de les supprimer aussi, depuis le site ; mais bon maintenant j'ai la logique, donc ça devrait être bon




                foreach ($data as $v) {

                    echo
                    "<tr>
    
    <td>" . $v["ip"] . "</td>
    <td>" . $v["date"] . "</td>
    
    

    
    


</tr>";
                }


                ?>

            </tbody>


        </table>

    </div>














</body>

</html>