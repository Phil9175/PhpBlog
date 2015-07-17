
    <div class="module">
     	<?php
		$addArticle = new formulaire("editArticle", "", "POST", "/admin/article/edit/".$id, "name");
		$addArticle->ajoutElement("Titre", "text", "titre", "", "titre", "TRUE", $titre, "", "", "120", ""); 
		$addArticle->ajoutElement("Meta Title", "text", "meta_title", "", "meta_title", "TRUE", $formmeta_title, "", "", "", ""); 
		$addArticle->ajoutElement("Meta Description", "text", "meta_description", "", "meta_description", "TRUE", $formmeta_description, "", "", "", ""); 
		$addArticle->ajoutElement("Contenu", "textarea", "contenu", "ckeditor", "contenu", "TRUE", $contenu, "", "", "", "");
        $addArticle->ajoutElement("Enregistrer", "submit", "enregistrer", "", "", "", "Enregistrer", "", "", "", "");
		echo $addArticle->afficheForm();
		?>

	    </div>

