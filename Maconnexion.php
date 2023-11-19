<?php


 class MaConnexion{ // Permet de déclarer une nouvelle classe en PHP appelée MaConnexion. 
    
    private $nomBaseDeDonnees;// Permet de déclarer une propriété (variable) pour $nomBaseDeDonnees. 
    private $motDePasse;
    private $nomUtilisateur;// Permet de stocker le nom d'utilisation
    private $hote;
    private $connexionPDO;//Permet de déclarer une propriété privée appelée $connexionPDO.PDO Qui veux dire: PHP Data Objects

    public function __construct($nomBaseDeDonnees, $motDePasse , $nomUtilisateur , $hote){// Permet de définit la fonction constructeur. 
        //ce qui signifie qu'elle peut être appelée de l'extérieur de la classe.  
        //Il prend quatre paramètres : $nomBaseDeDonnees, $motDePasse, $nomUtilisateur, et $hote.
        
        $this->nomBaseDeDonnees = $nomBaseDeDonnees; //Ces ligne de code affecte la valeur paramètre de l'instance actuelle de la classe $this
        $this->motDePasse = $motDePasse;
        $this->nomUtilisateur = $nomUtilisateur;
        $this->hote = $hote;
        
        try {
            $dsn = "mysql:host=$this->hote;dbname=$this->nomBaseDeDonnees;charset=utf8mb4"; // (DSN, Data Source Name) pour se connecter à une base de données MySQL en utilisant PHP.
            $this->connexionPDO = new PDO($dsn,$this->nomUtilisateur, $this->motDePasse);// Permet de crée une connexion à une base de données en utilisant PDO (PHP Data Objects).
            $this->connexionPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// permet au programmeur de capturer et de gérer ces erreurs de manière plus explicite.
            
        } catch (PDOException $e) {
            echo "connexion reussit : " . $e->getMessage();
        }
    }


    public function select($table, $column){
        try {
            $requete = "SELECT $column from $table";
            $resultat = $this->connexionPDO->query($requete);
            $resultat = $resultat->fetchAll(PDO::FETCH_ASSOC); //Recupere le resultat de la requete dans un tableau associatif
            return $resultat;
        
        } catch (PDOException $e) {
            echo "j'ai Reussit : ".$e->getMessage();
        }    
    }


    // Je modifie juste le nom de la function ici "select" devient "select_articles_recents"
    public function select_articles_recents($table, $column){
        try {
            // je reparamètre notre requete SQL selon nos besoin
            // Ici j'avait besoin de selectionné 3 articles récentes donc on rajoute ORDERBY BY 'nom_column' DESC pour mettre notre liste en ordre décroissant
            // Et ensuite LIMIT 3 pour limiter le nombre d'article selectionné à 3
            $requete = "SELECT $column from $table ORDER BY id_articles DESC LIMIT 3 ";
            $resultat = $this->connexionPDO->query($requete);
            $resultat = $resultat->fetchAll(PDO::FETCH_ASSOC); //Permet de Recupere le resultat de la requete dans un tableau associatif
            return $resultat;
        
        } catch (PDOException $e) {
            echo "j'ai Reussit  : ".$e->getMessage();
        }    
    }


    // Je modifie juste le nom de la function ici "select" devient "select_articles_recents"
    public function select_articles_FPS($table, $column)
    {
        try {
            // Je reparamètre notre requete SQL selon nos besoin
            // Ici j'avait besoin de selectionné 3 articles récentes donc on rajoute ORDERBY BY 'nom_column' DESC pour mettre notre liste en ordre décroissant
            // Et ensuite je LIMIT 3 pour limiter le nombre d'article selectionné à 3
            $requete = "SELECT $column from $table WHERE categorie = 1 ORDER BY id_articles DESC LIMIT 3 ";
            $resultat = $this->connexionPDO->query($requete);
            $resultat = $resultat->fetchAll(PDO::FETCH_ASSOC); //Recupere le resultat de la requete dans un tableau associatif
            return $resultat;
        } catch (PDOException $e) {
            echo "j'ai Reussit  : " . $e->getMessage();
        }
    }

    public function select_where_articles($table, $column, $id) {
        try {
            $requete = "SELECT $column FROM $table WHERE id_articles = $id";
            $resultat = $this->connexionPDO->query($requete);
            $resultat = $resultat->fetchAll(PDO::FETCH_ASSOC); // Recupere le resultat de la requete dans un tableau associatif

            return $resultat;
        } catch (PDOException $e) {
            echo "j'ai Reussit  : " . $e->getMessage();
        }
    }


    public function select_where_auteurs($table, $column, $id) {
        try {
            $requete = "SELECT $column FROM $table WHERE id_auteurs = $id";
            $resultat = $this->connexionPDO->query($requete);
            $resultat = $resultat->fetchAll(PDO::FETCH_ASSOC); // Fetch the result of the query into an associative array

            return $resultat;
        } catch (PDOException $e) {
            echo "j'ai Reussit  : " . $e->getMessage();
        }
    }


    public function select_where_abonne($table, $column, $id) {
        try {
            $requete = "SELECT $column FROM $table WHERE id_roles = $id";
            $resultat = $this->connexionPDO->query($requete);
            $resultat = $resultat->fetchAll(PDO::FETCH_ASSOC); // Fetch the result of the query into an associative array

            return $resultat;
        } catch (PDOException $e) {
            echo "j'ai Reussit : " . $e->getMessage();
        }
    }


    public function select_where_commentaires($table, $column, $id) {
        try {
            $requete = "SELECT $column FROM $table WHERE id_articles = $id";
            $resultat = $this->connexionPDO->query($requete);
            $resultat = $resultat->fetchAll(PDO::FETCH_ASSOC); // Fetch the result of the query into an associative array

            return $resultat;
        } catch (PDOException $e) {
            echo "j'ai Reussit : " . $e->getMessage();
        }
    }

    public function select_auteurs($table, $column, $id) {
        try {
            $requete = "SELECT $column FROM $table WHERE id_articles = $id";
            $resultat = $this->connexionPDO->query($requete);
            $resultat = $resultat->fetchAll(PDO::FETCH_ASSOC); // Fetch the result of the query into an associative array

            return $resultat;
        } catch (PDOException $e) {
            echo "j'ai Reussit : " . $e->getMessage();
        }
    }

    public function select_utilisateur($id_utilisateur, $nom, $prenom,  $email, $mdp, $inscription_date)// Permet de déclaré une fonction en PHP 
    //destinée à sélectionner des informations sur un utilisateur.
    {

        try {
            $requete = "SELECT `id_utilisateur`(id_utilisateur, nom, prenom, email, mdp, inscription_date) VALUES (?, ?, ?, ?, ?, ?)";

            $requete_preparee = $this->connexionPDO->prepare($requete);

            $requete_preparee->bindValue(1, $id_utilisateur);
            $requete_preparee->bindValue(2, $nom);
            $requete_preparee->bindValue(3, $prenom);
            $requete_preparee->bindValue(4, $email);
            $requete_preparee->bindValue(5, $mdp);
            $requete_preparee->bindValue(6, $inscription_date);

            $requete_preparee->execute();
            return "insertion reussie";
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function select_utilisateur_secure($id_utilisateur, $nom, $prenom,  $email, $mdp, $inscription_date)
    {
        try {
            $requete = "SELECT `id_utilisateur`(id_utilisateur, nom, prenom, email, mdp, inscription_date) VALUES (?, ?, ?, ?, ?, ?)";

            $requete_preparee = $this->connexionPDO->prepare($requete);

            $requete_preparee->bindValue(1, $id_utilisateur);
            $requete_preparee->bindValue(2, $nom);
            $requete_preparee->bindValue(3, $prenom);
            $requete_preparee->bindValue(4, $email);
            $requete_preparee->bindValue(5, $mdp);
            $requete_preparee->bindValue(6, $inscription_date);
            
            $requete_preparee->execute();
            return "insertion reussie";
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }


    public function delete($cond){
        try {
            $requete = "DELETE FROM `articles` WHERE id_articles = ?";
            $resultat = $this->connexionPDO->prepare($requete);
            $resultat->bindValue(1, $cond);

            $resultat->execute();

            return $resultat;
        
        } catch (PDOException $e) {
            echo "j'ai Reussit : ".$e->getMessage();
        }    
    }
    public function deleteUtilisateur($cond){
        try {
            $requete = "DELETE FROM `utilisateur` WHERE id_utilisateur = ?";
            $resultat = $this->connexionPDO->prepare($requete);
            $resultat->bindValue(1, $cond);

            $resultat->execute();

            return $resultat;
        
        } catch (PDOException $e) {
            echo "j'ai Reussit : ".$e->getMessage();
        }    
    }

    
    public function delete_com($cond){
        try {
            $requete = "DELETE FROM `commentaires` WHERE id_commentaires = ?";
            $resultat = $this->connexionPDO->prepare($requete);
            $resultat->bindValue(1, $cond);

            $resultat->execute();

            return $resultat;
        
        } catch (PDOException $e) {
            echo "j'ai Reussit  : ".$e->getMessage();
        }    
    }
    

    public function insertionArticle_Secure( $image, $titre, $contenu, $categorie, $id_auteurs)
    {
        try {
            $requete = "INSERT INTO `articles`( image, titre, contenu, categorie, id_auteurs) VALUES (?, ?, ?, ?, ?)";
            $requete_preparee = $this->connexionPDO->prepare($requete);

            $requete_preparee->bindValue(1, $image);
            $requete_preparee->bindValue(2, $titre);
            $requete_preparee->bindValue(3, $contenu);
            $requete_preparee->bindValue(4, $categorie);
            $requete_preparee->bindValue(5, $id_auteurs);

            $requete_preparee->execute();
            return "insertion reussie";
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function miseAJourArticle_Secure($id_articles,$image,$titre,$contenu,$categorie)
    {
        try {
            $requete = "UPDATE `articles` SET image=?,titre=?,contenu=?,categorie=? WHERE id_articles=?";
            $requete_preparee = $this->connexionPDO->prepare($requete);

            
            $requete_preparee->bindValue(1, $image);
            $requete_preparee->bindValue(2, $titre);
            $requete_preparee->bindValue(3, $contenu);
            $requete_preparee->bindValue(4, $categorie);
            $requete_preparee->bindValue(5, $id_articles);

            $requete_preparee->execute();
            return "mise à jour réussie";
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function miseAJourUtilisateur_Secure($id_utilisateur, $nom, $prenom, $email, $mdp, $inscription_date)
    {
        try {
            $requete = "UPDATE `utilisateur` SET id_utilisateur=?,nom=?,email=?,mdp=?,inscription_date=? WHERE id_utilisateur=4";            
            $requete_preparee = $this->connexionPDO->prepare($requete);

            
            $requete_preparee->bindValue(1, $id_utilisateur);
            $requete_preparee->bindValue(2, $nom);
            $requete_preparee->bindValue(3, $prenom);
            $requete_preparee->bindValue(4, $email);
            $requete_preparee->bindValue(5, $mdp);
            $requete_preparee->bindValue(6, $inscription_date);

            $requete_preparee->execute();
            return "mise à jour réussie";
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function miseAJour($table,$column,$newValue,$id){
        try {
        $requete = "UPDATE $table set '$column' = $newValue ID_$table = '$id'";
        $this->connexionPDO->exec($requete);
        return "mise a jour reussi";
        } catch (PDOException $e){
            echo "Erreur : ".$e->getMessage();
        }

    }

    public function insert($Table, $Values , $Column)
    {
      try {
          $ToString = '"' . join('","', $Values) . '"'; //Transforme le tableau Values en chaine de character
          $ToString = str_replace('""', "NULL", $ToString); // Remplace les espaces vides du tableau en valeur NULL
          $ColumConv= '(' . join(',', $Column) . ')'; // Transforme le Array contenant les colonnes en un format propice a la requete SQL ( sans string et entre parenthese)
          
         
          $SQLQueryString = "INSERT INTO $Table $ColumConv VALUES ($ToString)";
    
          $Result = $this->connexionPDO->query($SQLQueryString);
          return true;
    
      } catch (PDOException $e) {
          echo "Erreur: " . $e->getMessage();
          
          return false;
      }
    }
    
    public function insertionUtilisateur($id_utilisateur, $nom, $prenom, $email, $mdp, $inscription_date)
    {
        try {
            $requete = "INSERT INTO `utilisateur`(id_utilisateur, nom, prenom, email, mdp, inscription_date) VALUES (?, ?, ?, ?, ?, ?)";
            $requete_preparee = $this->connexionPDO->prepare($requete);

            
            $requete_preparee->bindValue(1, $id_utilisateur);
            $requete_preparee->bindValue(2, $nom);
            $requete_preparee->bindValue(3, $prenom);
            $requete_preparee->bindValue(4, $email);
            $requete_preparee->bindValue(5, $mdp);
            $requete_preparee->bindValue(6, $inscription_date);

            $requete_preparee->execute();
            return "insertion reussie";
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function insertionUtilisateur_secure($id_utilisateur, $nom, $prenom, $email, $mdp, $inscription_date)
    {
        try {
            $requete = "INSERT INTO `utilisateur`(id_utilisateur, nom, prenom, email, mdp, inscription_date) VALUES (?, ?, ?, ?, ?, ?)";
            $requete_preparee = $this->connexionPDO->prepare($requete);

            
            $requete_preparee->bindValue(1, $id_utilisateur);
            $requete_preparee->bindValue(2, $nom);
            $requete_preparee->bindValue(3, $prenom);
            $requete_preparee->bindValue(4, $email);
            $requete_preparee->bindValue(5, $mdp);
            $requete_preparee->bindValue(6, $inscription_date);

            $requete_preparee->execute();
            return "insertion reussie";
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    
    public function insertionCommentaire($contenu, $id_articles, $id_auteurs)
    {
        try {
            $requete = "INSERT INTO `commentaires`(contenu, id_articles, id_auteurs) VALUES ( ?, ?, ?)";
            $requete_preparee = $this->connexionPDO->prepare($requete);

            $requete_preparee->bindValue(1, $contenu);
            $requete_preparee->bindValue(2, $id_articles);
            $requete_preparee->bindValue(3, $id_auteurs);

            $requete_preparee->execute();
            return "insertion reussie";
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

}

// /*declare variable $test puis J'initialise ma variable $test avec ce qui retourne mon constructeur de ma class maconnexion. Donc $test devien une instance de ma classe.
 $test = new MaConnexion("call_of_duty","","root","localhost");
// $test = new MaConnexion("sc3nuxz4136_nosile-john.call_of_duty","OM-RUN_DPS_DWWM_AFC_Avril23","sc3nuxz4136","localhost");

?>