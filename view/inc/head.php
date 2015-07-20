<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="<?php echo ADRESSE_SITE; ?>/view/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo ADRESSE_SITE; ?>/view/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<title><?php echo $meta_title; ?></title>
<meta name="description" content="<?php echo $meta_description; ?>">
</head>
<body>
	<!-- HEADER -->
	<div class="grid grid-pad">
		<div class="col-2-8"> <a href="<?php echo ADRESSE_SITE; ?>"><img src="<?php echo ADRESSE_SITE; ?>/images/JDR.png" height="40px"></a><br>
			<em>Journal du Référencement</em> </div>
		<div class="col-4-8"> Bienvenue sur le Journal Du Référencement<br>
			Content is king, link is his queen.</div>
		<div class="col-2-8">
			<?php
	  if (security::is_connected() === TRUE) {
?>
			Bienvenue <?php echo $_SESSION['nomUtilisateur']; ?><a class="fa fa-home fa-3x noDecoration black" href="<?php echo ADRESSE_SITE."/admin/"; ?>"></a> <a class="fa fa-sign-out fa-3x noDecoration black" href="<?php echo ADRESSE_SITE."/admin/disconnect"; ?>"></a>
			<?php
	  }else{
        $formulaire = new formulaire("identificationAdmin", "", "POST", "/admin/auth", "");
        $formulaire->ajoutElement("Email", "text", "email", "", "email", "", "", "", ["email" => ""], "", "");
		$formulaire->ajoutElement("Mot de passe", "password", "pass", "", "pass", "", "", "", "", "", "");
        $formulaire->ajoutElement("Se connecter", "submit", "rechercher", "", "", "", "Se connecter", "", "", "", "");
        echo $formulaire->afficheForm();
		?>
		<a href="<?php echo ADRESSE_SITE; ?>/inscription">Inscription</a>
			<?php
	  }
        ?>
		</div>
	</div>
