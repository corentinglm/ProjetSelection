<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un compte...</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/adminAccountsAdd.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>



<?php

// STARTING SESSION
session_start();

// SecuritySystem

if( !isset($_SESSION['session']) or $_SESSION['session'] != session_id()){
    header('location: ../login');
    exit();
}


// including header
include('homepages/admin/header.php');

require_once('connection.php');

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id=:id";

    $res = $conn->prepare($sql);
    $res->execute(array(':id' => $id));


    $data = $res->fetchAll(PDO::FETCH_ASSOC);


    // creating values

    //  error handling: on check si le tableau est vide, si oui donc dans else, on repart dans see-accounts
    if ($data) {
        foreach ($data as $v) {

            $prenom = $v['prenom'];
            $nom = $v['nom'];
            $user = $v['username'];
            $password = $v['password'];
            $role = $v['role'];
            $id = $v['ID'];
            $complete_name = $v["prenom"] . " " . $v["nom"];

        }
    } else {
        header('location: make?action=see-accounts');
    }














} else {
    header('location: make?action=see-table');
}



?>

<body>



    <div class="menu">


        <b>Modification du compte
            <?php echo ": " . $complete_name ?>
        </b>
        <a href="make?action=see-accounts">Retour</a>


        <div class="container">


            <form action="../submit-user.php" method="post">
                <div class="title">
                    <p>Nom et prénom </p>
                    <input type="text" name="name" <?php echo "value={$nom}"; ?> placeholder="Nom">
                    <input type="text" name="surname" <?php echo "value={$prenom}"; ?> placeholder="Prénom">

                </div>
                <div class="title">
                    <p>Nom d'utilisateur</p>

                    <input type="text" <?php echo "value={$user}"; ?> name="username">


                </div>

                <div class="title">
                    <p>ID</p>

                    <input type="text" id="country" name="ID" <?php echo "value={$id}"; ?> readonly >


                </div>

                <div class="title">
                    <p>Mot de passe ( Impossible de le modifier. )</p>
                    <input type="text" placeholder="mot de passe" <?php echo "value={$password}" ?> name="password"
                    readonly>


                </div>
                <div class=" title">


                    <p>Rôle</p>

                    <?php

                    // coche en fonction du role $role
                    // à refaire pour le modify-eleve-account mais en plus gros
                    //? refaire avec un switch case dans la partie elève
                    
                    if ($role == 'admin') {
                        echo '<span>Admin<input checked type="radio" name="role" value="admin" id=""></span>';
                    } else {
                        echo '<span>Admin<input type="radio" name="role" value="admin" id=""></span>';
                    }

                    if ($role == 'secretaire') {
                        echo '<span>Secrétaire<input checked type="radio" name="role" value="secretaire" id=""></span>';
                    } else {
                        echo '<span>Secrétaire<input type="radio" name="role" value="secretaire" id=""></span>';
                    }

                    if ($role == 'prof') {
                        echo '<span>Correcteur<input checked type="radio" name="role" value="prof" id=""></span>';
                    } else {
                        echo '<span>Correcteur<input type="radio" name="role" value="prof" id=""></span>';
                    }


                    ?>
                </div>



                <div>
                    <button type="submit">Mettre à jour le compte</button>


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