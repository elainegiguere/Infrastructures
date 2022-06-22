<?php

include_once "./include/config.php";

class modele_proprietaire {
    public $id;
    public $prenom; 
    public $nom;
    public $telephone;
    public $adresse;
    public $ville;
    public $code_postale;
    public $province;

    public function __construct($id, $prenom, $nom, $telephone, $adresse, $ville, $code_postale, $province) {
        $this->id = $id;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->telephone = $telephone;
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->code_postale = $code_postale;
        $this->province = $province;
    }

    static function connecter() {
        
        $mysqli = new mysqli(Db::$host, Db::$username, Db::$password, Db::$database);

        // Vérifier la connexion
        if ($mysqli -> connect_errno) {
            echo "Échec de connexion à la base de données MySQL: " . $mysqli -> connect_error;
            exit();
        } 

        return $mysqli;
    }

    

    /***
     * Fonction permettant de récupérer un produit en fonction de son identifiant
     */
    public static function ObtenirUn($id) {
        $mysqli = self::connecter();

        if ($requete = $mysqli->prepare("SELECT * FROM proprietaires WHERE id=?")) {  // Création d'une requête préparée 
            $requete->bind_param("i", $id); // Envoi des paramètres à la requête

            $requete->execute(); // Exécution de la requête

            $result = $requete->get_result(); // Récupération de résultats de la requête¸
            
            if($enregistrement = $result->fetch_assoc()) { // Récupération de l'enregistrement
                $proprietaire = new modele_proprietaire($enregistrement['id'], $enregistrement['prenom'], $enregistrement['nom'], $enregistrement['telephone'], $enregistrement['adresse'], $enregistrement['ville'], $enregistrement['code_postale'], $enregistrement['province']);
            } else {
                echo "Erreur: Aucun enregistrement trouvé";
                exit();
            }   
            
            $requete->close(); // Fermeture du traitement 
        } else {
            echo "Une erreur a été détectée dans la requête utilisée : ";
            echo $mysqli->error;
            echo "<br>";
            exit();
        }

        return $proprietaire;
    }

    public static function ObtenirTous() {
        $liste = [];
        $mysqli = self::connecter();

        $resultatRequete = $mysqli->query("SELECT id, prenom, nom, telephone, adresse, ville, code_postale, province FROM proprietaires;");

        foreach ($resultatRequete as $enregistrement) {
            $liste[] = new modele_proprietaire($enregistrement['id'], $enregistrement['prenom'], $enregistrement['nom'], $enregistrement['telephone'], $enregistrement['adresse'], $enregistrement['ville'], $enregistrement['code_postale'], $enregistrement['province']);
        }

        return $liste;
    }



    /* Fonction permettant d'ajouter un proprietaire*/
   public static function ajouter( $prenom, $nom, $telephone, $adresse, $ville, $code_postale, $province) {
       $messageAjout = '';

       $mysqli = self::connecter();
       
       // Création d'une requête préparée
       if ($requete = $mysqli->prepare("INSERT INTO proprietaires( prenom, nom, telephone, adresse, ville, code_postale, province) VALUES(?, ?, ?, ?, ?, ?, ?)")) {      

       /************************* ATTENTION **************************/
       /* On ne fait présentement peu de validation des données.     */
       /* On revient sur cette partie dans les prochaines semaines!! */
       /**************************************************************/

       $requete->bind_param("sssssss", $prenom, $nom, $telephone, $adresse, $ville, $code_postale, $province);

       if($requete->execute()) { // Exécution de la requête
           $messageAjout = "Propriétaire ajouté";  // Message ajouté dans la page en cas d'ajout réussi
       } else {
           $messageAjout =  "Une erreur est survenue lors de l'ajout: " . $requete->error;  // Message ajouté dans la page en cas d’échec
       }

       $requete->close(); // Fermeture du traitement

       } else  {
           echo "Une erreur a été détectée dans la requête utilisée : ";
           echo $mysqli->error;
           echo "<br>";
           exit();
       }

       return $messageAjout;
   }

   /***
     * Fonction permettant d'éditer un proprietaire
     */
    public static function editer($id, $prenom, $nom, $telephone, $adresse, $ville, $code_postale, $province) {
        $message = '';

        $mysqli = self::connecter();
        
        // Création d'une requête préparée
        if ($requete = $mysqli->prepare("UPDATE proprietaires SET prenom=?, nom=?, telephone=?, adresse=?, ville=?, code_postale=?, province=? WHERE id=?")) {      

        /************************* ATTENTION **************************/
        /* On ne fait présentement peu de validation des données.     */
        /* On revient sur cette partie dans les prochaines semaines!! */
        /**************************************************************/

        $requete->bind_param("sssssssi", $prenom, $nom, $telephone, $adresse, $ville, $code_postale, $province, $id);

        if($requete->execute()) { // Exécution de la requête
            $message = "Propriétaire modifié";  // Message ajouté dans la page en cas d'ajout réussi
        } else {
            $message =  "Une erreur est survenue lors de l'édition: " . $requete->error;  // Message ajouté dans la page en cas d’échec
        }

        $requete->close(); // Fermeture du traitement

        } else  {
            echo "Une erreur a été détectée dans la requête utilisée : ";
            echo $mysqli->error;
            echo "<br>";
            exit();
        }

        return $message;
    }


    /***
     * Fonction permettant de supprimer un proprietaire
     */
    public static function supprimer($id) {
        $message = '';

        $mysqli = self::connecter();
        
        // Création d'une requête préparée
        if ($requete = $mysqli->prepare("DELETE FROM proprietaires WHERE id=?")) {      

        /************************* ATTENTION **************************/
        /* On ne fait présentement peu de validation des données.     */
        /* On revient sur cette partie dans les prochaines semaines!! */
        /**************************************************************/

        $requete->bind_param("i", $id);

        if($requete->execute()) { // Exécution de la requête
            $message = "Proprietaire supprimé";  // Message ajouté dans la page en cas d'ajout réussi
        } else {
            $message =  "Une erreur est survenue lors de la suppression: " . $requete->error;  // Message ajouté dans la page en cas d’échec
        }

        $requete->close(); // Fermeture du traitement

        } else  {
            echo "Une erreur a été détectée dans la requête utilisée : ";
            echo $mysqli->error;
            echo "<br>";
            exit();
        }

        return $message;
    }

}

?>