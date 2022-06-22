<?php

include_once "./include/config.php";

class modele_rdv {
    public $date; 
    public $heure; 

    public function __construct($date, $heure) {
        $this->date = $date;
        $this->heure = $heure;
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

        $resultatRequete = $mysqli->query("SELECT date_rdv, heure_rdv FROM `rdvs` ORDER BY date_rdv;");

        foreach ($resultatRequete as $enregistrement) {
            $liste[] = new modele_rdv($enregistrement['date_rdv'], $enregistrement['heure_rdv']);
        }

        return $liste;
    }
}

?>