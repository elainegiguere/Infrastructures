<h1>Affichage en mode "card"</h1>

<div class="container">
    <div class="row">
        

    <?php
        foreach ($rdvs as $rdv) {
    ?>
    <div class="col-md-4 p-4">
        <div class="card">
            <img src="img_avatar.png" alt="Avatar" style="width:100%">
              <div class="container">
              <h4><?= $rdv->date ?></h4>
                 <p><?= $rdv->heure?></p>
                </div>
             </div>
         </div>
    <?php
        }
    ?>
       
    </div>
</div>

