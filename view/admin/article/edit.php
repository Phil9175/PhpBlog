
    <div class="moduleCenter">
     
 <div id="stylingText" class="module">
	
	<ul class="commandes">
	<li><button onclick="javascript:gras();" class="gras"></button>
	<li><button onclick="javascript:souligne();" class="souligne"></button>
	<li><button onclick="javascript:italique();" class="italique"></button>
	<li><button onclick="javascript:barre();" class="barre"></button>
	<li><button onclick="javascript:alignLeft();" class="alignLeft"></button>
	<li><button onclick="javascript:alignRight();" class="alignRight"></button>
	<li><button onclick="javascript:alignJustify();" class="alignJustify"></button>
	<li><button onclick="javascript:alignCenter();" class="alignCenter"></button>
	</ul>
			<div id="fake_textarea" style="width:600px;height:200px;background-color:white;overflow:auto;" contenteditable><?php echo $contenu; ?></div>
     	<?php
		$addArticle = new formulaire("editArticle", "", "POST", "/admin/article/edit/".$id, "name");
		$addArticle->ajoutElement("Titre", "text", "titre", "", "titre", "TRUE", $titre, "", "", "", ""); 
		$addArticle->ajoutElement("", "hidden", "contenu", "", "contenu", "TRUE", "", "", "", "", "");
        $addArticle->ajoutElement("Enregistrer", "submit", "enregistrer", "", "", "", "Enregistrer", "", "", "", "");
		echo $addArticle->afficheForm();
		?>

    </div>
	
	    </div>
