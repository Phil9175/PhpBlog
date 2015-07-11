
    <div class="module">
      <h3>Se connecter</h3>
      <ul>
      <?php if (isset($_POST['isSubmit'])):
		  	foreach($errors as $key => $values):
			?>
            <li><?php echo $values; ?>
            <?php 
			endforeach; 
			endif;
			?>
      </ul>
      <?php
        $formulaire = new formulaire("identificationAdmin", "", "POST", "/admin/auth", "");
        $formulaire->ajoutElement("Email", "text", "email", "", "email", "", "", "", ["email" => ""], "", "");
		$formulaire->ajoutElement("Mot de passe", "password", "pass", "", "pass", "", "", "", "", "", "");
        $formulaire->ajoutElement("Rechercher", "submit", "rechercher", "", "", "", "Rechercher", "", "", "", "");
        echo $formulaire->afficheForm();
        ?>
    </div>

