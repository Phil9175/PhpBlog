<?php
class commentaire extends bdd{
		
	protected $id;
	protected $texte;
	protected $date_publication;
	protected $idArticle;
	protected $idUsers;
	
	public function __construct(){
		parent::__construct();
	}
	
	public function setFromBdd($var = []){
		foreach($var as $key => $value){
			$this->$key = $value;
		}
	}
	public function set_id($id){
		$this->id = $id;
	}
	
	public function set_texte($texte){
		$this->texte = $texte;
	}
	
	public function set_date_publication($date_publication){
		$this->date_publication = $date_publication;
	}
	
	public function set_idArticle($idArticle){
		$this->idArticle = $idArticle;
	}
	
	public function set_idUsers($idUsers){
		$this->idUsers = $idUsers;
	}
	
	public function get_id(){
		return $this->id;
	}
	
	public function get_texte(){
		return $this->texte;
	}
	
	public function get_date_publication(){
		return $this->date_publication;
	}
	
	public function get_idArticle(){
		return $this->idArticle;
	}
	
	public function get_idUsers(){
		return $this->idUsers;
	}
}
?>