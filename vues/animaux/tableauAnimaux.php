<!-- Affichage en mode "tableau" -->
<h1>Affichage en mode "tableau"</h1>
<table>

    <?php
        foreach ($animaux as $animal) {
    ?>
        <tr>
            <td><?= $animal->prenom ?></td>
            <td><?= $animal->type ?></td>
            <td><?= $animal->nom ?></td>
            <td><?= $animal->telephone ?></td>
        </tr>
    <?php
        }
    ?>
</table>