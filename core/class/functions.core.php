<?php
function is_controller($class_name){
	 if (file_exists("./controller/class/" . $class_name . ".controller.class.php"))
	{
		return TRUE;
	} else {
		return FALSE;
	}
}
define("ADRESSE_SITE", "http://".$_SERVER['HTTP_HOST']);