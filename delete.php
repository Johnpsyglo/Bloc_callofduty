<?php
    session_start([
        'cookie_lifetime' => 3600, // Durée de vie du cookie sesison en secondes quand la session est inactive
        'cookie_httponly' => true, // Empêche l'accés des cookie par JavaScript
        'cookie_secure' => true, // Cookie en https seulement
        'cookie_samesite' => 'Lax', // Contrôle le comportement du cookie en fonction du site
        'use_strict_mode' => true // Utilisation du mode strict pour les sesisons 
    ]);
    include "Maconnexion.php";
   
    // SUPPRESISON ARTICLE
    $id_delete = $_POST['id_delete'];

    $supp_article = new MaConnexion("sc3nuxz4136_nosile-john.call_of_duty","OM-RUN_DPS_DWWM_AFC_Avril23","sc3nuxz4136","localhost");
    $requete = $supp_article -> delete($id_delete);
    
    header("Location: blog.php");
    exit();
?>