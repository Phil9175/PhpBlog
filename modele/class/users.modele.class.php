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
	protected $can_add_page;
	protected $can_modify_commentaire;
	protected $can_modify_menu;
	protected $token;
	protected $is_banned;
	protected $is_validate;
	protected $token_validation;
	protected $mdp_generate;
	
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
	
	public function set_can_add_page($can_add_page){
		$this->can_add_page = $can_add_page;
	}
	
	public function set_can_modify_commentaire($can_modify_commentaire){
		$this->can_modify_commentaire = $can_modify_commentaire;
	}
	
	public function set_can_modify_menu($can_modify_menu){
		$this->can_modify_menu = $can_modify_menu;
	}
	
	public function set_token($token){
		$this->token = $token;
	}
	
	public function set_is_banned($is_banned){
		$this->is_banned = $is_banned;
	}
	
	public function set_is_validate($is_validate){
		$this->is_validate = $is_validate;
	}
	
	public function set_token_validation($token_validation){
		$this->token_validation = $token_validation;
	}
	
	public function set_mdp_generate($mdp_generate){
		$this->mdp_generate = $mdp_generate;
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
	
	public function get_can_add_page(){
		return $this->can_add_page;
	}
	
	public function get_can_modify_commentaire(){
		return $this->can_modify_commentaire;
	}
	
	public function get_can_modify_menu(){
		return $this->can_modify_menu;
	}
	
	public function get_token(){
		return $this->token;
	}
	
	public function get_is_banned(){
		return $this->is_banned;
	}
	
	public function get_is_validate(){
		return $this->is_validate;
	}
	
	public function get_token_validation(){
		return $this->token_validation;
	}
	
	public function get_mdp_generate(){
		return $this->mdp_generate;
	}
}
?>