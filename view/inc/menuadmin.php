<div id='cssmenu'>
		<ul>
			<li <?php if($_SERVER['REQUEST_URI'] == "/admin"):?> class="active" <?php else: ?><?php endif; ?>><a href="<?php echo ADRESSE_SITE; ?>/admin">Accueil</a></li>
<?php if (security::get_can_modify_page(security::returnId())): ?>
			<li <?php if(substr($_SERVER['REQUEST_URI'], 0, 14) == "/admin/article"):?> class="active has-sub" <?php else: ?> class="has-sub" <?php endif; ?>>
			<a>Article</a>
			<ul>
				<li><a href="<?php echo ADRESSE_SITE; ?>/admin/article/add">Ajouter</a></li>
				<li><a href="<?php echo ADRESSE_SITE; ?>/admin/article/list">Liste des articles</a></li>
			</ul>
			</li>
			<?php endif; ?>
			<?php if (security::get_can_modify_user(security::returnId())): ?>
			<li <?php if(substr($_SERVER['REQUEST_URI'], 0, 12) == "/admin/users"):?> class="active has-sub" <?php else: ?> class="has-sub" <?php endif; ?>>
			<a>Utilisateurs</a>
			<ul>
				<li><a href="<?php echo ADRESSE_SITE; ?>/admin/users/list">Liste des utilisateurs</a></li>
				<li><a href="<?php echo ADRESSE_SITE; ?>/admin/users/add">Ajouter un utilisateur</a></li>
			</ul>
			</li>
			<?php endif; ?>
			<li><a href='#'>Contact</a></li>
		</ul>
	</div>
