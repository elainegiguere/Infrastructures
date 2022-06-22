<!-- Affichage en mode "liste" -->
<h1>Affichage en mode "liste"</h1>
<ul>
         <?php foreach ($veterinaires as $veterinaire) {  ?> 
        <li><?= $veterinaire->id ?> (<?= $veterinaire->prenom ?>)(<?= $veterinaire->nom ?>)</li>

    <?php  } ?>
</ul>