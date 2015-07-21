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
							$utilisateur->set_is_banned("0");
							$utilisateur->save("users");
							security::connected($args);
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