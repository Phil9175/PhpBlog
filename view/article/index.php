
	<div class="moduleCenter justify">
		<h3><?php echo $titre; ?></h3>
		<p class="authorinfos"><i class="fa fa-user black"></i> Par <a cass="blue" href="<?php echo ADRESSE_SITE; ?>/profil/view/<?php echo $idUser; ?>"><?php echo $nom; ?></a> | <i class="fa fa-calendar black"></i> Le <?php echo $datePublication; if($datePublication < $dateModification):?>, Modifié le <?php echo $dateModification ;?>
			<?php endif; ?>
		</p>
		<?php echo html_entity_decode($contenu); ?>
		<div class="grid grid-pad">
			<div class="col-1-3"> Test </div>
			<div class="col-2-3"> Et oui </div>
		</div>
	</div>
