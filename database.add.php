<?php


require_once("connection.php");

//* il faudrait faire un error handling par exemple : si une variable return false à isset, alors on header location une page d'erreur, pour éviter de remplir des row a moitié vides. ( avec un foreach ?? isset = true alors header location erreur? hmm ) OK NON EN FAIT JUSTE AVEC UN TRY CATCH POURQUOI FAIRE COMPLIQUE ???


// PDO

$sql = "INSERT INTO eleve (`nom`, `prenom`, `bac`, `travail`, `absences`,`attitude`,`etudes`,`avis_pp`,`avis_prov`,`lettre`,`remarques`,`note`) VALUES (:nom, :prenom, :bac, :travail, :absences,:attitude,:etudes,:avis_pp,:avis_prov,:lettre,:remarques,:note)";

$res = $conn->prepare($sql);

//  values

// true variables
// TODO: A RETESTER = IL FAUT CHANGER LES OPTIONS EN LANGUAGE HUMAIN LOL
// * OK : fait, ça marche!

session_start();

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
$remarques = $_POST['remarques'] . " " . "( Ligne ajoutée par {$complete_name} )";


$note = $_POST['note'];

// execute with values 

try {
    $res->execute(array(':nom' => $nom, ':prenom' => $prenom, ':bac' => $bac, ':travail' => $travail, ':absences' => $absences, ':attitude' => $attitude, ':etudes' => $etudes, ':avis_pp' => $avis_pp, ':avis_prov' => $avis_prov, ':lettre' => $lettre, ':remarques' => $remarques, ':note' => $note,));
} catch (PDOException) {
    header('location: ../make?action=see-table&error=empty');
    exit();
}



//* try catch pour éviter les saisies vide, je renvoie vers newGrille mais avec un '?error=NotFilled' derrière, je sais pas encore comment faire pour "attraper" ça dans la page pour afficher un msg après mais bon c'est pas urgent ( update 24h après, c'est juste une méthode GET en fait, donc on récupère ça avec une variable $_GET, c'est magnifique )

//  inserting values 

header('Location: make?action=see-table');
