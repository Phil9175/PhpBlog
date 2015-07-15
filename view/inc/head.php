<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="<?php echo ADRESSE_SITE; ?>/view/css/style.css" rel="stylesheet" type="text/css">
<title>Document sans nom</title>
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
		  $user = new users();
          $user->getOneBy($_SESSION['session'], "token", "users");
          $user->setFromBdd($user->result);
?>
			Bienvenue <?php echo $user->get_pseudo(); ?><a href="<?php echo ADRESSE_SITE."/admin/"; ?>"><img src="<?php echo ADRESSE_SITE; ?>/view/images/icone-accueil.png" width="40px" ></a> <a href="<?php echo ADRESSE_SITE."/admin/disconnect"; ?>"><img src="<?php echo ADRESSE_SITE; ?>/view/images/icone-logout.png" width="40px" ></a>
			<?php
	  }else{
        $formulaire = new formulaire("identificationAdmin", "", "POST", "/admin/auth", "");
        $formulaire->ajoutElement("Email", "text", "email", "", "email", "", "", "", ["email" => ""], "", "");
		$formulaire->ajoutElement("Mot de passe", "password", "pass", "", "pass", "", "", "", "", "", "");
        $formulaire->ajoutElement("Se connecter", "submit", "rechercher", "", "", "", "Se connecter", "", "", "", "");
        echo $formulaire->afficheForm();
		?>
			<?php
	  }
        ?>
		</div>
	</div>
