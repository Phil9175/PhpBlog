
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
		$tempTitle = (isset($tempTitle))?$tempTitle:"";			
		$tempContenu = (isset($tempContenu))?$tempContenu:"";			
		$tempUrl = (isset($tempUrl))?$tempUrl:"";			
		$tempTags = (isset($tempTags))?$tempTags:"";			
		$tempMetaTitle = (isset($tempMetaTitle))?$tempMetaTitle:"";			
		$tempMetaDescription = (isset($tempMetaDescription))?$tempMetaDescription:"";			
		$tempKeyword = (isset($tempKeyword))?$tempKeyword:"";			
							
		$addArticle = new formulaire("addArticle", "", "POST", "/admin/article/add", "name", "multipart/form-data");
		$addArticle->ajoutElement("Titre", "text", "titre", "", "titre", "TRUE", $tempTitle, "", "", "120", ""); 
		$addArticle->ajoutElement("Meta Title", "text", "meta_title", "", "meta_title", "TRUE", $tempMetaTitle, "", "", "120", ""); 
		$addArticle->ajoutElement("Meta Description", "text", "meta_description", "", "meta_description", "TRUE", $tempMetaDescription, "", "", "120", ""); 
		$addArticle->ajoutElement("URL", "text", "url", "", "url", "TRUE", $tempUrl, "", "", "120", ""); 
		$addArticle->ajoutElement("", "textarea", "contenu", "ckeditor", "contenu", "TRUE", $tempContenu, "", "", "", "");
		$addArticle->ajoutElement("Tags (separés par ;)", "text", "tags", "", "tags", "TRUE", $tempTags, "", "", "120", "");
		$addArticle->ajoutElement("Mot clé", "text", "keyword", "", "keyword", "TRUE", $tempKeyword, "", "", "80", ""); 
		$addArticle->ajoutElement("Enregistrer", "submit", "enregistrer", "", "", "", "Enregistrer", "", "", "", "");
		echo $addArticle->afficheForm();
		?>
<h2 class="blue">SEOptimization</h2>
	<div id="remarqueTitle"></div>
	<div id="remarqueDescription"></div>
	<div id="remarqueContenu"></div>
	<div id="remarqueURL"></div>
	<div id="remarqueTitre"></div>
	<div id="remarqueTags"></div>
	    </div>

