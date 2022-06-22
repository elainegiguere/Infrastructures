<?php
    require_once 'controleurs/proprietaires.php';
//     if(isset($_GET ['id'])){
//     echo $_GET['id'];
// }
?>

<!doctype html>
<html lang="fr">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/style.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css 		  
         integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
         
  <title>Vétérinaire - Fiche proprétaire</title>
 </head>
 <body>

 <!-- Navigation -->
<?php
require_once 'section-template/navigation.php';
?>
    <h1>Fiche détaillée d'un propriétaire</h1>

    <?php
         $controleur=new ControleurProprietaires;
         $controleur->afficherFiche();
    ?>
 </body>
</html>
