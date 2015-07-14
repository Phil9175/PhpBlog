
    <div class="moduleCenter">
      <?php 
	  foreach($allArticles as $key => $values): ?>
		  <h3 class="blue"><a href="<?php echo ADRESSE_SITE."/".$values["article_url"]; ?>" title="<?php echo $values["titre"]; ?>"><?php echo $values["titre"]; ?></a></h3>
		  <p class="justify">
          <?php echo fonctions::trunque(validation::sanitize($values['contenu'])); ?><a href="<?php echo ADRESSE_SITE."/".$values["article_url"]; ?>">Voir la suite</a></p>
	  <?php endforeach; ?>
    </div>

