<?php
class page {
	
	private $url;
	
	public function __construct() {
		$this->url = explode("/", trim($_SERVER['REQUEST_URI'], "/"));
		$article = new article("article");
		$article->getOneBy($this->url[0], "article_url", "article");
		$article->setFromBdd($article->result);
		$articles = $article->getResults("","","article", " WHERE statut = 'published' and type_page = 'article.layout'  ORDER BY id");
		$view = new view("article", "index", $article->get_type_page());
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
		
		$listOfTags = explode(";", $article->get_tags());
		$tabOfRelationsArticles = [];
		unset($articles);
		foreach ($listOfTags as $key => $value){
			$articles = $article->getResults("","","article", " WHERE tags LIKE '%".trim($value)."%' and statut = 'published' and type_page = 'article.layout' and id != '".$article->get_id()."' ORDER BY id");
			foreach ($articles as $cle => $valeur){
				$tabOfRelationsArticles[] = $valeur["id"];
			}
		}
		unset($articles);
		$tabOfRelationsArticles = array_unique($tabOfRelationsArticles);
		$tabArticles = [];
		foreach($tabOfRelationsArticles as $key => $value){
			$temp = new article("article");
			$temp->getOneBy($value, "id", "article");
			$tabArticles[] = ["id" => $temp->result["id"], "article_url" => $temp->result["article_url"], "titre" => $temp->result["titre"]];
			unset($temp);
		}
		shuffle($tabArticles);
		if (count($tabArticles) > 3){
			$tabArticles = array_slice($tabArticles, 0, 3);
		}
		$view->assign("tabArticles", $tabArticles);
	}
	
}