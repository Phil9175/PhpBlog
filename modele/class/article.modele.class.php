<?php
class article extends bdd{
	
	private $id;
	private $titre;
	private $contenu;
	private $statut;
	private $meta_title;
	private $meta_description;
	private $date_publication;
	private $date_last_modification;
	private $type_page;
	private $idmembre;
	private $article_url;
	
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
	
	public function set_titre($titre){
		$this->titre = $titre;
	}
	
	public function set_contenu($contenu){
		$this->contenu = $contenu;
	}
	
	public function set_statut($statut){
		$this->statut = $statut;
	}
	
	public function set_meta_title($meta_title){
		$this->meta_title = $meta_title;
	}
	
	public function set_meta_description($meta_description){
		$this->meta_description = $meta_description;
	}
	
	public function set_date_publication($date_publication){
		$this->date_publication = $date_publication;
	}
	
	public function set_date_last_modification($date_last_modification){
		$this->date_last_modification = $date_last_modification;
	}
	
	public function set_type_page($type_page){
		$this->type_page = $type_page;
	}
	
	public function set_idmembre($idmembre){
		$this->idmembre = $idmembre;
	}
	
	public function set_article_url($article_url){
		$this->article_url = $article_url;
	}
	
	public function get_id(){
		return $this->id;
	}
	
	public function get_titre(){
		return $this->titre;
	}
	
	public function get_contenu(){
		return $this->contenu;
	}
	
	public function get_statut(){
		return $this->statut;
	}
	
	public function get_meta_title(){
		return $this->meta_title;
	}
	
	public function get_meta_description(){
		return $this->meta_description;
	}
	
	public function get_date_publication(){
		return $this->date_publication;
	}
	
	public function get_date_last_modification(){
		return $this->date_last_modification;
	}
	
	public function get_type_page(){
		return $this->type_page;
	}
	
	public function get_idmembre(){
		return $this->idmembre;
	}
	
	public function get_article_url(){
		return $this->article_url;
	}
	
	
	
	
	
}
?>