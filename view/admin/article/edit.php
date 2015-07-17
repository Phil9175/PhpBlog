
    <div class="module">
     	<?php
		$addArticle = new formulaire("editArticle", "", "POST", "/admin/article/edit/".$id, "name");
		$addArticle->ajoutElement("Titre", "text", "titre", "", "titre", "TRUE", $titre, "", "", "", ""); 
		$addArticle->ajoutElement("Contenu", "textarea", "contenu", "ckeditor", "contenu", "TRUE", $contenu, "", "", "", "");
        $addArticle->ajoutElement("Enregistrer", "submit", "enregistrer", "", "", "", "Enregistrer", "", "", "", "");
		echo $addArticle->afficheForm();
		?>

	    </div>

