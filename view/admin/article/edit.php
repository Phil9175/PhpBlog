
    <div class="module">
	 <?php if (isset($_POST['isSubmit'])):
	  				if (isset($errors)):
		  			foreach($errors as $key => $values):
			?>
            <li><?php echo $values; ?>
            <?php 
					endforeach; 
				endif;
			endif;
			?>
     	<?php
		$addArticle = new formulaire("editArticle", "", "POST", "/admin/article/edit/".$id, "name");
		$addArticle->ajoutElement("Titre", "text", "titre", "", "titre", "TRUE", $titre, "", "", "120", ""); 
		$addArticle->ajoutElement("Meta Title", "text", "meta_title", "", "meta_title", "TRUE", $formmeta_title, "", "", "120", ""); 
		$addArticle->ajoutElement("Meta Description", "text", "meta_description", "", "meta_description", "TRUE", $formmeta_description, "", "", "120", ""); 
		$addArticle->ajoutElement("Contenu", "textarea", "contenu", "ckeditor", "contenu", "TRUE", $contenu, "", "", "", "");
		$addArticle->ajoutElement("Tags (separés par ;)", "text", "tags", "", "tags", "TRUE", $tags, "", "", "120", ""); 

        $addArticle->ajoutElement("Enregistrer", "submit", "enregistrer", "", "", "", "Enregistrer", "", "", "", "");
		echo $addArticle->afficheForm();
		?>

	    </div>

