
    <div class="module">
      <h3 class="blue">Se créer un compte utilisateur sur le Journal du referencement</h3>
	  <?php if (isset($notif)): ?>
	  	<span class="bg-warning"><?php echo $notif; ?></span>
	  <?php endif; ?>
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
	 	$formulaire = new formulaire("oubliPass", "", "POST", "/inscription/oubli", "");
        $formulaire->ajoutElement("Email", "text", "email", "entryInput", "email", "TRUE", "", "", ["email" => ""], "", "");
        $formulaire->ajoutElement("Retrouver mon mot de pass", "submit", "enregistrer", "entryInput", "", "", "Enregistrer l'utilisateur", "", "", "", "");
        echo $formulaire->afficheForm();
	
	?>
    </div>

