<?php
class article extends bdd{
		
	public $article = [ "ID" => "",
						"post_content" => "",
						"post_name" => "",
						"post_title" => "",
						"post_status" => "",
						"post_type" => "",
						"post_author" => "",
						"post_date" => "",
						"post_category" => "",
						"post_url" => ""
	];
	
	public function __construct(){
		parent::__construct();
	}
	
	public function setArticle($article){
		$this->article = $article;
	}
	
	
	public function getArticle($id){
		
		//retourne article
	}
	
	public function getTitle($id){
		
		//retourne title
	}
	
	public function publish($id, $statutAAvoir){
		//retourne $status
	}
}
?>