<?php
class validation {
	
	private $elements;
	public $tableauErreur = array();
	
	public function __construct($formulaire){
		if(is_array($formulaire)){
			$this->elements = $formulaire;
			return TRUE;
		}else{
			return FALSE;
		}
		
	}
	
	public function getPostValeurs($post){
		foreach($post as $cle => $valeur ) {
    		if( is_array( $valeur ) ) {
    		    foreach( $valeur as $tableau ) {
					//tableau checkbox
    	 	       echo $tableau;
    		    }
  	 		 } else {
    	 	    $this->{$cle}=$valeur;
				//$this->{$cle}[1]=$cle;
				//$this->validation($cle, $valeur);
				//$this->nomDuChampHtml contient la valeur du champ html;
   			 }
		} 
	}
	
	private function cleanInput($input){
	 $search = array(
    '@<script[^>]*?>.*?</script>@si',   // On enleve le javascript
    '@<[\/\!]*?[^<>]*?>@si',            // On enleve le html
    '@<style[^>]*?>.*?</style>@siU',    // On enleve le CSS
    '@<![\s\S]*?--[ \t\n\r]*>@'         // On enleve les commentaires
  );

    $output = preg_replace($search, '', $input);
    return $output;
  }
  
  
  public function sanitize($input) {
    if (is_array($input)) {
        foreach($input as $var=>$val) {
            $output[$var] = sanitize($val);
        }
    }
    else {
        if (get_magic_quotes_gpc()) {
            $input = stripslashes($input);
        }
        $input  = cleanInput($input);
        $output = mysql_real_escape_string($input);
    }
    return $output;
}
	private function valideEmail($email)
{
   $isValid = true;
   $atIndex = strrpos($email, "@");
   if (is_bool($atIndex) && !$atIndex)
   {
      $isValid = false;
   }
   else
   {
      $domain = substr($email, $atIndex+1);
      $local = substr($email, 0, $atIndex);
      $localLen = strlen($local);
      $domainLen = strlen($domain);
      if ($localLen < 1 || $localLen > 64)
      {
         // si taille email trop grande ou trop petite
         $isValid = false;
      }
      else if ($domainLen < 1 || $domainLen > 255)
      {
         // trop grand ou trop petit nom de domaine
         $isValid = false;
      }
      else if ($local[0] == '.' || $local[$localLen-1] == '.')
      {
         // commence ou termine par un point
         $isValid = false;
      }
      else if (preg_match('/\\.\\./', $local))
      {
         // deux points consecutifs dans le pre @
         $isValid = false;
      }
      else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain))
      {
         // caractere pas valide
         $isValid = false;
      }
      else if (preg_match('/\\.\\./', $domain))
      {
         // deux points consecutifs dans le domaine
         $isValid = false;
      }
      else if (!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/', str_replace("\\\\","",$local)))
      {
         // character not valid in local part unless 
         // local part is quoted
         if (!preg_match('/^"(\\\\"|[^"])+"$/',
             str_replace("\\\\","",$local)))
         {
            $isValid = false;
         }
      }
      if ($isValid && !(checkdnsrr($domain,"MX") || checkdnsrr($domain,"A")))
      {
         // pas bon nom de domaine
         $isValid = false;
      }
   }
   return $isValid;
}

	private function validationChamp($idChamp){
		$erreur = 0;
		if (($this->elements[$idChamp]["required"] == "TRUE") && $_POST[$this->elements[$idChamp]["name"]] == ""){
			array_push($this->tableauErreur, "Le champ ".$this->elements[$idChamp]["title"]." est invalide, il est obligatoire de le completer.");
			++$erreur;
		}
		
		foreach ($this->elements[$idChamp]["typeVerification"] as $cle => $valeur){
			switch ($cle){
				case "maxlength":
					if (strlen($_POST[$this->elements[$idChamp]["name"]]) > $valeur)
						array_push($this->tableauErreur, "Le champ ".$this->elements[$idChamp]["title"]." est trop long, il doit faire ".$valeur." caracteres de long maximum.");
						++$erreur;
						break;
				case "minlength":
				if (strlen($_POST[$this->elements[$idChamp]["name"]]) < $valeur)
						array_push($this->tableauErreur, "Le champ ".$this->elements[$idChamp]["title"]." est trop court, il doit faire ".$valeur." caractere de long minimum.");
						++$erreur;
						break;
				case "email":
						if ($this->valideEmail($_POST[$this->elements[$idChamp]["name"]]) != TRUE){
							array_push($this->tableauErreur, "Le champ ".$this->elements[$idChamp]["title"]." est invalide. Veuillez saisir un email valide.");
							++$erreur;
						}
						break;
				case "telephone":
						if (!preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#", $_POST[$this->elements[$idChamp]["name"]])){
							array_push($this->tableauErreur, "Le champ ".$this->elements[$idChamp]["title"]." est invalide. Veuillez saisir un numero de telephone valide.");
							++$erreur;
						}
						break;
				case "date":
						list($dd, $mm, $yyyy)= explode("/", $_POST[$this->elements[$idChamp]["name"]]);
						if (!checkdate($mm, $dd, $yyyy)){
							array_push($this->tableauErreur, "Le champ ".$this->elements[$idChamp]["title"]." est invalide. Veuillez saisir une date valide.");
							++$erreur;
						}
						break;
				case "url":
						$_POST[$this->elements[$idChamp]["name"]] = trim($_POST[$this->elements[$idChamp]["name"]], '!"#$%&\'()*+,-./@:;<=>[\\]^_`{|}~');
						if (!preg_match('%^(?:(?:https?|ftp)://)(?:\S+(?::\S*)?@|\d{1,3}(?:\.\d{1,3}){3}|(?:(?:[a-z\d\x{00a1}-\x{ffff}]+-?)*[a-z\d\x{00a1}-\x{ffff}]+)(?:\.(?:[a-z\d\x{00a1}-\x{ffff}]+-?)*[a-z\d\x{00a1}-\x{ffff}]+)*(?:\.[a-z\x{00a1}-\x{ffff}]{2,6}))(?::\d+)?(?:[^\s]*)?$%iu', $_POST[$this->elements[$idChamp]["name"]])){
								array_push($this->tableauErreur, "Le champ ".$this->elements[$idChamp]["title"]." est invalide. Veuillez saisir une adresse url valide.");
								++$erreur;
							}
						break;
				default:
						break;
				
			}
		}
		return $erreur;
	}
	
	public function validationFormulaire(){
		$nbErreur = 0;
		foreach($this->elements as $cle => $valeur){
			$nbErreur += $this->validationChamp($cle);
		}
		if ($this->elements[0]["identifiantSecurite"] != $_POST["identifiantSecurite"]){
			++$nbErreur;
			array_push($this->tableauErreur, "Le jeton de securite du formulaire n'est pas valide.");
		}
		if ($nbErreur == 0){
			return TRUE;
		}else{
			return $nbErreur;
		}
	}
	
	public function getErreur(){
		return $this->tableauErreur;
	}
}
?>