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
            <a href="<?php echo ADRESSE_SITE."/admin/disconnect"; ?>">Deconnexion</a>
          </div>
        </div>
        
    	<!-- MENU -->
        <div class="grid grid-pad">
          <div class="col-3-3">
            <div class="module">
              <div id="menu">
                <ul>
                  <li><a href="<?php echo ADRESSE_SITE; ?>/admin">Accueil</a>
                  <li><a href="<?php echo ADRESSE_SITE; ?>/admin/article/add">Article</a>
                  <li>Item 3
                  <li>Item 4
                  <li>Item 5
                  <li>Item 6
                </ul>
              </div>
            </div>
          </div>
        </div>
        
        <div class="grid grid-pad">
    	<!-- VUE -->
		  <div class="col-3-3">
        	<?php include "view/".$controller."/".$action.".php";?>
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
