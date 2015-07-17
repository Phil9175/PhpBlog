
	<div class="moduleCenter">
		<table>
			<tr>
				<td>Nom Utilisateur</td>
				<td>Email</td>
				<td>Date Inscription</td>
				<td>Modifier Categories</td>
				<td>Modifier Utilisateurs</td>
				<td>Modifier Page</td>
				<td>Modifier Commentaire</td>
			</tr>
			<?php 
	  foreach($users as $key => $values): ?>
			<tr>
				<td><?php echo $values['pseudo']; ?></td>
				<td><?php echo $values['email']; ?></td>
				<td><?php echo $values['date_inscription']; ?></td>
				<td><?php if ($values['can_modify_categories'] == "1"): ?>
					<a href="<?php echo ADRESSE_SITE; ?>/admin/removeRights/categories/<?php echo $values['id']; ?>"><i class="fa fa-toggle-on fa-2x NoDecoration green"></i></a>
					<?php else: ?>
					<a href="<?php echo ADRESSE_SITE; ?>/admin/addRights/categories/<?php echo $values['id']; ?>"><i class="fa fa-toggle-off fa-2x NoDecoration red"></i></a>
					<?php endif; ?></td>
				<td><?php if ($values['can_modify_user'] == "1"): ?>
					<a href="<?php echo ADRESSE_SITE; ?>/admin/removeRights/user/<?php echo $values['id']; ?>"><i class="fa fa-toggle-on fa-2x NoDecoration green"></i></a>
					<?php else: ?>
					<a href="<?php echo ADRESSE_SITE; ?>/admin/addRights/user/<?php echo $values['id']; ?>"><i class="fa fa-toggle-off fa-2x NoDecoration red"></i></a>
					<?php endif; ?></td>
				<td><?php if ($values['can_modify_page'] == "1"): ?>
					<a href="<?php echo ADRESSE_SITE; ?>/admin/removeRights/page/<?php echo $values['id']; ?>"><i class="fa fa-toggle-on fa-2x NoDecoration green"></i></a>
					<?php else: ?>
					<a href="<?php echo ADRESSE_SITE; ?>/admin/addRights/page/<?php echo $values['id']; ?>"><i class="fa fa-toggle-off fa-2x NoDecoration red"></i></a>
					<?php endif; ?></td>
				<td><?php if ($values['can_modify_commentaire'] == "1"): ?>
					<a href="<?php echo ADRESSE_SITE; ?>/admin/removeRights/commentaire/<?php echo $values['id']; ?>"><i class="fa fa-toggle-on fa-2x NoDecoration green"></i></a>
					<?php else: ?>
					<a href="<?php echo ADRESSE_SITE; ?>/admin/addRights/commentaire/<?php echo $values['id']; ?>"><i class="fa fa-toggle-off fa-2x NoDecoration red"></i></a>
					<?php endif; ?></td>
			</tr>
			<?php endforeach; ?>
		</table>
	</div>
