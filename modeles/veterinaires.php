<?php

include_once "./include/config.php";

class modele_veterinaire {
    public $id; 
    public $prenom; 
    public $nom;

    public function __construct($id, $prenom, $nom) {
        $this->id = $id;
        $this->prenom = $prenom;
        $this->nom = $nom;
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

    public static function ObtenirTous() {
        $liste = [];
        $mysqli = self::connecter();

        $resultatRequete = $mysqli->query("SELECT id, prenom, nom FROM veterinaires ORDER BY nom");

        foreach ($resultatRequete as $enregistrement) {
            $liste[] = new modele_veterinaire($enregistrement['id'], $enregistrement['nom'], $enregistrement['prenom']);
        }

        return $liste;
    }
}

?>