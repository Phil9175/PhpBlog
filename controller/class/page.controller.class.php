<?php
class page {
	
	private $url;
	
	public function __construct() {
		$this->url = explode("/", trim($_SERVER['REQUEST_URI'], "/"));
		$article = new article;
		$article->getOneBy($this->url[0], "article_url", "article", "article");
		$view = new view("article", "index", $article->article["type_page"]);
		$view->assign("titre", $article->article["titre"]);
		$view->assign("contenu", $article->article["contenu"]);
		$view->assign("meta_title", $article->article["meta_title"]);
		$view->assign("meta_description", $article->article["meta_description"]);
		$view->assign("date_publication", $article->article["date_publication"]);
		$view->assign("date_last_modification", $article->article["date_last_modification"]);
	}
	
}