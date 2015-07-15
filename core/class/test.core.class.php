<?php
class test extends bdd{
		
	protected $id;
	protected $titre;
	protected $contenu;
	protected $statut;
	protected $meta_title;
	protected $meta_description;
	protected $date_publication;
	protected $date_last_modification;
	protected $type_page;
	protected $idmembre;
	protected $article_url;
	protected $tags;
	
	
	public function __construct() {
		parent::__construct();
		$this->url = explode("/", trim($_SERVER['REQUEST_URI'], "/"));
		$this->value = $this->url[0];
	}
	
	public function setFromBdd($var = []){
		foreach($var as $key => $value){
			$this->$key = $value;
		}
	}
	
	public function get_titre(){
		return $this->titre;
	}
	
	
	public function testArticle(){
		$this->getOneBy($this->value, "article_url", "article", "article");
		if (isset($this->result["id"])){
			return TRUE;
		}else{
			return FALSE;
		} 
	}
	
}
?>