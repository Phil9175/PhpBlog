<?php
class security{
		
	public static function is_connected(){
		if (isset($_SESSION['session'])){
			$utilisateur = new users;
			$utilisateur->getOneBy($_SESSION["session"], "token", "users");
			if ($utilisateur->result["id"] != 0){
				return TRUE;
			}else{
			return FALSE;	
			}
		}else{
			return FALSE;
		}
	}
	
	public static function connected($elements){
		//Création d'une variable de session
		//redirection
		$utilisateur = new users;
		$elements = validation::sanitize($elements);
		$utilisateur->getOneBy($elements["email"], "email", "users");
		$utilisateur->setFromBdd($utilisateur->result);
		if ($utilisateur->get_password() == self::makePassword($elements["pass"])){
			$uniqid = fonctions::id_aleatoire();
			$_SESSION['session'] = $uniqid;
			$utilisateur->set_token($uniqid);
			$utilisateur->save("users");
			header("Location: ".ADRESSE_SITE."/admin");
		}else{
			self::disconnect();
		}
	}	
	
	public static function disconnect(){
		//Suppression des variables de session
		//redirection
		error_reporting(0);
		session_unset();
		session_destroy();
		header('Location: '.$_SERVER['HTTP_HOST'].'/');
	}
	
	public static function has_permission(){
	
	}
	
	public static function makePassword($pass){
		return sha1($pass);
	}
	
}