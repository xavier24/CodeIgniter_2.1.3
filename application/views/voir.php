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
    <?php if(!isset($deja_adoptes[$prof->prof_id])): ?>
        <p class ="adopte">
            <?php echo anchor( 'prof/adopte/'.$prof->prof_id,"J'adopte ce prof",array('title'=>'voir les profs de '.$prof->specialite, 'hreflang'=>'fr' )); ?>
        </p>
        <?php else: ?>
        <p class ="adopte">
            <?php echo anchor( 'prof/libere/'.$prof->prof_id,"Je libère ce prof",array('title'=>'voir les profs de '.$prof->specialite, 'hreflang'=>'fr' )); ?>
        </p>
    <?php endif ?>  
</div>
<p id="voirliste">
    <?php echo anchor( 'prof/lister','Voir la liste des profs, toutes spécialités confondues',array('title'=>'voir la liste des profs', 'hreflang'=>'fr' )); ?>
</p>
<?php if($deja_adoptes): ?>
                
            <div id="panier">
                <ul>
                    <?php foreach($deja_adoptes as $prof): ?>
                    <li>
                        <?php echo $prof->nom.' '.$prof->prenom ?> - <?php echo anchor( 'prof/libere/'.$prof->prof_id,"Je libère ce prof",array('title'=>'voir les profs de '.$prof->specialite, 'hreflang'=>'fr' )); ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>