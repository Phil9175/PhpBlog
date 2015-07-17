<?php
class admin
{
    
    public $is_connected = false;
    public $securityToken;
    
    public function __construct()
    {
    }
    
    public function defaultPage($args)
    {
        if (security::is_connected() === TRUE) {
            $view = new view("admin", "auth", "admin.layout");
            $view->assign("meta_title", "Mon titre a moi");
            $view->assign("meta_description", "Ma description a moi");
            
        } else {
            $view = new view("admin", "auth", "admin.notconnected.layout");
            $view->assign("meta_title", "Connexion Administration");
            $view->assign("meta_description", "Connexion administration journal du referencement");
        }
    }
    
    public function auth($args)
    {
        $validation = new validation($_SESSION['elementsSessionFormulaire']['identificationAdmin'], $args);
        if ($validation->validationFormulaire() === TRUE) {
            security::connected($args);
        } else {
            $view = new view("admin", "auth", "admin.notconnected.layout");
            $view->assign("meta_title", "Connexion Administration");
            $view->assign("meta_description", "Connexion administration journal du referencement");
            $view->assign("errors", $validation->getErreur());
        }
    }
    
    public function article($args)
    {
        if (security::is_connected() === TRUE) {
			if (security::get_can_modify_page(security::returnId())){
            //AJOUT ARTICLE
				if ($args[0] == "add") {
					$view = new view("admin", "article/add", "admin.layout");
					if (isset($args['isSubmit']) && $args['isSubmit'] == "yes") {
						$validation = new validation($_SESSION['elementsSessionFormulaire']['addArticle'], $args);
						if ($validation->validationFormulaire() === TRUE) {
							$user = new users();
							$user->getOneBy($_SESSION['session'], "token", "users");
							$user->setFromBdd($user->result);
							$article = new article;
							$article->set_titre(validation::sanitize($args["titre"]));
							$article->set_contenu(nl2br($args["contenu"]));
							$article->set_statut("published");
							$article->set_meta_title(validation::sanitize($args["meta_title"]));
							$article->set_meta_description(validation::sanitize($args["meta_description"]));
							$article->set_date_publication(date("Y-m-d H:i:s"));
							$article->set_date_last_modification(date("Y-m-d H:i:s"));
							$article->set_type_page("article.layout");
							$article->set_idmembre($user->get_id());
							$article->set_article_url(urlencode(str_replace(" ", "-", validation::sanitize($args["titre"]))));
							$article->set_tags(validation::sanitize($args["tags"]));
							$article->save("article");
						} else {
							print_r($validation->getErreur());
							$view->assign("errors", $validation->getErreur());
						}
					}
					$view->assign("meta_title", "Connexion Administration");
					$view->assign("meta_description", "Connexion administration journal du referencement");
										
					//MODIFICATION ET LISTE ARTICLES
				} elseif ($args[0] == "list") {
					$view     = new view("admin", "article/list", "admin.layout");
					$article  = new article;
					$articles = $article->getResults("", "", "article", "ORDER BY id");
					$view->assign("allArticles", $articles);
					
				} elseif ($args[0] == "edit") {
					$view    = new view("admin", "article/edit", "admin.layout");
					$article = new article;
					if (isset($args['isSubmit']) && $args['isSubmit'] == "yes") {
						$validation = new validation($_SESSION['elementsSessionFormulaire']['editArticle'], $args);
						if ($validation->validationFormulaire() === TRUE) {
							$user = new users();
							$user->getOneBy($_SESSION['session'], "token", "users");
							$user->setFromBdd($user->result);
							
							$article = new article;
							$article->getOneBy($args[1], "id", "article", "ORDER BY id");
							$article->setFromBdd($article->result);
							$article->set_titre(validation::sanitize($args["titre"]));
							$article->set_contenu(nl2br($args["contenu"]));
							$article->set_statut("published");
							$article->set_meta_title(validation::sanitize($args["meta_title"]));
							$article->set_meta_description(validation::sanitize($args["meta_description"]));
							$article->set_date_last_modification(date("Y-m-d H:i:s"));
							$article->set_type_page("article.layout");
							$article->set_tags(validation::sanitize($args["tags"]));
							$article->set_article_url(urlencode(str_replace(" ", "-", str_replace("'", "-", validation::sanitize($args["titre"])))));
							$article->save("article");
						} else {
							$view->assign("errors", $validation->getErreur());
						}
						$article->getOneBy($args[1], "id", "article", "ORDER BY id");
						$article->setFromBdd($article->result);
						$view->assign("id", $article->get_id());
						$view->assign("titre", $article->get_titre());
						$view->assign("contenu", $article->get_contenu());
						$view->assign("formmeta_title", $article->get_meta_title());
						$view->assign("formmeta_description", $article->get_meta_description());
						$view->assign("date_publication", $article->get_date_publication());
						$view->assign("date_last_modification", $article->get_date_last_modification());
						$view->assign("tags", $article->get_tags());
					} else {
						$article->getOneBy($args[1], "id", "article", "ORDER BY id");
						$article->setFromBdd($article->result);
						$view->assign("id", $article->get_id());
						$view->assign("titre", $article->get_titre());
						$view->assign("contenu", $article->get_contenu());
						$view->assign("formmeta_title", $article->get_meta_title());
						$view->assign("formmeta_description", $article->get_meta_description());
						$view->assign("date_publication", $article->get_date_publication());
						$view->assign("date_last_modification", $article->get_date_last_modification());
						$view->assign("tags", $article->get_tags());
					}
				}
			}
            
            
        } else {
            
            $view = new view("admin", "auth", "admin.notconnected.layout");
            $view->assign("meta_title", "Connexion Administration");
            $view->assign("meta_description", "Connexion administration journal du referencement");
        }
    }
    
    public function disconnect()
    {
        security::disconnect();
    }
    
	public function unpublished($args){
		if (security::is_connected() === TRUE) {
			if (security::get_can_modify_page(security::returnId())){
				$article = new article("article");
				$article->getOneBy($args[0], "id", "article");
				$article->setFromBdd($article->result);
				$article->set_statut("unpublished");
				$article->save("article");
				header('Location: /admin/article/list');
			}
		}
	}
	
	public function published($args){
		if (security::is_connected() === TRUE) {
			if (security::get_can_modify_page(security::returnId())){
				$article = new article("article");
				$article->getOneBy($args[0], "id", "article");
				$article->setFromBdd($article->result);
				$article->set_statut("published");
				$article->save("article");
				header('Location: /admin/article/list');
			}
		}
	}
	
	public function users($args){
		if (security::is_connected() === TRUE) {
			if (security::get_can_modify_user(security::returnId())){
				if ($args[0] == "list"){
					$view  = new view("admin", "users/list", "admin.layout");
					$user  = new users;
					$users = $user->getResults("", "", "users", "ORDER BY id");
					$view->assign("users", $users);
				}elseif ($args[0] == "add"){
					$view  = new view("admin", "users/add", "admin.layout");
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
							$utilisateur->set_can_modify_media("0");
							$utilisateur->save("users");
							}else{
							$view->assign("errors", $errors);
							}
						}else{
							$view->assign("errors", $validation->getErreur());

						}
					}
				}elseif ($args[0] == "edit"){
						$view  = new view("admin", "users/edit", "admin.layout");
					if (isset($args['isSubmit']) && $args['isSubmit'] == "yes") {
						$validation = new validation($_SESSION['elementsSessionFormulaire']['editUser'], $args);
						if ($validation->validationFormulaire() === TRUE) {
							$nbErreurs = 0;
							$selectUser = new users;
							$selectUser->getOneBy($args['pseudo'], "pseudo", "users");
							$selectUser->setFromBdd($selectUser->result);				
							if (is_numeric($selectUser->get_id()) && $selectUser->get_id() != $args[1]){
								$errors[] = "Un utilisateur existe deja avec ce pseudo";
								$nbErreurs++;
							}
							unset($selectUser);
							$selectUser = new users;
							$selectUser->getOneBy($args['email'], "email", "users");
							$selectUser->setFromBdd($selectUser->result);				
							if (is_numeric($selectUser->get_id()) && $selectUser->get_id() != $args[1]){
								$errors[] = "Un utilisateur existe deja avec cet email";
								$nbErreurs++;
							}
							if ($nbErreurs == 0){
								unset($selectUser);
								$selectUser = new users;
								$selectUser->getOneBy($args['1'], "id", "users");
								$selectUser->setFromBdd($selectUser->result);	
								$utilisateur = new users;
								$utilisateur->set_id($selectUser->get_id());
								$utilisateur->set_pseudo(validation::sanitize($args['pseudo']));
								$utilisateur->set_email($args['email']);
								$utilisateur->set_date_inscription($selectUser->Get_date_inscription());
								if ($args['pass'] != ""){
									$utilisateur->set_password(security::makePassword($args['pass']));
								}else{
									$utilisateur->set_password($selectUser->get_password());
								}
								$utilisateur->set_can_modify_categories($selectUser->get_can_modify_categories());
								$utilisateur->set_can_modify_user($selectUser->get_can_modify_user());
								$utilisateur->set_can_modify_page($selectUser->get_can_modify_page());
								$utilisateur->set_can_modify_commentaire($selectUser->get_can_modify_commentaire());
								$utilisateur->set_can_modify_media($selectUser->get_can_modify_media());
								$utilisateur->set_token($selectUser->get_token());
								$utilisateur->save("users");
							}else{
							$view->assign("errors", $errors);
							}
						}else{
							$view->assign("errors", $validation->getErreur());

						}
					}
					$utilisateurAModifier = new users;
					$utilisateurAModifier->getOneBy($args[1], "id", "users", "ORDER BY id");
					$utilisateurAModifier->setFromBdd($utilisateurAModifier->result);
					$view->assign("id", $utilisateurAModifier->get_id());
					$view->assign("pseudo", $utilisateurAModifier->get_pseudo());
					$view->assign("email", $utilisateurAModifier->get_email());
				}
			}
		}
	}
	
	public function addRights($args){
		if (security::is_connected() === TRUE) {
			if (security::get_can_modify_user(security::returnId())){
				if ($args[0] == "user"){
					$user = new users();
					$user->getOneBy($args[1], "id", "users");
					$user->setFromBdd($user->result);
					$user->set_can_modify_user("1");
					$user->save("users");
					header('Location: /admin/users/list');
				}
				if ($args[0] == "commentaire"){
					$user = new users();
					$user->getOneBy($args[1], "id", "users");
					$user->setFromBdd($user->result);
					$user->set_can_modify_commentaire("1");
					$user->save("users");
					header('Location: /admin/users/list');
				}
				if ($args[0] == "page"){
					$user = new users();
					$user->getOneBy($args[1], "id", "users");
					$user->setFromBdd($user->result);
					$user->set_can_modify_page("1");
					$user->save("users");
					header('Location: /admin/users/list');
				}
				if ($args[0] == "categories"){
					$user = new users();
					$user->getOneBy($args[1], "id", "users");
					$user->setFromBdd($user->result);
					$user->set_can_modify_categories("1");
					$user->save("users");
					header('Location: /admin/users/list');
				}
			}
		}
	}

	public function removeRights($args){
		if (security::is_connected() === TRUE) {
			if (security::get_can_modify_user(security::returnId())){
				if ($args[0] == "user"){
					$user = new users();
					$user->getOneBy($args[1], "id", "users");
					$user->setFromBdd($user->result);
					$user->set_can_modify_user("0");
					$user->save("users");
					header('Location: /admin/users/list');
				}
				if ($args[0] == "commentaire"){
					$user = new users();
					$user->getOneBy($args[1], "id", "users");
					$user->setFromBdd($user->result);
					$user->set_can_modify_commentaire("0");
					$user->save("users");
					header('Location: /admin/users/list');
				}
				if ($args[0] == "page"){
					$user = new users();
					$user->getOneBy($args[1], "id", "users");
					$user->setFromBdd($user->result);
					$user->set_can_modify_page("0");
					$user->save("users");
					header('Location: /admin/users/list');
				}
				if ($args[0] == "categories"){
					$user = new users();
					$user->getOneBy($args[1], "id", "users");
					$user->setFromBdd($user->result);
					$user->set_can_modify_categories("0");
					$user->save("users");
					header('Location: /admin/users/list');
				}
			}
		}
	}
	
	
}