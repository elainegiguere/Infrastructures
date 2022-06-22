<?php
    require_once 'controleurs/proprietaires.php';
    
    if (isset($_POST['boutonAjouter'])){
      $controleurProprietaires=new ControleurProprietaires;
      $controleurProprietaires->ajouter();
    }
?>
<!doctype html> 
<html lang="en">
	 <head>
         <!-- Required meta tags -->
		 <meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <link rel="stylesheet" href="css/style.css">
		<!-- Bootstrap CSS -->
		 <link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css 		  
         integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
		<title>Propriétaires</title> 
	</head>
<body>

<!-- Navigation -->
<?php
require_once 'section-template/navigation.php';
?>

<div class="container">

<div class="row pt-5">
  <div class="col-md-8">
   <h4> Formulaire d'inscription des nouveaux propriétaires</h4>
  </div>
</div>
  <div class="formWrapper">
<form method="POST" class="row g-3">
  <div class="col-md-6 pb-2">
    <label for="prenom" class="form-label">Prénom</label>
    <input type="text" id="prenom" name="prenom" required maxlength="30">
  </div>
  <div class="col-md-6 pb-2">
    <label for="Nom" class="form-label">Nom</label>
    <input type="text" id="nom" name="nom" required maxlength="30">
  </div>
  <div class="col-12 pb-2">
    <label for="telephone" class="form-label">Téléphone</label>
    <input type="text" id="telephone" name="telephone" required maxlength="30">
  </div>
  <div class="col-12 pb-2">
    <label for="inputAddress" class="form-label">Adresse</label>
    <input type="text" id="adresse" name="adresse" required maxlength="30">
  </div>
  <div class="col-12 pb-2">
    <label for="ville" class="form-label">Ville</label>
    <input type="text" id="ville" name="ville" required maxlength="30">
  </div>
  <div class="col-md-6 pb-2">
    <label for="code_postale" class="form-label">Code postale</label>
    <input type="text" id="code_postale" name="code_postale" required maxlength="7">
  </div>
  <div class="col-md-4 pb-2">
    <label for="province" class="form-label">Province</label>
    <select id="province" class="province">
      <option selected>Province...</option>
      <option>Québec</option>
      <option>Ontario</option>
    </select>
  </div>
 
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Je m'abonne à l'infolettre (où on peut stocker cette info?)
      </label>
    </div>
  </div>
  <div class="col-12">
    <button name="boutonAjouter" type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
</div>
</div>

</body>
</html>