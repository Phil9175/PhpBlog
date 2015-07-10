<?php
class article extends bdd{
	
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
	
	public function __construct(){
		parent::__construct();
	}
	
}
?>