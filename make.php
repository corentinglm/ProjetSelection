<?php

session_start();

// Page qui va servir de page tout en un comme index, mais cette fois pour accéder aux pages de modifications fin voilà quoi c'est super

// SecuritySystem


if (!isset($_SESSION['session']) or $_SESSION['session'] != session_id()) {
    header('location: ../login');
    exit();
}

if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 'admin' or $_SESSION['role'] == 'secretaire' or $_SESSION['role'] == 'prof') {
        if (isset($_GET['action'])) {




            // Restrictions au niveau des roles, on ne peut pas accéder à la gestion des comptes par l'url.
            if ($_SESSION['role'] == 'prof') {
                switch ($_GET['action']) {


                    case 'new-row':
                        include("./homepages/prof/header.php");
                        include('./pages/newGrille.php');
                        break;


                    case 'see-table':
                        include("./homepages/prof/header.php");
                        include("./pages/interfaceGrille.php");
                        break;

                    case 'see-ranking':
                        include("./homepages/prof/header.php");
                        include("./pages/interfaceClassement.php");
                        break;
                }
            }

            // Si role = admin alors pages admin autorisés avec switch case
            if ($_SESSION['role'] == 'admin') {

                switch ($_GET['action']) {

                    case 'see-accounts':
                        include("./homepages/admin/header.php");
                        include('./pages/adminAccounts.php');
                        break;

                    case 'see-ranking':
                        include("./homepages/admin/header.php");
                        include('./pages/interfaceClassement.php');
                        break;

                    case 'add-user-account':
                        include("./homepages/admin/header.php");
                        include('./pages/adminAccountsAdd.php');
                        break;

                    case 'see-table':
                        include("./homepages/admin/header.php");
                        include("./pages/interfaceGrille.php");
                        break;

                    case 'new-row':
                        include("./homepages/admin/header.php");
                        include('./pages/newGrille.php');
                        break;

                    case 'logs':
                        include("./homepages/admin/header.php");
                        include('./pages/interfaceLogs.php');
                        break;

                    default:
                        header('location: errors/error404.php');
                }
            }



            //  pareil pour secrétaire
            if ($_SESSION['role'] == 'secretaire') {


                switch ($_GET['action']) {

                    case 'download-ranking':
                        include("./homepages/secretaire/header.php");
                        include("./pages/interfaceClassementSecretaire.php");
                        break;
                }
            }



            // si pas de session on renvoie vers l'index qui renverra vers login

        } else {
            header('location: ./');
        }
    }
} else {
    header('location: ./');
}
