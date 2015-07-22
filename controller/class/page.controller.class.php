<?php
class page {
	
	private $url;
	
	public function __construct() {
		$this->url = explode("/", trim($_SERVER['REQUEST_URI'], "/"));
		$article = new article("article");
		$article->getOneBy($this->url[0], "article_url", "article");
		$article->setFromBdd($article->result);
		$articles = $article->getResults("","","article", " WHERE statut = 'published' and type_page = 'article.layout'  ORDER BY date_publication DESC LIMIT 0, 5");
		$view = new view("page", "index", $article->get_type_page());
		$view->assign("allArticles", $articles);
		$view->assign("id", $article->get_id());
		$view->assign("titre", $article->get_titre());
		$view->assign("contenu", $article->get_contenu());
		$view->assign("meta_title", $article->get_meta_title());
		$view->assign("meta_description", $article->get_meta_description());
		$user = new users();
		$user->getOneBy($article->get_idmembre(), "id", "users");
		$view->assign("nom", $user->result['pseudo']);
		$view->assign("idUser", $user->result['id']);
		$view->assign("datePublication", date('d/m/Y H:i:s', strtotime($article->get_date_publication())));
		$view->assign("dateModification", date('d/m/Y H:i:s', strtotime($article->get_date_last_modification())));
		
		
	}
	
}