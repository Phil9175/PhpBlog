
    <div class="module">
      <h3>Les derniers articles</h3>
      <?php 
	  foreach($allArticles as $key => $values): ?>
		  <h4><a href="<?php echo ADRESSE_SITE."/".$values["article_url"]; ?>" title="<?php echo $values["titre"]; ?>"><?php echo $values["titre"]; ?></a></h4>
          <?php echo fonctions::trunque($values['contenu']); ?><a href="<?php echo ADRESSE_SITE."/".$values["article_url"]; ?>">Voir la suite</a>
	  <?php endforeach; ?>
    </div>

