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

public static function id_aleatoire()
	{
	$elements = "abcdefghijklmnopqrstuvwxyz0123456789AZERTYUIOPMLKJHGFDSQWXCVBN";
	$retour = "";
	srand(time());
	for ($ligne=0;$ligne<30;$ligne++)
		{
		$retour.=substr($elements,(rand()%(strlen($elements))),1);
		}
	return sha1($retour.uniqid());
	}

}