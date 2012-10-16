<!DOCTYPE html>
<html lang="fr-BE">
<head>
	<meta charset="utf-8">
	<title>Bienvenue sur Adopte un prof - <?php echo $titre; ?></title>
</head>
<body>
    <?php if($this->session->userdata('logged_in'))
        {
        echo anchor( 'member/deconnecter',"Se déconnecter",array('title'=>'Pour se déconnecter', 'hreflang'=>'fr' ));
        }?>
    <?php echo $vue ?>

</body>
</html>