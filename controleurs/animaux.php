<?php

require_once './modeles/animaux.php';

class ControleurAnimaux {

    function afficherListe() {

        $animaux = modele_animal::ObtenirTous();
        require './vues/animaux/listeAnimaux.php';
    }

    function afficherTableau() {
        $animaux = modele_animal::ObtenirTous();
        require './vues/animaux/tableauAnimaux.php';
    }

}

?>