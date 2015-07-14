<?php
class profil {
	
	private $url;
	
	public function view($args) {
		$this->url = explode("/", trim($_SERVER['REQUEST_URI'], "/"));
		$view = new view("profil", "actions/view", "profil.layout");
		$user = new users();
        $user->getOneBy($args[0], "id", "users");
        $user->setFromBdd($user->result);		
		$view->assign("nom", $user->get_pseudo());
		$view->assign("idUser", $user->get_id());
		$article = new article;
		$articles = $article->getResults("","","article", "ORDER BY id");
		$view->assign("allArticles", $articles);
	}
	
	public function articles($args) {
		$this->url = explode("/", trim($_SERVER['REQUEST_URI'], "/"));
		$view = new view("profil", "actions/articles", "profil.layout");
		$user = new users();
        $user->getOneBy($args[0], "id", "users");
        $user->setFromBdd($user->result);		
		$view->assign("nom", $user->get_pseudo());
		$view->assign("idUser", $user->get_id());
		$article = new article;
		$articles = $article->getResults("","","article", "ORDER BY id");
		$view->assign("allArticles", $articles);
		unset($article);
		$article = new article;
		$articles = $article->getResults("","","article", " where idmembre = '".$user->get_id()."' ORDER BY id");
		$view->assign("allUserArticles", $articles);

	}
	
}