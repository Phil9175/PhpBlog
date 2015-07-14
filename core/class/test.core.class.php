<?php
class test extends bdd{
		
	public $value;
	public $return;
	public $article = [  "id" => "",
						"titre" => "",
						"contenu" => "",
						"statut" => "",
						"meta_title" => "",
						"meta_description" => "",
						"date_publication" => "",
						"date_last_modification" => "",
						"type_page" => "",
						"membre_idmembre" => "",
						"article_url" => ""
	];
	
	public function __construct() {
		parent::__construct();

		$this->url = explode("/", trim($_SERVER['REQUEST_URI'], "/"));
		$this->value = $this->url[0];
	}
	
	public function testArticle(){
		$this->getOneBy($this->value, "id", "article", "article");
		if (isset($this->article["id"])){
			return TRUE;
		}else{
			return FALSE;
		} 
	}
	
}
?>