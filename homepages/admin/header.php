<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styleMain.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>


<header>

    <?php

    

    $role = $_SESSION['role'];
    


    ?>



    <div class="logo">Infinite Amethyst</div>

    <ul class="navlinks">
        <li><a href="./">Accueil</a></li>
        <li><a href="./make?action=see-accounts">Gérer les comptes</a></li>
        <li><a href="./make?action=see-table">Gérer les grilles</a></li>
        <li><a href="./make?action=see-ranking">Classement</a></li>

        <li><a href="./logout.php">Déconnexion</a></li>

    </ul>


</header>
<div class="header2">
    Vous êtes connecté sur votre espace personnel en tant que <?php echo $_SESSION['complete-name']. " ($role) "; ?>




    <title>Espace personnel - <?php echo $_SESSION['complete-name'] ?> </title>
</div>