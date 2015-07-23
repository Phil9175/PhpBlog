<?php
class page {
	
	private $url;
	
	public function __construct(){
		$this->url = explode("/", trim($_SERVER['REQUEST_URI'], "/"));
	}
	public function defaultPage() {
		$this->url = explode("/", trim($_SERVER['REQUEST_URI'], "/"));
		$article = new article("article");
		$article->getOneBy($this->url[0], "article_url", "article");
		$article->setFromBdd($article->result);
		$articles = $article->getResults("","","article", " WHERE statut = 'published' and type_page = 'article.layout'  ORDER BY date_publication DESC LIMIT 0, 5");
		$controller = explode(".", $article->get_type_page());
		$view = new view($controller[0], "index", $article->get_type_page());
		$view->assign("urlArticle", $article->get_article_url());
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
		$view->assign("datePublication", date('d/m/Y \à H:i:s', strtotime($article->get_date_publication())));
		$view->assign("dateModification", date('d/m/Y \à H:i:s', strtotime($article->get_date_last_modification())));
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
		
		$commentaire = new commentaire();
		$view->assign("commentaire", $commentaire->requete("SELECT commentaire.texte as texte, commentaire.date_publication, commentaire.id as idCommentaire, users.pseudo, users.id as idUtilisateur FROM commentaire, users, article where users.id = commentaire.idUsers and article.id = '".$article->get_id()."'"));
	}
	
	public function comment($args){
		if (security::is_connected()){
			if (isset($args['isSubmit']) && $args['isSubmit'] == "yes") {
				$validation = new validation($_SESSION['elementsSessionFormulaire']['commentAdd'], $args);
					if ($validation->validationFormulaire() === TRUE) {
						$this->url = explode("/", trim($_SERVER['REQUEST_URI'], "/"));
						$article = new article("article");
						$article->getOneBy($this->url[0], "article_url", "article");
						$article->setFromBdd($article->result);
						$articles = $article->getResults("","","article", " WHERE statut = 'published' and type_page = 'article.layout'  ORDER BY date_publication DESC LIMIT 0, 5");
						$article->get_id();
						$user = new users();
						$user->getOneBy($article->get_idmembre(), "id", "users");
						$commentaire = new commentaire();
						$commentaire->set_date_publication(date("Y-m-d H:i:s"));
						$commentaire->set_idArticle($article->get_id());
						$commentaire->set_idUsers($user->result['id']);
						$commentaire->set_texte(nl2br(validation::sanitize($args['commentaire'])));
						$commentaire->save("commentaire");
						header('HTTP/1.0 302 Found');
						header("Location : ".ADRESSE_SITE."/".$this->url[0]); 
						exit;
					}
			}
		}
	}
	
	public function delete($args){
		if (security::is_connected()){
			if (security::get_can_modify_commentaire(security::returnId())){
				if (is_numeric($args[0])){
					$commentaire = new commentaire();
					$commentaire->requeteDelete("DELETE FROM commentaire where id = '".intval($args[0])."';");
					header('HTTP/1.0 302 Found');
					header("Location : ".ADRESSE_SITE."/".$this->url[0]); 
					exit;
				}else{
					header('HTTP/1.0 302 Found');
					header("Location : ".ADRESSE_SITE."/admin/disconnect"); 
					exit;
				}
			}else{
				header('HTTP/1.0 302 Found');
				header("Location : ".ADRESSE_SITE."/admin/disconnect"); 
				exit;
			}
		}else{
			header('HTTP/1.0 302 Found');
			header("Location : ".ADRESSE_SITE."/admin/disconnect"); 
			exit;
		}
	}
	
}