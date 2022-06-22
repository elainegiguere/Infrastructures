<div class="card">
  <img class="img-fluid fiche"src="https://picsum.photos/200" alt="une photo aléatoire">
  <div class="container">
    <h3><b>Nom du propriétaire:<?= $proprietaire-> nom?></b></h3>
    <h4>Prénom du propriétaire: <?= $proprietaire->prenom?></h4>
    <h4>Téléhpone: <?= $proprietaire->telephone?></h4>
    <h4>Adresse: <?= $proprietaire->adresse?></h4>
    <h4>Ville: <?= $proprietaire->ville?></h4>
    <h4>Code postale: <?= $proprietaire->code_postale?></h4>
    <h4>Province: <?= $proprietaire->province?></h4>
    <h6>Id du propriétaire: <?= $proprietaire->id?></h6>
  </div>
</div>