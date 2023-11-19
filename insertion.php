<?php

include("./initconnexion.php");

$newInsertion = new MaConnexion("application_base_données", "", "root", "localhost"); //$ plus nom de la variable= declarer la varaiable
//new maconnexion = permet de creer un instance .//johndoe = base de donnée //utilisateur= utilisateur de base de donnee//localhost = host chemin d'acces au server
$newInsertion->InsertionUtilisateur_secure($_POST["idPrenom"], $_POST["nom"], $_POST["email"], $_POST["mots_de_pass"]);// new maconnexion = new construction
//$newinsertion n7 =instance de ma classe MaConnexion// -> insertion_secure = permet avoir ou appeller la fonction de MA classe . // () du fonction = parametre
header("location: interface.php");// header = modifie l'en tete de la requete http pour pointe vers le nouveau chemin


?>


















// session_start([
//     'cookie_lifetime' => 8 // Durée de vie du cookie de la session (en secondes)
// ]);

// if (isset($_POST["csrf_token"]) && $_POST["csrf_token"] === $_SESSION["csrf_token"]) {
//     //traite les données du formulaire
//     echo "Le jeton est validé";
// } else {
//     //redirige vers une new page
//     session_unset();
//     session_destroy();

//     echo "Le jeton n'est plus validé";
// }

?>
