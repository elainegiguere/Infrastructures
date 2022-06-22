<?php

require_once './modeles/veterinaires.php';

class ControleurVeterinaire {

    function afficherListe() {

        $veterinaires = modele_veterinaire::ObtenirTous();
        require './vues/veterinaires/listeVeterinaires.php';
    }

    function afficherTableau() {
        $veterinaires = modele_veterinaire::ObtenirTous();
        require './vues/veterinaires/tableauVeterinaires.php';
    }

}

?>