<?php

require_once './modeles/proprietaires.php';

class ControleurProprietaires {

    function afficherListe() {

        $proprietaires = modele_proprietaire::ObtenirTous();
        require './vues/proprietaires/listeProprietaires.php';
    }

    function afficherTableau() {
        $proprietaires = modele_proprietaire::ObtenirTous();
        require './vues/proprietaires/tableauProprietaires.php';
    }

    /***
     * Fonction permettant de récupérer l'ensemble des produits et de les afficher sous forme de tableau avec boutons d'actions
     */
    function afficherFiche() {
        if(isset($_GET["id"])){
        $proprietaire = modele_proprietaire::ObtenirUn($_GET['id']);
        require './vues/proprietaires/fiche.php';
    } else {
        $erreur = "Le propriétaire à afficher est manquant dans l'url";
        require './vues/erreur.php';
    }

}
 

        /***
     * Fonction permettant de récupérer un proprietaire à partir de l'identifiant (id) 
     * inscrit dans l'URL, et l'affiche dans un formulaire pour édition
     */
    function afficherFormulaireEdition(){
        if(isset($_GET["id"])) {
            $proprietaire = modele_proprietaire::ObtenirUn($_GET["id"]);
            if($proprietaire) {  // ou if($proprietaire != null)
                require './vues/proprietaires/formulaireEdition.php';
            } else {
                $erreur = "Aucun proprietaire trouvé";
                require './vues/erreur.php';
            }
        } else {
            $erreur = "L'identifiant (id) du proprietaire à afficher est manquant dans l'url";
            require './vues/erreur.php';
        }
    }

    /***
     * Fonction permettant de récupérer un produit à partir de l'identifiant (id) 
     * inscrit dans l'URL, et l'affiche dans un formulaire pour suppression
     */
    function afficherFormulaireSuppression(){
        if(isset($_GET["id"])) {
            $produit = modele_produit::ObtenirUn($_GET["id"]);
            if($produit) {  // ou if($produit != null)
                require './vues/produits/formulaireSuppression.php';
            }
        } else {
            $erreur = "L'identifiant (id) du produit à afficher est manquant dans l'url";
            require './vues/erreur.php';
        }
    }


     /***
     * Fonction permettant d'ajouter un propriétaire (validation du formulaire)
     */
    function ajouter() {
        if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['telephone']) && isset($_POST['adresse']) && isset($_POST['ville']) && isset($_POST['code_postale']) && isset($_POST['province'])) {
            $message = modele_proprietaire::ajouter($_POST['prenom'], $_POST['nom'], $_POST['telephone'], $_POST['adresse'], $_POST['ville'], $_POST['code_postale'], $_POST['province']);
            echo $message;
        } else {
            $erreur = "Impossible d'ajouter un proprietaire. Des informations sont manquantes";
            require './vues/erreur.php';
        }
    }

    /***
     * Fonction permettant d'editer un produit
     */
    function editer() {
        if(isset($_GET['id'], $_POST['prenom']) && isset($_POST['nom']) && isset($_POST['telephone']) && isset($_POST['adresse']) && isset($_POST['ville']) && isset($_POST['code_postale']) && isset($_POST['province'])) {
            $message = modele_proprietaire::editer($_GET['id'], $_POST['prenom'], $_POST['nom'], $_POST['telephone'], $_POST['adresse'], $_POST['ville'], $_POST['code_postale'], $_POST['province']);
            echo $message;
        } else {
            $erreur = "Impossible d'éditer le propriétaire. Des informations sont manquantes";
            require './vues/erreur.php';
        }
    }

    /***
     * Fonction permettant de supprimer un produit
     */
    function supprimer() {
        if(isset($_GET['id'])) {
            $message = modele_proprietaire::supprimer($_GET['id']);
            echo $message;
        } else {
            $erreur = "Impossible de supprimer le propriétaires Des informations sont manquantes";
            require './vues/erreur.php';
        }
    }



}

?>