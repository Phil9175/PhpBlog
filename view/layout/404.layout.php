<!doctype html>
    <html>
        <head>
            <meta charset="UTF-8">
            <link href="<?php $_SERVER['HTTP_HOST']; ?>/view/css/style.css" rel="stylesheet" type="text/css">
            <title>Document sans nom</title>
        </head>
    <body>
    	<!-- HEADER -->
        <div class="grid grid-pad">
          <div class="col-2-8"> <a href="<?php echo ADRESSE_SITE; ?>"><img src="<?php $_SERVER['HTTP_HOST']; ?>/images/JDR.png" height="40px"></a><br>
            <em>Journal du Référencement</em> </div>
          <div class="col-4-8"> Bienvenue sur le Journal Du Référencement<br>
            Veille technologique sur le referencement, nous vous montrerons les techniques de<br>
            referencement. </div>
          <div class="col-2-8">
            <?php
        $formulaire = new formulaire("formulaireRecherche", "css", "POST", "/index/recherche", "");
        $formulaire->ajoutElement("recherche", "text", "recherche", "", "recherche", "", "", "", ["minlength" => 3, "maxlength" => 10]);
        $formulaire->ajoutElement("Rechercher", "submit", "rechercher", "", "", "", "Rechercher");
        echo $formulaire->afficheForm();
        ?>
          </div>
        </div>
        
    	<!-- MENU -->
        <div class="grid grid-pad">
          <div class="col-3-3">
            <div class="module">
              <div id="menu">
                <ul>
                  <li><a href="<?php echo ADRESSE_SITE; ?>">Accueil</a>
                  <li>Item 2
                  <li>Item 3
                  <li>Item 4
                  <li>Item 5
                  <li>Item 6
                </ul>
              </div>
            </div>
          </div>
        </div>
        
    	<!-- ARIANE -->
        <div id="ariane" class="grid grid-pad">
          <div class="col-3-3">
            <div class="module"> Fil d'ariane </div>
          </div>
        </div>
        
        <div class="grid grid-pad">
    	<!-- VUE -->
		  <div class="col-2-3">
        	<?php include "view/".$controller."/".$action.".php";?>
          </div>
        
    	<!-- SIDEBAR -->
            <div class="col-1-3">
              <div class="module">
                  <h3>1/3</h3>
                  <p><?php 
                  foreach($allArticles as $key => $values): ?>
                      <a href="<?php echo ADRESSE_SITE."/".$values["article_url"]; ?>" title="<?php echo $values["titre"]; ?>"><?php echo $values["titre"]; ?></a><br>
                <?php endforeach; ?></p>
              </div>
            </div>
        </div>
        
    	<!-- FOOTER -->

        <div class="grid grid-pad">
          <div class="col-1-4">
            <div class="module">
              <h3>1/4</h3>
            </div>
          </div>
          <div class="col-1-2">
            <div class="module">
              <h3>1/2</h3>
            </div>
          </div>
          <div class="col-1-4">
            <div class="module">
              <h3>1/4</h3>
            </div>
          </div>
        </div>
    </body>
</html>
