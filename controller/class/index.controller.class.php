<?php
class index {
	
	public function __construct() {
	}
	
	public function defaultPage() {
		$view = new view("index", "index");
		$view->assign("meta_title", "Mon titre a moi");
		$view->assign("meta_description", "Ma description a moi");
		
	}
	
	public function recherche(){
		if (isset($_SESSION['elementsSessionFormulaire']['formulaireRecherche'])){
		$validation = new validation($_SESSION['elementsSessionFormulaire']['formulaireRecherche']);
		if ($validation->validationFormulaire()){
			//yé continu lé traitement
		}else{
		print_r ($validation->getErreur());
		}
		$view = new view("index", "index");
		}
	}
}