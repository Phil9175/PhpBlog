<?php
class users extends bdd{
		
	public $article = [ "ID" => "",
						"post_content" => "",
						"post_name" => "",
						"post_title" => "",
						"post_status" => "",
						"post_type" => "",
						"post_author" => "",
						"post_date" => "",
						"post_category" => ""
	];
	
	public function __construct(){
		parent::__construct();
		
	}
	
	

}
?>