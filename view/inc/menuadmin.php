<div id='cssmenu'>
		<ul>
			<li><a href="<?php echo ADRESSE_SITE; ?>">Accueil</a></li>
			<?php 
			$texteMenu = "";
			$texteMenu = (security::get_can_modify_page(security::returnId()) === TRUE && security::get_can_add_page(security::returnId()) === TRUE)?"Article / Page":$texteMenu;
			$texteMenu = (security::get_can_modify_page(security::returnId()) === TRUE && security::get_can_add_page(security::returnId()) === FALSE)?"Article":$texteMenu;
			$texteMenu = (security::get_can_modify_page(security::returnId()) === FALSE && security::get_can_add_page(security::returnId()) === TRUE)?"Pages":$texteMenu;
			
			
			
			
			
			if (security::get_can_modify_page(security::returnId()) || security::get_can_add_page(security::returnId())): ?>
			<li <?php if(substr($_SERVER['REQUEST_URI'], 0, 14) == "/admin/article"):?> class="active has-sub" <?php else: ?> class="has-sub" <?php endif; ?>>
			<a><?php echo $texteMenu; ?></a>
			<ul>
				<li><a href="<?php echo ADRESSE_SITE; ?>/admin/article/add">Ajouter <?php echo $texteMenu; ?></a></li>
				<?php if (security::get_can_modify_page(security::returnId())): ?>
				<li><a href="<?php echo ADRESSE_SITE; ?>/admin/article/list">Liste des articles</a></li>
				<?php endif; ?>
				<?php if (security::get_can_add_page(security::returnId())): ?>
				<li><a href="<?php echo ADRESSE_SITE; ?>/admin/page/list">Liste des pages</a></li>
				<?php endif; ?>
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
			<?php if (security::get_can_modify_menu(security::returnId())): ?>
			<li <?php if(substr($_SERVER['REQUEST_URI'], 0, 11) == "/admin/menu"):?> class="active" <?php endif; ?>>
			<a href="<?php echo ADRESSE_SITE; ?>/admin/menu/edit">Menu</a>
			</li>
			<?php endif; ?>
			
			<li><a href="<?php echo ADRESSE_SITE; ?>/admin/moncompte/edit/<?php echo security::returnId(); ?>">mon compte</a></li>
			<li><a href='#'>Contact</a></li>
		</ul>
	</div>
