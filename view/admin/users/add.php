
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
	 	$formulaire = new formulaire("addUser", "", "POST", "/admin/users/add", "");
        $formulaire->ajoutElement("Email", "text", "email", "", "email", "TRUE", "", "", ["email" => ""], "", "");
        $formulaire->ajoutElement("Pseudo", "text", "pseudo", "", "pseudo", "TRUE", "", "", "", "", "");
		$formulaire->ajoutElement("Mot de passe", "password", "pass", "", "pass", "TRUE", "", "", "", "", "");
        $formulaire->ajoutElement("Enregistrer l'utilisateur", "submit", "enregistrer", "", "", "", "Enregistrer l'utilisateur", "", "", "", "");
        echo $formulaire->afficheForm();
	
	?>
	</div>
