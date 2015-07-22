<?php
class menu extends bdd{
		
	protected $id;
	protected $nom;
	protected $place;
	protected $lien;
	protected $isChildOf;
	protected $maj;
	
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
	
	public function set_nom($nom){
		$this->nom = $nom;
	}
	
	public function set_place($place){
		$this->place = $place;
	}
	
	public function set_lien($lien){
		$this->lien = $lien;
	}
	
	public function set_isChildOf($isChildOf){
		$this->isChildOf = $isChildOf;
	}
	
	public function set_maj($maj){
		$this->maj = $maj;
	}
	
	public function get_id(){
		return $this->id;
	}
	
	public function get_nom(){
		return $this->nom;
	}
	
	public function get_place(){
		return $this->place;
	}
	
	public function get_lien(){
		return $this->lien;
	}
	
	public function get_isChildOf(){
		return $this->isChildOf;
	}
	
	public function get_maj(){
		return $this->maj;
	}
}
?>