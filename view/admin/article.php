
    <div class="module">
	<ul>
	<li><a onclick="javascript:gras();">Mettre en gras</a>
	</ul>
     	<?php
		$addArticle = new formulaire("addArticle", "", "POST", "/admin/article/add", "name");
		$addArticle->ajoutElement("Titre", "text", "titre", "", "titre", "", "", "classe", ["minlength" => 3, "maxlength" => 100], "", "");
		$addArticle->ajoutElement("Contenu", "textarea", "contenu", "", "contenu", "", "", "classe", ["minlength" => 3, "maxlength" => 100], "20", "100");
		echo $addArticle->afficheForm();
		?>
      
    </div>

