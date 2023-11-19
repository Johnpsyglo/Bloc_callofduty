<?php

include('Maconnexion.php');

session_start([
    'cookie_lifetime' => 8 // Durée de vie du cookie de session (en secondes)
]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Call Of Duty</title>
    <link rel="stylesheet" href="crud.css">
</head>
<body>

<div class="container">
    <div class="modal fade" id="inscription" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">  <!-- Le titre de la modale indique que c'est une formulaire d'inscription.  -->
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Inscription</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="login-page">
                        <div class="form">
                            <!-- Formulaire d'inscription -->
                            <form class="login-form" method="POST" action="insertion.php" id="form_inscription">
                                <input type="hidden" name="id_roles" value="3"> <!-- L'attribut hidden est utilisé pour masquer l'entrée "id_roles" au lieu de la valeur "3". -->
                                <input type="text" name="nom" id="nom" placeholder="Nom..." required>
                                <input type="email" name="email" placeholder="Email..." required>
                                <input type="password" name="mdp" placeholder="Mot de passe..." required>
                                <input type="password" name="conf_mdp" placeholder="Confirmer le mot de passe..." required>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button form="form_inscription" type="submit" class="btn btn-modal">S'INSCRIRE</button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <h2 style="text-align: center;">Formulaire d'inscription</h2>
    <<h1>Formulaire de contact</h1>
        <form action="/inscription.php">
          <label for="fname">Nom & prénom</label>
          <input type="text" id="fname" name="firstname" placeholder="Votre nom et prénom">
      
          <label for="sujet">Sujet</label>
          <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message">
      
          <label for="emailAddress">Email</label>
          <input id="emailAddress" type="email" name="email" placeholder="Votre email">
           
          <input type="submit" value="Envoyer">
        </form>
  
</div>
    
<script src="crud.js"></script>
</body>
</html>



