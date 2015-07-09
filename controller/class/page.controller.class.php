<?php
class page {
	
	private $url;
	
	public function __construct() {
		$this->url = explode("/", trim($_SERVER['REQUEST_URI'], "/"));
		$article = new article;
		$article->getOneBy($this->url[0], "post_url", "article");
		//Y'A PLUS QU'A PASSER LES VARIABLES de $article->article[] avec assign et créer une vue
		/*
		$view = new view("index", "index");
		$view->assign("prenom", "ppg");
		*/
	}
	
}