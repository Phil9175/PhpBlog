
    <div class="moduleCenter">
      <?php 
	  foreach($allArticles as $key => $values): ?>
	  <?php if ($values['statut'] == "published"): ?>
	  	<a href="<?php echo ADRESSE_SITE; ?>/admin/unpublished/<?php echo $values['id']; ?>"><img src="<?php echo ADRESSE_SITE; ?>/view/images/published.png" width="32px" ></a>
		<?php else: ?>
	  	<a href="<?php echo ADRESSE_SITE; ?>/admin/published/<?php echo $values['id']; ?>"><img src="<?php echo ADRESSE_SITE; ?>/view/images/unpublished.png" width="32px" ></a>
		<?php endif; ?>
	  	<a href="<?php echo ADRESSE_SITE; ?>/admin/article/edit/<?php echo $values['id']; ?>"><img src="<?php echo ADRESSE_SITE; ?>/view/images/icone-edition.png" width="32px" ></a>
		  <a href="<?php echo ADRESSE_SITE; ?>/admin/article/edit/<?php echo $values['id']; ?>" title="<?php echo $values["titre"]; ?>"><?php echo $values["titre"]; ?></a><br>
          	  <?php endforeach; ?>
    </div>

