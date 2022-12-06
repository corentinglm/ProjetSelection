<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface</title>
    <link rel="stylesheet" href="css/reset.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>

<body>

    

    <?php 

    // affiche page liée au compte user
    session_start();


if(isset($_POST["username"])){


    
  switch($_POST["username"]){
    
    
    
    case 'secretaire';
        include("homepages/secretaire/header.php");
        include("homepages/secretaire/body.php"); 
        include("homepages/secretaire/footer.php");
        break;
        
        
    
    case 'admin';
        include("homepages/admin/header.php");
        include("homepages/admin/body.php");
        include("homepages/admin/footer.php");
        break;
        
    
    case 'prof';
        include("homepages/prof/header.php");
        include("homepages/prof/body.php");
        include("homepages/prof/footer.php");
        break;
        
    default;
        include("errors/error404.php");
        break;
    
        
    }} else{
        //  default 
        include("errors/error404.php");

    }
    

    ?>


</body>

</html>