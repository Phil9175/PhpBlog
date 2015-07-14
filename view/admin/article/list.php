
    <div class="moduleCenter">
      <?php 
	  foreach($allArticles as $key => $values): ?>
		  <h3 class="blue"><a href="<?php echo ADRESSE_SITE; ?>/admin/article/edit/<?php echo $values['id']; ?>" title="<?php echo $values["titre"]; ?>"><?php echo $values["titre"]; ?></a></h3>
          	  <?php endforeach; ?>
    </div>

