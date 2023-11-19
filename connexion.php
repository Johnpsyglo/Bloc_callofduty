<?php
include("Maconnexion.php");

// On récolte les données
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    // Le pattern contient les caractère interdit lors de l'input
    $pattern = '/^[a-zA-Z0-9_]+$/';

    // Si le preg_match ne voit aucun caractère du pattern dans $nom alors on exécute le code
    if (preg_match($pattern, $nom)) {
        // On select l'auteur par rapport à son $nom et $mdp dans la table
        $connexion = new MaConnexion("call_of_duty", "root", "", "localhost");
        $requete = $connexion->select("auteurs", "*");
        foreach ($requete as $compare) {
            if (password_verify($mdp, $compare['mdp'])) {
                session_start([
                    'cookie_lifetime' => 8 * 3600, // Durée de vie du cookie session en secondes (8 heures)
                    'cookie_httponly' => true, // Empêche l'accés des cookie par JavaScript
                    'cookie_secure' => true, // Cookie en https seulement
                    'cookie_samesite' => 'Lax', // Contrôle le comportement du cookie en fonction du site
                    'use_strict_mode' => true, // Utilisation du mode strict pour les sesisons
                ]);
                //Generer un token CSRF
                $byte = random_bytes(32); //random_bytes, permet de générer des données aléatoires
                //(32)Permet de spécifie la longueur en octets de la séquence aléatoire que vous souhaitez générer.
                //la ligne de code $byte = random_bytes(32) permet de générer une variable $byte contenant une séquence de 32 octets de données aléatoires sécurisées
                
                $token = bin2hex($byte);

                // Permet de Stocker le token en session
                $_SESSION['csrf_token'] = $token;
                // Permet d'enregistre l'id de l'auteur dans $_SESSION['id'] 
                $_SESSION['id'] = $compare['id_auteurs'];
                // Permet d'enregistre role de l'auteur dans $_SESSION['role'] 
                $_SESSION['role'] = $compare['id_roles'];
                // Permet d'enregistre nom de l'auteur dans $_SESSION['nom'] 
                $_SESSION['nom'] = $compare['nom'];
                // permet de créer une session article
                $_SESSION['article'] = "";

                // Permet de rediriger vers blog.php
                header("Location: jeux.php");// permet de localiser le fichier dont on fait appelle
                exit();
            }
        }
    }
}
?>
