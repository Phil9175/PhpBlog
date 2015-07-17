
	<div class="moduleCenter">
	 <ul>
      <?php if (isset($_POST['isSubmit'])):
	  				if (isset($errors)):
		  			foreach($errors as $key => $values):
			?>
            <li><?php echo $values; ?>
            <?php 
					endforeach; 
				endif;
			endif;
			?>
      </ul>
	<?php
	 	$formulaire = new formulaire("editUser", "", "POST", "/admin/users/edit/".$id, "");
        $formulaire->ajoutElement("Email", "text", "email", "", "email", "TRUE", $email, "", ["email" => ""], "", "");
        $formulaire->ajoutElement("Pseudo", "text", "pseudo", "", "pseudo", "TRUE", $pseudo, "", "", "", "");
		$formulaire->ajoutElement("Mot de passe", "password", "pass", "", "pass", "", "", "", "", "", "");
        $formulaire->ajoutElement("Enregistrer l'utilisateur", "submit", "enregistrer", "", "", "", "Enregistrer l'utilisateur", "", "", "", "");
        echo $formulaire->afficheForm();
	
	?>
	</div>
