<?php
class index {
	/*
	
	 <?php
	  // Numero de page (1 par défaut)

		
		
		
		EROUGHERIUTGHIPTGHIPRTUGpages
		 <div class="pagination">
        <?php
        // Nb d'enregistrement total
$nb_total = mysql_query("SELECT COUNT(*) AS nb_total FROM a_macartegrise_partenaires");
$nb_total = mysql_fetch_array($nb_total);
$nb_total = $nb_total['nb_total'];

// Pagination
$nb_pages = ceil($nb_total / $pagination);
 echo '<center>';
echo '<p class="pagination">' . pagination($page, $nb_pages) . '</p>';
 
echo "</center>";
		?></div> 
		
		*/
		
		
	public function __construct() {
	}
	
	public function defaultPage($args) {
		if( isset($_GET['page']) && is_numeric($_GET['page']) )
    		$page = $_GET['page'];
		else
			$page = 1;


		// Nombre d'infos par page
		$pagination = 5;
		// Numéro du 1er enregistrement à lire
		$limit_start = ($page - 1) * $pagination;
		
		$view = new view("index", "index");
		$view->assign("meta_title", "Mon titre a moi");
		$view->assign("meta_description", "Ma description a moi");
		$article = new article;
		$articles = $article->getResults("","","article", "ORDER BY id ASC LIMIT $limit_start, $pagination");
		$view->assign("allArticles", $articles);
		
		$requete = new bdd;
		$nb_total = $requete->requete("SELECT COUNT(*) AS nb_total FROM article");
		$nb_total = $nb_total[0]['nb_total'];
		// Pagination
		$nb_pages = ceil($nb_total / $pagination);
		$view->assign("page", $page);
		$view->assign("nb_pages", $nb_pages);
		
	}
	
	public function page($args) {
		if( isset($args[0]) && is_numeric($args[0]) )
    		$page = $args[0];
		else
			$page = 1;


		// Nombre d'infos par page
		$pagination = 5;
		// Numéro du 1er enregistrement à lire
		$limit_start = ($page - 1) * $pagination;
		
		$view = new view("index", "index");
		$view->assign("meta_title", "Mon titre a moi");
		$view->assign("meta_description", "Ma description a moi");
		$article = new article;
		$articles = $article->getResults("","","article", "ORDER BY id ASC LIMIT $limit_start, $pagination");
		$view->assign("allArticles", $articles);
		
		$requete = new bdd;
		$nb_total = $requete->requete("SELECT COUNT(*) AS nb_total FROM article");
		$nb_total = $nb_total[0]['nb_total'];
		// Pagination
		$nb_pages = ceil($nb_total / $pagination);
		$view->assign("page", $page);
		$view->assign("nb_pages", $nb_pages);
		
	}
	
	
	public function recherche($args){
		if (isset($_SESSION['elementsSessionFormulaire']['formulaireRecherche'])){
		$validation = new validation($_SESSION['elementsSessionFormulaire']['formulaireRecherche']);
		if ($validation->validationFormulaire()){
			//yé continu lé traitement
		}else{
		print_r ($validation->getErreur());
		}
		$view = new view("index", "index");
		}
	}
}