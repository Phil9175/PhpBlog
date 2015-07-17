
    <div class="moduleCenter">
	<h3>Fiche utilisateur</h3>
    <i class="fa fa-user fa-2x black"></i> <?php echo $nom; ?><br>
	<i class="fa fa-calendar fa-2x black"></i> Inscrit depuis le <?php echo $dateInscription; ?><br>
	<i class="fa fa-envelope-o fa-2x black"></i> <?php echo $email; ?><br>
	<a href="<?php echo ADRESSE_SITE; ?>/profil/articles/<?php echo $idUser; ?>"><i class="fa fa-pencil-square-o fa-2x noDecoration black"></i> Voir tout les articles de <?php echo $nom; ?></a><br>
    </div>