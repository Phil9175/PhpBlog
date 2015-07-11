<?php
class index {
	
	public function __construct() {
	}
	
	public function defaultPage($args) {
		$view = new view("index", "index");
		$view->assign("meta_title", "Mon titre a moi");
		$view->assign("meta_description", "Ma description a moi");
		$article = new article;
		$articles = $article->getResults("","","article", "ORDER BY id");
		$view->assign("allArticles", $articles);
	}
	
	public function recherche($args){
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