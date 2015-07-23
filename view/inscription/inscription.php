
    <div class="module">
      <h3 class="blue">Se créer un compte utilisateur sur le Journal du referencement</h3>
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
	 	$formulaire = new formulaire("addUser", "", "POST", "/inscription/add", "");
        $formulaire->ajoutElement("Email", "text", "email", "entryInput", "email", "TRUE", "", "", ["email" => ""], "", "");
        $formulaire->ajoutElement("Pseudo", "text", "pseudo", "entryInput", "pseudo", "TRUE", "", "", "", "", "");
		$formulaire->ajoutElement("Mot de passe", "password", "pass", "entryInput", "pass", "TRUE", "", "", "", "", "");
        $formulaire->ajoutElement("S'enregistrer ", "submit", "enregistrer", "entryInput", "", "", "Enregistrer l'utilisateur", "", "", "", "");
        echo $formulaire->afficheForm();
	
	?>
    </div>

