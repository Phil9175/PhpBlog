<?php
session_start();
require_once("core/class/functions.core.php");

spl_autoload_register( function($class_name) {
    if (file_exists("controller/class/" . $class_name . ".controller.class.php"))
	{
		include_once("controller/class/" . $class_name . ".controller.class.php");
	}
	 if (file_exists("view/class/" . $class_name . ".view.class.php"))
	{
		include_once("view/class/" . $class_name . ".view.class.php");
	}
	 if (file_exists("core/class/" . $class_name . ".core.class.php"))
	{
		include_once("core/class/" . $class_name . ".core.class.php");
	}
	 if (file_exists("modele/class/" . $class_name . ".modele.class.php"))
	{
		include_once("modele/class/" . $class_name . ".modele.class.php");
	}
});

$url = explode("/", trim($_SERVER['REQUEST_URI'], "/"));
$object = ($url[0] == "/" || $url[0] == "")?"index":$url[0];
$action = (!isset($url[1]))?"defaultPage":$url[1];


/*
Je teste si c'est vide
	index defaultPage
elseif teste si c'est index
	header /
elseif teste si la class existe et si l'action est appelable
elseif (nouvel objet test si c'est bon j'instancie une page)
else notFound
*/

$test = new test;
if (class_exists($object)){
	$obj = new $object;
	if (is_callable([$obj, $action]) && is_controller($object)){
		$obj->$action();
	}elseif ($test->testArticle){
		unset($obj);
		$obj = new page;
	}else{
		unset($obj);
		$obj = new notFound;
	}
}else{
	$obj = new notFound;
}
?>