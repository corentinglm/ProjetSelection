<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classement</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/styleClassement.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>

<body>

<?php

require_once("connection.php");

$sql = "SELECT prenom,nom,note FROM eleve order by note desc ";

$res=$conn->prepare($sql);
$res->execute();

$data = $res->fetchAll(PDO::FETCH_ASSOC);


?>
  
    <div class="table">
        <table class="tableau">

            <b>Consulter le classement</b>
            
            
            <thead>
                <tr>
                    
                    <th>Position</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Note</th>

                </tr>

            </thead>

            <tbody>
                
            <?php

        // Tableau populated, dans l'ordre des notes en plus eh ouais monsieur on fait pas les choses à moitié ici allez ça part        
        
        
        $pos = 1;
        foreach($data as $v){
            
            echo "<tr>
    
            <td>" . $pos . "</td>
            <td>" . $v["prenom"] . "</td>
            <td>" . $v["nom"] . "</td>
            <td>" . $v["note"] . "</td>
            
            

            </tr>

            

             
                
            </tbody>";
            // on incrémente pos pour faire un ordre
            $pos = $pos+1;
        }
            ?>
        }
        </table>

    </div>











</body>

</html>