
    <div class="moduleCenter justify">
      <h3><?php echo $titre; ?></h3>
	  <p class="authorinfos"><img src="<?php echo ADRESSE_SITE; ?>/view/images/icone-profil.png" width="16px"/> Par <a cass="blue" href="<?php echo ADRESSE_SITE; ?>/profil/view/<?php echo $idUser; ?>"><?php echo $nom; ?></a> | <img src="<?php echo ADRESSE_SITE; ?>/view/images/icone-date.png" width="16px"/> Le <?php echo $datePublication; if($datePublication < $dateModification):?>, Modifié le <?php echo $dateModification ;?><?php endif; ?></p>
      <?php echo html_entity_decode($contenu); ?>
    </div>

