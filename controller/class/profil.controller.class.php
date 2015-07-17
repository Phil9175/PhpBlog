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
		$view->assign("email", $user->get_email());
		$view->assign("dateInscription", date('d/m/Y H:i:s', strtotime($user->get_date_inscription())));
		$article = new article;
		$articles = $article->getResults("","","article", " WHERE statut = 'published' and type_page = 'article.layout' ORDER BY id");
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
		$articles = $article->getResults("","","article", " WHERE statut = 'published' and type_page = 'article.layout' ORDER BY id");
		$view->assign("allArticles", $articles);
		unset($article);
		
		if( isset($args[1]) && is_numeric($args[1]) )
    		$page = $args[1];
		else
			$page = 1;
		// Nombre d'infos par page
		$pagination = 5;
		// Numéro du 1er enregistrement à lire
		$limit_start = ($page - 1) * $pagination;	
			
			
		$article = new article;
		$articles = $article->getResults("","","article", " where idmembre = '".$user->get_id()."' and statut = 'published' and type_page = 'article.layout'  ORDER BY id ASC LIMIT $limit_start, $pagination");
		$view->assign("allUserArticles", $articles);

		$requete = new bdd;
		$nb_total = $requete->requete("SELECT COUNT(*) AS nb_total FROM article where idmembre = '".$user->get_id()."' and type_page = 'article.layout'");
		$nb_total = $nb_total[0]['nb_total'];
		// Pagination
		$nb_pages = ceil($nb_total / $pagination);
		$view->assign("page", $page);
		$view->assign("nb_pages", $nb_pages);
	}
	
}