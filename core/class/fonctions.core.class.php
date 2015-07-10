<?php
class fonctions {
	
public static function is_controller($class_name){
	 if (file_exists("./controller/class/" . $class_name . ".controller.class.php"))
	{
		return TRUE;
	} else {
		return FALSE;
	}
}
public static function trunque($str, $nb = 150) {
	if (strlen($str) > $nb) {
		$str = substr($str, 0, $nb);
		$position_espace = strrpos($str, " ");
		$texte = substr($str, 0, $position_espace); 
		$str = $texte."...";
	}
	return $str;
}

}
define("ADRESSE_SITE", "http://".$_SERVER['HTTP_HOST']);