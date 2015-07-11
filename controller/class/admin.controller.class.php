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
				
				
				
			}else{
			$view = new view("admin", "article", "admin.layout");
			$view->assign("meta_title", "Connexion Administration");
			$view->assign("meta_description", "Connexion administration journal du referencement");
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