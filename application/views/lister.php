<div id="container">
	<h1>Adopte un prof !</h1>

        <h1>Lister des profs</h1>
        <?php if(count($profs)): ?>
            <ul>
                <?php foreach($profs as $prof):?>
                    <li class="prof libre">
                        <h3>
                            <?php echo anchor( 'prof/voir/'.$prof->prof_id,$prof->prenom.' '.$prof->nom,array('title'=>'voir la fiche de '.$prof->prenom.' '.$prof->nom, 'hreflang'=>'fr' )); ?>
                        </h3>
                        <div class="image">
                            <?php echo anchor( 'prof/voir/'.$prof->prof_id,'<img src="'.site_url().THUMBS_DIR.$prof->photo.'" title="photo de '.$prof->prenom.' '.$prof->nom.'" alt="photo de '.$prof->prenom.' '.$prof->nom.'" />'
,array('title'=>'voir la fiche de '.$prof->prenom.' '.$prof->nom, 'hreflang'=>'fr' )); ?>
                        
                            
                        </div>
                        <p class="caractere"><?php echo $prof->caractere; ?></p>
                        <p class="specialite">
                            Bosse en <?php echo anchor( 'prof/lister/spec/'.$prof->sspec_id,$prof->specialite,array('title'=>'voir les profs de '.$prof->specialite, 'hreflang'=>'fr' )); ?>
                        </p>
                        <p>
                            <a href="#">J'adopte ce prof</a>
                        </p>
                    </li>
                <?php endforeach; ?>
            </ul>
         <?php endif; ?>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>