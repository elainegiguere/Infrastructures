<!-- Affichage en mode "liste" -->
<h1>Affichage en mode "liste"</h1>
<ul>
         <?php foreach ($proprietaires as $proprietaire) {  ?> 
        <li>  (<?= $proprietaire->prenom ?>)(<?= $proprietaire->nom ?>)</li>

    <?php  } ?>
</ul>