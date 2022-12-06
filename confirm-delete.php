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
    
    
    require_once("connection.php");

    
    $sql = "SELECT * FROM eleve WHERE id=:id";

    $res=$conn->prepare($sql);
    $res->execute(array(':id'=>$_GET['id']));



    $data = $res->fetch(PDO::FETCH_ASSOC);

    $complete_name = $data["prenom"]." ".$data["nom"];

    if(!isset($data["id"])){
        header("location: make?action=see-table");
    }
    
    ?>
    

    <div class="welcome">
        <div class="mainTitle">Confirmer la suppression?</div>
        <div class="subtitle">Vous allez supprimer l'élève <?php echo $complete_name; ?>, êtes vous sûr? </div>
        
        <div class="buttons"> 
        <?php
        echo "<a href='delete?id={$_GET['id']}'>Confirmer</a>"
        
        ?>
        
        <a href="make?action=see-table">Retour</a>";
        
        </div>
            
        
        
        

          
           

        </div>

        
        
        
        
        
    </div>
    
    
    
    
</section>

    
    




</body>

</html>