<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet Selection</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">



    

</head>

<body>

<?php $data = 'Hello' ?>

    
    <section class="left">





        <section class="text1">
            
        


            
            


            <p id="projet">projetselection</p>
            <p id="welcome">Bienvenue</p>

            <hr>

            
            <p id="identify">Identifiez vous. </p>

            <form>




                <div class="contentBx">


                    <div class="inputBx">



                        <input type="text" name="username" class="txtBox">
                    </div>

                    <div class="labelUsr">
                        <span class="txtLabel">Nom d'utilisateur</span>
                    </div>

                    <div class="inputBx">

                        <input action="main.html" method="get" type="password" name="password" class="txtBox">
                    </div>

                    <div class="labelPass">
                        <span class="txtLabel">Mot de passe</span>
                    </div>



                    <div class="remember">

                        <label><input type="checkbox" name="remember">
                            Rester connecté
                        </label>

                        <button action="main.html" class="connectBtn" type="submit" value="se connecter">
                            Se connecter

                        </button>
                    </div>

                    <div class="forgotPassword">
                        <a href="">Mot de passe oublié ?</a>


                    </div>

                    <div class="signUp">
                        <a href="">Pas encore inscrit?</a>
                    </div>

                </div>

            </form>

        </section>



        <footer>
            <div class="about">
                <p>Corentin Guillaume - 2022</p>
                <a href="about.html">About</a>

            </div>





        </footer>
    </section>



    <section class="right">
        <img src="assets\rightPane.png" class="img">

    </section>






</body>

</html>