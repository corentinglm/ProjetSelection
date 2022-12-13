<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gérer les comptes</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/styleClassement.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

<?php 

// CONNECTION TO DATABASE ( si avec un truc pareil je bosse pas chez Apple dans 10 ans c'est n'importe quoi )

require_once("connection.php");

$sql = "SELECT * FROM users";

$res=$conn->prepare($sql);
$res->execute();

$data = $res->fetchAll(PDO::FETCH_ASSOC);



?>
   

  

    <div class="table">
        <table class="tableau">

            <b>Ajouter ou supprimer des comptes...</b>
            <a id="add" href="../make?action=add-user-account">Cliquez ici pour ajouter un nouveau compte</a>


            <thead>
                <tr>

                    <th>ID</th>
                    <th>Rôle</th>
                    <th>Password</th>
                    <th>Username</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>

                </tr>

            </thead>

            <tbody>
               
                <?php

        // ? Va falloir empêcher qu'on puisse s'auto supprimer son compte ce qui n'a aucun sens... hmmm j'ai une idée

        foreach($data as $v){
            
        echo "<tr>

        <td>" . $v["ID"] . "</td>
        <td>" . $v["role"] . "</td>
        <td>" . $v["password"] . "</td>
        <td>" . $v["username"] . "</td>
        <td>" . $v["nom"] . "</td>
        <td>" . $v["prenom"] . "</td>

        <td><a href='modify-user-account?id={$v['ID']}'> Modifier </a> </td>";

        if($_SESSION["id"] != $v['ID']){
        echo "<td><a href='confirm-delete-user?id={$v['ID']}'> Supprimer </a> </td>";
        } else{
            echo "<td>Can't delete self</td>";
        }

        // Eh bah, c'était beaucoup plus simple que ce que je pensais
    

        echo "</tr>

    

     
        
    </tbody>";
    
}
    ?>





            




            </tbody>


        </table>

    </div>











</body>

</html>