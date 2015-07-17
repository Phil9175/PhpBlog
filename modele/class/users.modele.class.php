<?php
class users extends bdd{
		
	protected $id;
	protected $pseudo;
	protected $email;
	protected $date_inscription;
	protected $password;
	protected $can_modify_categories;
	protected $can_modify_user;
	protected $can_modify_page;
	protected $can_modify_commentaire;
	protected $can_modify_media;
	protected $token;
	
	
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
	
	public function set_pseudo($pseudo){
		$this->pseudo = $pseudo;
	}
	
	public function set_email($email){
		$this->email = $email;
	}
	
	public function set_date_inscription($date_inscription){
		$this->date_inscription = $date_inscription;
	}
	
	public function set_password($password){
		$this->password = $password;
	}
	
	public function set_can_modify_categories($can_modify_categories){
		$this->can_modify_categories = $can_modify_categories;
	}
	
	public function set_can_modify_user($can_modify_user){
		$this->can_modify_user = $can_modify_user;
	}
	
	public function set_can_modify_page($can_modify_page){
		$this->can_modify_page = $can_modify_page;
	}
	
	public function set_can_modify_commentaire($can_modify_commentaire){
		$this->can_modify_commentaire = $can_modify_commentaire;
	}
	
	public function set_can_modify_media($can_modify_media){
		$this->can_modify_media = $can_modify_media;
	}
	
	public function set_token($token){
		$this->token = $token;
	}
	
	public function get_id(){
		return $this->id;
	}
	
	public function get_pseudo(){
		return $this->pseudo;
	}
	
	public function get_email(){
		return $this->email;
	}
	
	public function get_date_inscription(){
		return $this->date_inscription;
	}
	
	public function get_password(){
		return $this->password;
	}
	
	public function get_can_modify_categories(){
		return $this->can_modify_categories;
	}
	
	public function get_can_modify_user(){
		return $this->can_modify_user;
	}
	
	public function get_can_modify_page(){
		return $this->can_modify_page;
	}
	
	public function get_can_modify_commentaire(){
		return $this->can_modify_commentaire;
	}
	
	public function get_can_modify_media(){
		return $this->can_modify_media;
	}
	
	public function get_token(){
		return $this->token;
	}

}
?>