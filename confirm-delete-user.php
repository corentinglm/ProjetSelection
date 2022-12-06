<!DOCTYPE html>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmer la suppression</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styleAbout.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>

<body>

    <?php 

    session_start();

    require_once("connection.php");


    
    $sql = "SELECT * FROM users WHERE id=:id";

    $res=$conn->prepare($sql);
    $res->execute(array(':id'=>$_GET['id']));



    $data = $res->fetch(PDO::FETCH_ASSOC);

    $complete_name = $data["prenom"]." ".$data["nom"];

    if(!isset($data["ID"])){
        //  si pas d'id alors on considère que la ligne n'existe pas alors on renvoie juste vers le menu pour "gérer" l'erreur, ouais bref
        header("location: make?action=see-accounts");
    }

    ?>
    

    <div class="welcome">
        <div class="mainTitle">Confirmer la suppression?</div>
        <div class="subtitle">Vous allez supprimer le compte <?php echo $complete_name; ?>, êtes vous sûr? </div>
        
        <div class="buttons"> 
        <?php
        echo "<a href='delete-user?id={$_GET['id']}'>Confirmer</a>"
        
        ?>
        
        <a href="make?action=see-accounts">Retour</a>";
        
        </div>
            
        
        
        

          
           

        </div>

        
        
        
        
        
    </div>
    
    
    
    
</section>

    
    




</body>

</html>