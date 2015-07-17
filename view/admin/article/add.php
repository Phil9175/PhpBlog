
    <div class="module">
     	<?php
		$addArticle = new formulaire("addArticle", "", "POST", "/admin/article/add", "name", "multipart/form-data");
		$addArticle->ajoutElement("Titre", "text", "titre", "", "titre", "TRUE", "", "", "", "", ""); 
		$addArticle->ajoutElement("Meta Title", "text", "meta_title", "", "meta_title", "TRUE", "", "", "", "", ""); 
		$addArticle->ajoutElement("Meta Description", "text", "meta_description", "", "meta_description", "TRUE", "", "", "", "10", "80"); 
		$addArticle->ajoutElement("Contenu", "textarea", "contenu", "ckeditor", "contenu", "TRUE", "", "", "", "", "");
        $addArticle->ajoutElement("Enregistrer", "submit", "enregistrer", "", "", "", "Enregistrer", "", "", "", "");
		echo $addArticle->afficheForm();
		?>

    </div>

