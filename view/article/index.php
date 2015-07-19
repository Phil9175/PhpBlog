
	<div class="moduleCenter justify">
			<h1 class="blue"><?php echo $titre; ?></h1>
			<p class="authorinfos"><i class="fa fa-user black"></i> Par <a cass="blue" href="<?php echo ADRESSE_SITE; ?>/profil/view/<?php echo $idUser; ?>"><?php echo $nom; ?></a> | <i class="fa fa-calendar black"></i> Le <?php echo $datePublication; if($datePublication < $dateModification):?>, Modifié le <?php echo $dateModification ;?>
				<?php endif; ?>
				<?php if (security::is_connected() === TRUE && security::get_can_modify_page(security::returnId())): ?>
			<p class="modify"><i class="fa fa-edit black"></i><a cass="blue" href="<?php echo ADRESSE_SITE; ?>/admin/article/edit/<?php echo $id; ?>">Editer l'article</a></p>
			<?php endif; ?>
			</p>
			<?php echo html_entity_decode(fonctions::format(fonctions::format($contenu, "<br />", ""), "&nbsp;", "")); ?>
			<div class="grid grid-pad">
				<h2 class="blue">Vous aimerez aussi certainement les articles suivants :</h2>
				<?php foreach($tabArticles as $key => $value): ?>
				<div class="col-1-3">
				<a href="<?php echo ADRESSE_SITE."/".$value['article_url']; ?>"><?php echo $value['titre']; ?></a></div>
			<?php endforeach; ?>
			</div>
		<div class="grid grid-pad">
			<div class="col-1-3"> Test </div>
			<div class="col-2-3"> Et oui </div>
		</div>
	</div>
