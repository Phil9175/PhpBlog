<div class="col-1-3">
    <div class="module">
      <h3>1/3</h3>
      <p><?php 
	  foreach($allArticles as $key => $values): ?>
		  <a href="<?php echo ADRESSE_SITE."/".$values["article_url"]; ?>" title="<?php echo $values["titre"]; ?>"><?php echo $values["titre"]; ?></a><br>
	  <?php endforeach; ?></p>
    </div>
  </div>