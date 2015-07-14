<?php
class notFound {
	
	public function __construct() {
		$view = new view("404", "404", "404.layout");
		$article = new article;
		$articles = $article->getResults("","","article", "ORDER BY id");
		$view->assign("allArticles", $articles);
	}
}