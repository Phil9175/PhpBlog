
<div class="moduleCenter">
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
		$article = ($pageouarticle == "article.layout")?"article\"checked=\"checked":"1";
		$page = ($pageouarticle == "page.layout")?"page\"checked=\"checked":"1";
		
		$addArticle = new formulaire("editArticle", "", "POST", "/admin/article/edit/".$id, "name");
		if (security::get_can_modify_page(security::returnId()) && security::get_can_add_page(security::returnId())){
		$addArticle->ajoutElement("Modifier en page", "radio", "pageouarticle", "", "pageouarticle", "", $page, "", "", "", "");
		$addArticle->ajoutElement("Modifier en article", "radio", "pageouarticle", "", "pageouarticle", "", $article, "", "", "", "");
		}
		$addArticle->ajoutElement("Titre", "text", "titre", "", "titre", "TRUE", $titre, "", "", "120", ""); 
		$addArticle->ajoutElement("Meta Title", "text", "meta_title", "", "meta_title", "TRUE", $formmeta_title, "", "", "120", ""); 
		$addArticle->ajoutElement("Meta Description", "text", "meta_description", "", "meta_description", "TRUE", $formmeta_description, "", "", "120", ""); 
		$addArticle->ajoutElement("URL", "text", "url", "", "url", "TRUE", $article_url, "", "", "120", ""); 
		$addArticle->ajoutElement("", "textarea", "contenu", "ckeditor", "contenu", "TRUE", $contenu, "", "", "", "");
		$addArticle->ajoutElement("Tags (separés par ;)", "text", "tags", "", "tags", "TRUE", $tags, "", "", "120", ""); 
		$addArticle->ajoutElement("Mot clé", "text", "keyword", "", "keyword", "TRUE", $keyword, "", "", "80", ""); 

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
