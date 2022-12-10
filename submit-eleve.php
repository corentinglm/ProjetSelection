<?php

// HANDLING ELEVE DATABASE MODIFICATION
// Submitting changes to database

require_once('connection.php');
session_start();



// SecuritySystem

if( !isset($_SESSION['session']) or $_SESSION['session'] != session_id()){
    header('location: ../login');
    exit();
}

if (isset($_POST['id'])) {


    $sql = 'UPDATE eleve SET prenom=:prenom, nom=:nom, bac=:bac, travail=:travail, absences=:absences, attitude=:attitude, etudes=:etudes, avis_pp=:avis_pp, avis_prov=:avis_prov, lettre=:lettre, remarques=:remarques, note=:note WHERE id=:id';
    $res = $conn->prepare($sql);

    $complete_name = $_SESSION['complete-name'];
    $nom = $_POST['name'];
    $prenom = $_POST['surname'];
    $bac = $_POST['serieBac'];
    $travail = $_POST['travail'];
    $absences = $_POST['absence'];
    $attitude = $_POST['attitude'];
    $etudes = $_POST['etudesSup'];
    $avis_pp = $_POST['avisPP'];
    $avis_prov = $_POST['avisProv'];
    $lettre = $_POST['lettreMotiv'];
    $remarques = $_POST['remarques'];
    $note = $_POST['note'];
    $id = $_POST['id'];
    $remarques = $_POST['remarques'] . " " . "( Ligne ajoutée par {$complete_name} )";


    $res->execute(array(':prenom' => $prenom, ':nom' => $nom, ':bac' => $bac, ':travail' => $travail, ':absences' => $absences, ':attitude' => $attitude, ':etudes' => $etudes, ':avis_pp' => $avis_pp, ':avis_prov' => $avis_prov, ':lettre' => $lettre, ':remarques' => $remarques, ':note' => $note, ':id' => $id));

    header('location: make?action=see-table');



}

?>