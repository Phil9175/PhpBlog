<?php
class view {
	
	private $controller;
	private $action;
	private $layout;
	private $data = [];
	
	public function __construct($controller, $action = "index", $layout = "index"){
		$this->controller = $controller;
		$this->action = $action;
		$this->layout = $layout;
	}
	
	public function __destruct(){
		$this->renderer();
	}
	
	public function assign($variable, $value){
		$this->data[$variable] = $value;
	}
	
	public function renderer(){
		extract($this->data);
		include_once("view/includes/head.inc.php");
		include_once("view/includes/menu.inc.php");
		include_once("view/".$this->layout."/".$this->action.".php");
		include_once("view/includes/footer.inc.php");
	}
}