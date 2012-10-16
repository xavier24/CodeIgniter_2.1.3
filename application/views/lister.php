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
                            
                            <a href="#" title="voir la fiche de <?php echo $prof->prenom.' '.$prof->nom ?>">
                                <img src="<?php echo site_url().THUMBS_DIR.$prof->photo; ?>" title="photo de <?php echo $prof->prenom.' '.$prof->nom ?>" alt="photo de <?php echo $prof->prenom.' '.$prof->nom ?>" />
                            </a>
                        </div>
                        <p class="caractere"><?php echo $prof->caractere; ?></p>
                        <p class="specialite">
                            Bosse en : <a><?php echo $prof->specialite; ?></a>
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