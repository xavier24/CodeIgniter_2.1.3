<h1>Adopte un prof - fiche de <?php echo $prof->prenom.' '.$prof->nom ?></h1>
<div>
    <div>
        <h2>La fiche de <?php echo $prof->prenom.' '.$prof->nom ?></h2>
        <div>
             <img src="<?php echo site_url().THUMBS_DIR.$prof->photo; ?>" title="photo de <?php echo $prof->prenom.' '.$prof->nom ?>" alt="photo de <?php echo $prof->prenom.' '.$prof->nom ?>" />     
        </div>
        <p><?php echo $prof->caractere ?></p>
        <p>Bosse en <?php echo anchor( 'prof/lister/'.$prof->specialite,$prof->specialite,array('title'=>'voir les profs de '.$prof->specialite, 'hreflang'=>'fr' )); ?>
        <p><?php echo $prof->cv ?></p>
    </div>
    <p class="adopte">
        <a href="" title="adopter <?php echo $prof->prenom.' '.$prof->nom ?>">J'adopte ce prof !</a>
    </p>
</div>
<p id="voirliste">
    <?php echo anchor( 'prof/lister','Voir la liste des profs, toutes spécialités confondues',array('title'=>'voir la liste des profs', 'hreflang'=>'fr' )); ?>
</p>