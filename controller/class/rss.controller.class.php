<?php
class rss {
	
	public function defaultPage() {
		$article = new article("article");
		$articles = $article->getResults("","","article", " WHERE statut = 'published' ORDER BY id");
		$view = new view("", "", "rss.layout");
		$view->assign("allArticles", $articles);
	}
	
	
	
}