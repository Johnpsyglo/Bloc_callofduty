<?php

include('connexion.php');

session_start([
    'cookie_lifetime' => 8 // Durée de vie du cookie de session (en secondes)
]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="form.css">
    <link href=" https://fonts.cdnfonts.com/css/noasarck " rel="stylesheet">
    <title>Formulaire</title>
</head>

<body class="designe">
            
        <div class="container-center">
            <img src="img\Call-of-Duty_logo.png" min-width="600.02px" class="sessionimage" alt="Call of duty Logo">
        </div>

        <div class="container">
            
            <h2 style="text-align: center;">Formulaire connexion</h2>
            <!-- Modal INSCRIPTION -->
            <form method="POST" action="inscription.php" class="formulaire">

                <h2>Register Formulaire </h2>

                <input type="text" id="Nom" name="nom" placeholder="Nom" require pattern="[a-z]+" minlength="2" maxlength="25" class="form form-control"><br>
                <div id="result"></div>

                <input type="text" id="Prenom" name="Prenom" placeholder="Prénom" require pattern="[a-z]+" maxlength="20" class="form form-control"><br>
                <div id="prenomresult"></div>


                <input type="email" id="email" name="email" placeholder="Adresse email" required max="30" maxlength="30" class="form form-control"><br>
                <div id="emailresult"></div>


                <input type="tel" id="tel" name="quantity" placeholder="0692" required min="1" required max="10" maxlength="10" class="form form-control"><br>
                <div id="numresult"></div>


                <input type="password" id="confirmePass" name="mdp" placeholder="Mots de Passe" minlength="8" required /><br>
                <input type="password" id="pass" name="confirmePass" placeholder="Comfirme Mots de Passe" minlength="8" required /><br>
                <div id="resultPass"></div>


                <input type="submit" value="Submit">
                <div id="result"></div>


            </form>

            
            <!-- <form action="insertion.php" class="Formulaire_de_connexion-left" method="POST" action="connexion.php" id="form_inscription">

                <span></span>

                <div class="form-outline mb-4">
                    <input type="text" id="Nom" class="form-control form-control-lg" />
                    <label class="form-label" for="Nom">Nom</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="email" id="form3Example3cg" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example3cg">Email</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="password" id="form3Example4cg" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example4cg">mdp</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example4cdg">confirme password</label>
                </div>


                <div class="d-flex justify-content-center">
                    <button form="form_inscription" type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Enregistrer</button>
                    <button form="connexion" type="submit" class="btn btn-modal">CONNEXION</button>
                    <!-- <button form="form_inscription" type="submit" class="btn btn-modal">S'INSCRIRE</button> -->


            <!-- </form> -->

        

        <span></span>
        <span></span>
        <span></span>
        <hr>


        <div class="container">

            <form class="right" action="verification.php" method="POST">
            <p class="text">Vous avez déjà un compte ? <a href="verification.php" class="text-body"><u>connexion</u></a></p>
            <h2>Connexion</h2>
            <div class="form-group">
                <label for="nom_utilisateur">Nom d'utilisateur:</label>
                <input type="text" id="nom_utilisateur" name="nom_utilisateur" required>
            </div>
            <div class="form-group">
                <label for="mot_de_passe">Mot de passe:</label>
                <input type="password" id="mot_de_passe" name="mot_de_passe" required>
            </div>
            <button type="submit">Se connecter</button>
            </form>
        </div>

        </div>
    </nav>





    <footer>
        &copy; NOSILE John . Tous droits réservés.
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- <script src="dossier-js\inscription.js"></script> -->

</body>

</html>