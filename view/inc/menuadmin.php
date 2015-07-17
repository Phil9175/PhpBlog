<div id='cssmenu'>
		<ul>
			<li><a href="<?php echo ADRESSE_SITE; ?>/admin">Accueil</a></li>
			<li class='active has-sub'><a>Article</a>
				<ul>
					<li><a href="<?php echo ADRESSE_SITE; ?>/admin/article/add">Ajouter</a></li>
					<li><a href="<?php echo ADRESSE_SITE; ?>/admin/article/list">Liste des articles</a></li>
				</ul>
			</li>
			<?php if (security::get_can_modify_user(security::returnId())): ?>
			<li class='active has-sub'><a>Utilisateurs</a>
				<ul>
					<li><a href="<?php echo ADRESSE_SITE; ?>/admin/users/list">Liste des utilisateurs</a></li>
					<li><a href="<?php echo ADRESSE_SITE; ?>/admin/article/list">Liste des articles</a></li>
				</ul>
			</li>
			<?php endif; ?>
			<li><a href='#'>Contact</a></li>
		</ul>
	</div>
