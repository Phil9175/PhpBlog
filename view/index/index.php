
    <div class="moduleCenter">
      <?php 
	  foreach($allArticles as $key => $values): ?>
		  <h3 class="blue"><a href="<?php echo ADRESSE_SITE."/".$values["article_url"]; ?>" title="<?php echo $values["titre"]; ?>"><?php echo utf8_encode($values["titre"]); ?></a></h3>
          <?php echo fonctions::trunque(utf8_encode($values['contenu'])); ?><a href="<?php echo ADRESSE_SITE."/".$values["article_url"]; ?>">Voir la suite</a>
	  <?php endforeach; ?>
    </div>

