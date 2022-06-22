<?php

include_once "./include/config.php";

class modele_animal {
    public $prenom; 
    public $type; 
    public $nom;
    public $telephone;

    public function __construct($prenom, $type, $nom, $telephone) {
        $this->prenom = $prenom;
        $this->type = $type;
        $this->nom = $nom;
        $this->nom = $telephone;
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

        $resultatRequete = $mysqli->query("SELECT animaux.prenom, type, nom, telephone FROM animaux INNER JOIN proprietaires ON animaux.fk_proprietaire= proprietaires.id;");

        foreach ($resultatRequete as $enregistrement) {
            $liste[] = new modele_animal($enregistrement['prenom'], $enregistrement['type'], $enregistrement['nom'], $enregistrement['telephone']);
        }

        return $liste;
    }
}

?>