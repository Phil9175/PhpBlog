<div class="grid grid-pad">
  <div class="col-2-3">
    <div class="module">
      <h3>Les derniers articles</h3>
      <?php 
	  foreach($allArticles as $key => $values): ?>
		  <h4><a href="<?php echo ADRESSE_SITE."/".$values["article_url"]; ?>" title="<?php echo $values["titre"]; ?>"><?php echo $values["titre"]; ?></a></h4>
          <?php echo fonctions::trunque($values['contenu']); ?><a href="<?php echo ADRESSE_SITE."/".$values["article_url"]; ?>">Voir la suite</a>
	  <?php endforeach; ?>
    </div>
  </div>
    <?php include_once("view/includes/blocArticles.inc.php"); ?>
</div>
<div class="grid grid-pad">
  <div class="col-1-8">
    <div class="module">
      <h3>1/8</h3>
    </div>
  </div>
  <div class="col-1-8">
    <div class="module">
      <h3>1/8</h3>
    </div>
  </div>
  <div class="col-1-8">
    <div class="module">
      <h3>1/8</h3>
    </div>
  </div>
  <div class="col-1-8">
    <div class="module">
      <h3>1/8</h3>
    </div>
  </div>
  <div class="col-1-8">
    <div class="module">
      <h3>1/8</h3>
    </div>
  </div>
  <div class="col-1-8">
    <div class="module">
      <h3>1/8</h3>
    </div>
  </div>
  <div class="col-1-8">
    <div class="module">
      <h3>1/8</h3>
    </div>
  </div>
  <div class="col-1-8">
    <div class="module">
      <h3>1/8</h3>
    </div>
  </div>
</div>
