<?php
include("Maconnexion.php");

session_start([
    'cookie_lifetime' => 8 // Durée de vie du cookie de la session (en secondes)
]);
 // Ces lignes extraient les valeurs soumises via le formulaire
$nom = $_POST['nom'];
// $nom = $_POST['prenom'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];
$inscription_date = $_POST['inscription_date'];
$conf_mdp = $_POST['confirmePass'];

$pattern = '/^[a-zA-Z0-9_]+$/';

if ($mdp == $conf_mdp) {
    $mdp_hash = password_hash($mdp, PASSWORD_ARGON2ID);

  
    $requete = $test->insertionUtilisateur($id_utilisateur, $nom, $prenom, $email, $mdp, $inscription_date);
    header("Location: index.php");
    exit();
}
// bloc if
/*
if (preg_match($pattern, $nom)) { //Cette condition permet de vérifie si la valeur du nom ($nom) correspond au motif défini.

    if ($mdp == $conf_mdp) {
        $mdp_hash = password_hash($mdp, PASSWORD_ARGON2ID);

      
        $requete = $test->insertionInscription($nom, $email, $mdp_hash);
        header("Location: blog.php");
        exit();
    }
}
*/
/*
if (isset($_POST["csrf_token"]) && $_POST["csrf_token"] === $_SESSION["csrf_token"]) { //Cette condition vérifie si la variable csrf_token via le formulaire (méthode POST)
    // // AJOUT AUTEUR
    $role = $_POST['id_utilisateur']; // Ces lignes extraient les valeurs soumises via le formulaire
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $conf_mdp = $_POST['conf_mdp'];

    $pattern = '/^[a-zA-Z0-9_]+$/'; // Cette ligne définit un motif (pattern) régulier qui permet uniquement les caractères 
    //alphanumériques ex:(lettres et chiffres) ainsi que le souligné (_) dans la variable $nom. 

    // if(preg_match($pattern, $nom)){ //Cette condition permet de vérifie si la valeur du nom ($nom) correspond au motif défini.

    //     if($mdp == $conf_mdp){ // cette ligne de code if, permet de vérifie si le mot de passe ($mdp) soumis dans le formulaire 
    //                 //correspond à la confirmation du mot de passe ($conf_mdp). Si les deux correspondent, cela signifie que l'utilisateur a bien confirmé son mot de passe.

    //         $mdp_hash = password_hash($mdp, PASSWORD_DEFAULT); //Cette ligne utilise la fonction password_hash pour hacher le mot de passe ($mdp) de manière sécurisée. 

    //         $ajout_article = new MaConnexion("call_of_duty","","root","localhost");
    //         $requete = $ajout_article -> insertionInscription($role, $nom, $email, $mdp_hash);
    //         header("Location: header.php");
    //         exit();
    //     }
    // }      
    //     session_start([
    //         'cookie_lifetime' => 8 // Durée de vie du cookie de la session (en secondes)
    //     ]);
    //     //traite les données du formulaire
    //     echo "Le jeton est validé";
    // }else {
    //     //redirige vers une new page
    //     session_unset();
    //     session_destroy();

    //     echo "Le jeton n'est plus validé";
    // }

    


    
}
*/
