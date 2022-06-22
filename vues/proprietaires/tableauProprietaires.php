<!-- Affichage en mode "tableau" -->
<h1>Affichage en mode "tableau"</h1>
<table>

    <?php 
        foreach ($proprietaires as $proprietaire) {
    ?>
        <tr>
            <td><?= $proprietaire->id?></td>
            <td><?= $proprietaire->prenom?></td>
            <td><?= $proprietaire->nom ?></td>
            <td><?= $proprietaire->telephone ?></td>
            <td><?= $proprietaire->adresse ?></td>
            <td><?= $proprietaire->ville ?></td>
            <td><?= $proprietaire->code_postale ?></td>
            <td><?= $proprietaire->province ?></td>

            <td> 
                <a href = "fiche_proprietaire.php?id=<?= $proprietaire->id ?>">Afficher</a>
       
                |
                <a href = "edition_proprietaire.php?id=<?= $proprietaire->id ?>">Modifier</a>
                |
                <a href = "supression_proprietaire.php?id=<?= $proprietaire->id ?>">Supprimer</a>
        </td>   
        </tr>
    <?php
        }
    ?>
</table>

<a href="ajout_proprietaire.php">Ajouter un proprietaire</a>