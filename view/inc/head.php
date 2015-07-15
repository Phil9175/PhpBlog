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
        $formulaire = new formulaire("formulaireRecherche", "css", "POST", "/index/recherche", "");
        $formulaire->ajoutElement("recherche", "text", "recherche", "", "recherche", "", "", "", ["minlength" => 3, "maxlength" => 10], "", "", "", "");
        $formulaire->ajoutElement("Rechercher", "submit", "rechercher", "", "", "", "Rechercher", "", "", "", "");
        echo $formulaire->afficheForm();
        ?>
          </div>
        </div>