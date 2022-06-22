<?php

require_once './modeles/rdvs.php';

class ControleurRdvs {

    function afficherListe() {

        $rdvs = modele_rdv::ObtenirTous();
        require './vues/rdvs/listeRdvs.php';
    }

    function afficherTableau() {
        $rdvs = modele_rdv::ObtenirTous();
        require './vues/rdvs/cardRdvs.php';
    }

}

?>