
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
		$addArticle = new formulaire("addArticle", "", "POST", "/admin/article/add", "name", "multipart/form-data");
		$addArticle->ajoutElement("Titre", "text", "titre", "", "titre", "TRUE", "", "", "", "120", ""); 
		$addArticle->ajoutElement("Meta Title", "text", "meta_title", "", "meta_title", "TRUE", "", "", "", "120", ""); 
		$addArticle->ajoutElement("Meta Description", "text", "meta_description", "", "meta_description", "TRUE", "120", "", "", "", ""); 
		$addArticle->ajoutElement("Contenu", "textarea", "contenu", "ckeditor", "contenu", "TRUE", "", "", "", "", "");
		$addArticle->ajoutElement("Tags (separés par ;)", "text", "tags", "", "tags", "TRUE", "", "", "", "120", ""); 
        $addArticle->ajoutElement("Enregistrer", "submit", "enregistrer", "", "", "", "Enregistrer", "", "", "", "");
		echo $addArticle->afficheForm();
		?>

    </div>

