
	<div class="moduleCenter justify">
		<div class="grid grid-pad article">
			<h1 class="blue"><?php echo $titre; ?></h1>
			<p class="authorinfos"><i class="fa fa-user black"></i> Par <a cass="blue" href="<?php echo ADRESSE_SITE; ?>/profil/view/<?php echo $idUser; ?>"><?php echo $nom; ?></a> | <i class="fa fa-calendar black"></i> Le <?php echo $datePublication; if($datePublication < $dateModification):?>, Modifié le <?php echo $dateModification ;?>
				<?php endif; ?>
				<?php if (security::is_connected() === TRUE && security::get_can_modify_page(security::returnId())): ?>
			<p class="modify"><i class="fa fa-edit black"></i><a cass="blue" href="<?php echo ADRESSE_SITE; ?>/admin/article/edit/<?php echo $id; ?>">Editer l'article</a></p>
			<?php endif; ?>
			</p>
			<?php echo html_entity_decode($contenu); ?> </div>
		<?php if (!empty($tabArticles)): ?>
		<div class="grid grid-pad left">
			<h2 class="blue">Vous aimerez aussi certainement les articles suivants :</h2>
			<?php foreach($tabArticles as $key => $value): ?>
			<div class="col-1-3"> <a href="<?php echo ADRESSE_SITE."/".$value['article_url']; ?>"><?php echo $value['titre']; ?></a></div>
			<?php endforeach; ?>
			</div>
			<?php
			endif;
			if (security::is_connected()): 
			?>
		<div class="grid grid-pad comment">
			<div class="col-1-3">Votre commentaire :</div>
			<div class="col-2-3">
				<?php
				$formulaire = new formulaire("commentAdd", "", "POST", "/".$urlArticle."/comment", "");
				$formulaire->ajoutElement("", "textarea", "commentaire", "entryInput", "commentaire", "TRUE", "", "", "", "10", "66");
				$formulaire->ajoutElement("Envoyer le commentaire", "submit", "commenter", "entryInput", "", "", "Envoyer le commentaire", "", "", "", "");
				echo $formulaire->afficheForm();
			
			?>
			</div>
		</div>
		<?php
		endif;
			if (!empty($commentaire)):
				foreach($commentaire as $key => $value):
			?>
		<div class="grid grid-pad comment">
			<div class="col-1-3"> Publié le <br>
				<?php echo date('d/m/Y \à H:i:s', strtotime($value['date_publication'])); ?><br>
				par <a href="/profil/view/<?php echo $value['idUtilisateur']; ?>"><?php echo $value['pseudo']; ?></a>
				<?php
				if (security::get_can_modify_commentaire(security::returnId())):
			?>
				<br>
				<br>
				<a href="/<?php echo $urlArticle; ?>/delete/<?php echo $value['idCommentaire']; ?>"><i class="fa fa-trash-o"></i> Supprimer</a>
				<?php
				endif;
			?>
			</div>
			<div class="col-2-3"> <?php echo $value['texte']; ?> </div>
		</div>
		<?php
				endforeach;
			endif;
		?>
	</div>
