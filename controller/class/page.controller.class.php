<?php
class page {
	
	private $url;
	
	public function __construct() {
		$this->url = explode("/", trim($_SERVER['REQUEST_URI'], "/"));
		$article = new article("article");
		$article->getOneBy($this->url[0], "article_url", "article");
		$article->setFromBdd($article->result);
		$articles = $article->getResults("","","article", "ORDER BY id");
		$view = new view("article", "index", $article->get_type_page());
		$view->assign("allArticles", $articles);
		$view->assign("titre", $article->get_titre());
		$view->assign("contenu", $article->get_contenu());
		$view->assign("meta_title", $article->get_meta_title());
		$view->assign("meta_description", $article->get_meta_description());
		$view->assign("date_publication", $article->get_date_publication());
		$view->assign("date_last_modification", $article->get_date_last_modification());
	}
	
}