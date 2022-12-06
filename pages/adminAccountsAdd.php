<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un nouveau compte</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/adminAccountsAdd.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>

<body>

<?php 

if(isset($_GET['error'])){
    $error = $_GET['error'];
}
 
?>

    <div class="menu">


        <b>Ajouter un nouveau compte... 

        <?php
        if(isset($error)){
        if($error == 'empty'){
            echo ' (Erreur: Au moins une entrée vide)';
        }}
        ?>
        </b>
        <a href="make?action=see-accounts">Retour</a>


        <div class="container">


            <form action="../add-user-account.php" method="post">
                <div class="title">
                    <p>Nom et prénom</p>
                    <input type="text" name="surname" placeholder="Prénom">
                    <input type="text" name="name" placeholder="Nom">

                </div>
                <div class="title">
                    <p>Nom d'utilisateur</p>
                    <input type="text" placeholder="Username" name="username">
                

            </div>


            <div class="title">
                    <p>Mot de passe</p>
                    <input type="password" placeholder="mot de passe" name="password">
                

            </div>
            <div class=" title">
                    <p>Rôle</p>
                    <span>Admin<input type="radio" name="role" value="admin" id=""></span>
                    <span>Secrétaire<input type="radio" name="role" value="secretaire" id=""></span>
                    <span>Correcteur<input value="prof" type="radio" name="role" id="roleCorrecteur"></span>



                </div>



                <div>
                    <button type="submit">Ajouter le compte</button>


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














</body>

</html>