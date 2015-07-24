<?php
class inscription
{
    
    public function __construct()
    {
    }
    
    public function defaultPage($args)
    {
          $view = new view("inscription", "inscription", "inscription.layout");
          $view->assign("meta_title", "Administration");
          $view->assign("meta_description", "Administration journal du referencement");
		  $article = new article;
		  $articles = $article->getResults("","","article", " WHERE statut = 'published' and type_page = 'article.layout'  ORDER BY date_publication DESC LIMIT 0, 5");
		  $view->assign("allArticles", $articles);
		  
    }
	
	public function oubli($args){
		$view = new view("inscription", "oubli", "inscription.layout");
		$view->assign("meta_title", "Administration");
		$view->assign("meta_description", "Administration journal du referencement");
		if (isset($args['isSubmit']) && $args['isSubmit'] == "yes") {
			$validation = new validation($_SESSION['elementsSessionFormulaire']['oubliPass'], $args);
			if ($validation->validationFormulaire() === TRUE) {
				$user = new users();
				$user->getOneBy($args['email'], "email", "users");
				if (is_numeric($user->result['id']) && $user->result['id'] != 0){
					$user->setFromBdd($user->result);
					$user->set_mdp_generate(1);
					$pass = substr(fonctions::id_aleatoire(), 0, 8);
					$user->set_password(security::makePassword($pass));
					$user->save("users");
					$view->assign("notif", "Un nouveau mot de pass a ete envoyé par mail");
							$mail = $user->get_email(); // Déclaration de l'adresse de destination.
							if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui présentent des bogues.
							{
								$passage_ligne = "\r\n";
							}
							else
							{
								$passage_ligne = "\n";
							}
							//=====Déclaration des messages au format texte et au format HTML.
							
							$message_html = "<html><head></head><body><b>Bonjour ".$user->get_pseudo()."</b>, Bienvenue sur le Journal du referencement.<br>Votre mot de pass a ete reinitialisé.<br>VOici le nouveau mot de pass de connexion : ".$pass."</body></html>";
							$message_txt = strip_tags($message_html);

							 
							//=====Création de la boundary.
							$boundary = "-----=".md5(rand());
							$boundary_alt = "-----=".md5(rand());
							//==========
							 
							//=====Définition du sujet.
							$sujet = "Inscription Journal du Référencement";
							//=========
							 
							//=====Création du header de l'e-mail.
							$header = "From: \"Journal du Referencement\"<contact@journaldureferencement.fr>".$passage_ligne;
							$header.= "Reply-to: \"Journal du Referencement\" <contact@journaldureferencement.fr>".$passage_ligne;
							$header.= "MIME-Version: 1.0".$passage_ligne;
							$header.= "Content-Type: multipart/mixed;".$passage_ligne." boundary=\"".$boundary."\"".$passage_ligne;
							//==========
							 
							//=====Création du message.
							$message = $passage_ligne."--".$boundary.$passage_ligne;
							$message.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary_alt\"".$passage_ligne;
							$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
							//=====Ajout du message au format texte.
							$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
							$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
							$message.= $passage_ligne.$message_txt.$passage_ligne;
							//==========
							 
							$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
							 
							//=====Ajout du message au format HTML.
							$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
							$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
							$message.= $passage_ligne.$message_html.$passage_ligne;
							//==========
							 
							//=====On ferme la boundary alternative.
							$message.= $passage_ligne."--".$boundary_alt."--".$passage_ligne;
							//==========
							 
							$message.= $passage_ligne."--".$boundary.$passage_ligne;
							
							//========== 
							//=====Envoi de l'e-mail.
							mail($mail,$sujet,$message,$header);
				}
				
			}
		}
	}
	
	
	
	
	
	public function validation($args){
		  $view = new view("inscription", "inscription", "inscription.layout");
          $view->assign("meta_title", "Administration");
          $view->assign("meta_description", "Administration journal du referencement");
		  $article = new article;
		  $articles = $article->getResults("","","article", " WHERE statut = 'published' and type_page = 'article.layout'  ORDER BY date_publication DESC LIMIT 0, 5");
		  $view->assign("allArticles", $articles);
				if (ctype_alnum($args[0])){
					$user = new users();
					$user->getOneBy($args[0], "token_validation", "users");					
						if (is_numeric($user->result['id']) && $user->result['id'] != 0){
							$user->setFromBdd($user->result);
							if (time()-strtotime($user->get_date_inscription()) > 1200){
								$user->set_token_validation(fonctions::id_aleatoire());
								$user->save("users");
								$mail = $user->get_email(); // Déclaration de l'adresse de destination.
							if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui présentent des bogues.
							{
								$passage_ligne = "\r\n";
							}
							else
							{
								$passage_ligne = "\n";
							}
							//=====Déclaration des messages au format texte et au format HTML.
							
							$message_html = "<html><head></head><body><b>Bonjour ".$user->get_pseudo()."</b>, Bienvenue sur le Journal du referencement.<br>Voici le lien de validation de votre compte. S'il n'est pas cliquable, copier / collez le dans votre navigateur préféré :) <br> <a href=\"http://www.journaldureferencement.fr/inscription/validation/".$user->get_token_validation()."\">http://www.journaldureferencement.fr/inscription/validation/".$user->get_token_validation()."</a></body></html>";
							$message_txt = strip_tags($message_html);

							 
							//=====Création de la boundary.
							$boundary = "-----=".md5(rand());
							$boundary_alt = "-----=".md5(rand());
							//==========
							 
							//=====Définition du sujet.
							$sujet = "Inscription Journal du Référencement";
							//=========
							 
							//=====Création du header de l'e-mail.
							$header = "From: \"Journal du Referencement\"<contact@journaldureferencement.fr>".$passage_ligne;
							$header.= "Reply-to: \"Journal du Referencement\" <contact@journaldureferencement.fr>".$passage_ligne;
							$header.= "MIME-Version: 1.0".$passage_ligne;
							$header.= "Content-Type: multipart/mixed;".$passage_ligne." boundary=\"".$boundary."\"".$passage_ligne;
							//==========
							 
							//=====Création du message.
							$message = $passage_ligne."--".$boundary.$passage_ligne;
							$message.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary_alt\"".$passage_ligne;
							$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
							//=====Ajout du message au format texte.
							$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
							$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
							$message.= $passage_ligne.$message_txt.$passage_ligne;
							//==========
							 
							$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
							 
							//=====Ajout du message au format HTML.
							$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
							$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
							$message.= $passage_ligne.$message_html.$passage_ligne;
							//==========
							 
							//=====On ferme la boundary alternative.
							$message.= $passage_ligne."--".$boundary_alt."--".$passage_ligne;
							//==========
							 
							$message.= $passage_ligne."--".$boundary.$passage_ligne;
							
							//========== 
							//=====Envoi de l'e-mail.
							mail($mail,$sujet,$message,$header);
							$view->assign("notif", "Vous n'avez pas validé votre compte dans les 20 minutes, vous avez reçu un nouveau lien sur votre email");
							}else{
								$user->set_is_validate("1");		
								$user->save("users");
								$user->set_token(fonctions::id_aleatoire());
								$_SESSION['session'] = $user->get_token();
							}
						}else{
							header('HTTP/1.0 302 Found');
							header("Location: ".ADRESSE_SITE);
							exit;
						}
						
				}else{
					header('HTTP/1.0 302 Found');
					header("Location: ".ADRESSE_SITE);
					exit;
				}
						
		  
		
	}
    public function add($args){
		  $view = new view("inscription", "inscription", "inscription.layout");
          $view->assign("meta_title", "Administration");
          $view->assign("meta_description", "Administration journal du referencement");
		  $article = new article;
		  $articles = $article->getResults("","","article", " WHERE statut = 'published' and type_page = 'article.layout'  ORDER BY date_publication DESC LIMIT 0, 5");
		  $view->assign("allArticles", $articles);
		  
					if (isset($args['isSubmit']) && $args['isSubmit'] == "yes") {
						$validation = new validation($_SESSION['elementsSessionFormulaire']['addUser'], $args);
						if ($validation->validationFormulaire() === TRUE) {
							$nbErreurs = 0;
							$selectUser = new users;
							$selectUser->getOneBy($args['pseudo'], "pseudo", "users");
							$selectUser->setFromBdd($selectUser->result);				
							if (is_numeric($selectUser->get_id())){
								$errors[] = "Un utilisateur existe deja avec ce pseudo";
								$nbErreurs++;
							}
							unset($selectUser);
							$selectUser = new users;
							$selectUser->getOneBy($args['email'], "email", "users");
							$selectUser->setFromBdd($selectUser->result);				
							if (is_numeric($selectUser->get_id())){
								$errors[] = "Un utilisateur existe deja avec cet email";
								$nbErreurs++;
							}
							if ($nbErreurs == 0){
							$utilisateur = new users;
							$utilisateur->set_pseudo(validation::sanitize($args['pseudo']));
							$utilisateur->set_email($args['email']);
							$utilisateur->set_date_inscription(date('Y-m-d H:i:s'));
							$utilisateur->set_password(security::makePassword($args['pass']));
							$utilisateur->set_can_modify_categories("0");
							$utilisateur->set_can_modify_user("0");
							$utilisateur->set_can_modify_page("0");
							$utilisateur->set_can_modify_commentaire("0");
							$utilisateur->set_can_add_page("0");
							$utilisateur->set_can_modify_menu("0");
							$utilisateur->set_is_banned("0");
							$utilisateur->set_is_validate("0");
							$utilisateur->set_mdp_generate("0");
							$utilisateur->set_token_validation(fonctions::id_aleatoire());
							$utilisateur->save("users");

							$mail = $utilisateur->get_email(); // Déclaration de l'adresse de destination.
							if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui présentent des bogues.
							{
								$passage_ligne = "\r\n";
							}
							else
							{
								$passage_ligne = "\n";
							}
							//=====Déclaration des messages au format texte et au format HTML.
							
							$message_html = "<html><head></head><body><b>Bonjour ".$utilisateur->get_pseudo()."</b>, Bienvenue sur le Journal du referencement.<br>Voici le lien de validation de votre compte. S'il n'est pas cliquable, copier / collez le dans votre navigateur préféré :) <br> <a href=\"http://www.journaldureferencement.fr/inscription/validation/".$utilisateur->get_token_validation()."\">http://www.journaldureferencement.fr/inscription/validation/".$utilisateur->get_token_validation()."</a></body></html>";
							$message_txt = strip_tags($message_html);

							 
							//=====Création de la boundary.
							$boundary = "-----=".md5(rand());
							$boundary_alt = "-----=".md5(rand());
							//==========
							 
							//=====Définition du sujet.
							$sujet = "Inscription Journal du Référencement";
							//=========
							 
							//=====Création du header de l'e-mail.
							$header = "From: \"Journal du Referencement\"<contact@journaldureferencement.fr>".$passage_ligne;
							$header.= "Reply-to: \"Journal du Referencement\" <contact@journaldureferencement.fr>".$passage_ligne;
							$header.= "MIME-Version: 1.0".$passage_ligne;
							$header.= "Content-Type: multipart/mixed;".$passage_ligne." boundary=\"".$boundary."\"".$passage_ligne;
							//==========
							 
							//=====Création du message.
							$message = $passage_ligne."--".$boundary.$passage_ligne;
							$message.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary_alt\"".$passage_ligne;
							$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
							//=====Ajout du message au format texte.
							$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
							$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
							$message.= $passage_ligne.$message_txt.$passage_ligne;
							//==========
							 
							$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
							 
							//=====Ajout du message au format HTML.
							$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
							$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
							$message.= $passage_ligne.$message_html.$passage_ligne;
							//==========
							 
							//=====On ferme la boundary alternative.
							$message.= $passage_ligne."--".$boundary_alt."--".$passage_ligne;
							//==========
							 
							$message.= $passage_ligne."--".$boundary.$passage_ligne;
							
							//========== 
							//=====Envoi de l'e-mail.
							mail($mail,$sujet,$message,$header);
							 




							header('HTTP/1.0 302 Found');
							header("Location: ".ADRESSE_SITE);
							exit;
							}else{
							$view->assign("errors", $errors);
							}
						}else{
							$view->assign("errors", $validation->getErreur());

						}
					}
		
	}

}