<!-- Affichage en mode "tableau" -->
<h1>Affichage en mode "tableau"</h1>
<table>

    <?php
        foreach ($veterinaires as $veterinaire) {
    ?>
        <tr>
            <td><?= $veterinaire->id ?></td>
            <td><?= $veterinaire->prenom?></td>
            <td><?= $veterinaire->nom ?></td>
        </tr>
    <?php
        }
    ?>
</table>