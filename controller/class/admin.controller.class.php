<?php
class admin {
	
	public $is_connected = false;
	public $securityToken;
	
	public function __construct() {
	}
	
	public function defaultPage($args) {
		if(security::is_connected() === TRUE){
			$view = new view("admin", "auth", "admin.layout");
			$view->assign("meta_title", "Mon titre a moi");
			$view->assign("meta_description", "Ma description a moi");
			
		}else{
			$view = new view("admin", "auth", "admin.notconnected.layout");
			$view->assign("meta_title", "Connexion Administration");
			$view->assign("meta_description", "Connexion administration journal du referencement");
		}
	}
	
	public function auth($args){
		$validation = new validation($_SESSION['elementsSessionFormulaire']['identificationAdmin'], $args);
		if ($validation->validationFormulaire() === TRUE){
			security::connected($args);
		}else{
			$view = new view("admin", "auth", "admin.notconnected.layout");
			$view->assign("meta_title", "Connexion Administration");
			$view->assign("meta_description", "Connexion administration journal du referencement");
			$view->assign("errors", $validation->getErreur());
		}
	}
	
	public function article($args){
		if(security::is_connected() === TRUE){
			if ($args[0] == "add"){
			$view = new view("admin", "article/add", "admin.layout");
				if(isset($args['isSubmit']) && $args['isSubmit'] == "yes"){
					$validation = new validation($_SESSION['elementsSessionFormulaire']['addArticle'], $args);
					if ($validation->validationFormulaire() === TRUE){
						echo "OKKKK";
						$user = new users();
						$user->getOneBy($_SESSION['session'], "token", "users");
						$user->setFromBdd($user->result);
						$article = new article;
						$args = validation::sanitize($args);
						$article->set_titre($args["titre"]);
						$article->set_contenu($args["contenu"]);
						$article->set_statut("published");
						$article->set_meta_title("");
						$article->set_meta_description("");
						$article->set_date_publication(date("Y-m-d H:i:s"));
						$article->set_date_last_modification(date("Y-m-d H:i:s"));
						$article->set_type_page("article.layout");
						$article->set_idmembre($user->get_id());
						$article->set_article_url(urlencode(str_replace(" ", "-", $args["titre"])));
						$article->save("article");
						$notification = "METTRE UNE NOTIF LA";
					}else{
						$view->assign("errors", $validation->getErreur());
					}
				}
						$view->assign("args", $args);
			$view->assign("meta_title", "Connexion Administration");
			$view->assign("meta_description", "Connexion administration journal du referencement");			
				
			}else{
			}
		}else{
			$view = new view("admin", "auth", "admin.notconnected.layout");
			$view->assign("meta_title", "Connexion Administration");
			$view->assign("meta_description", "Connexion administration journal du referencement");
		}
	}
	
	public function disconnect(){
		security::disconnect();
	}
	
	
}