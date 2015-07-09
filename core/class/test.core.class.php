<?php
class test extends bdd{
		
	public $value;
	public $return;
		
	public function __construct() {
		parent::__construct();

		$this->url = explode("/", trim($_SERVER['REQUEST_URI'], "/"));
		$this->value = $this->url[0];
	}
	
	public function testArticle(){
		$this->getOneBy($this->value, $column = "id", $class = "article", $table = "article");
		if (isset($this->article[id])){
			return TRUE;
		}else{
			return FALSE;
		} 
	}
	
}
?>