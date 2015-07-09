<body>
<div class="grid grid-pad">
  <div class="col-2-8"> <img src="<?php $_SERVER['HTTP_HOST']; ?>/images/JDR.png" height="40px"><br>
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
<div class="grid grid-pad">
  <div class="col-3-3">
    <div class="module">
    <div id="menu">
    <ul>
    <li><a href="/index">Accueil</a>
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
<div id="ariane" class="grid grid-pad">
  <div class="col-3-3">
    <div class="module">
    Fil d'ariane
    </div>
    </div>
    </div>
    