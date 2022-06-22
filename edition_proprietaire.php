<?php
    require_once 'controleurs/proprietaires.php';
    
    $controleurProprietaires=new ControleurProprietaires;

    if (isset($_POST['boutonEdition'])){
      $controleurProprietaires->editer();
    }
?>

<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/styles.css">
    <title>Mon super site - Ajout d'un produit</title>
  </head>
  <body>   

    <h1>Formulaire d'édition d'un proprietaire</h1>

    <?php
         $controleurProprietaires->afficherFormulaireEdition();
    ?>

    <a href="proprietaires.php">Retour à la liste des propriétaires</a>
    
  </body>
</html>