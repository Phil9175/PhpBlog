<?php
class bdd {
	
	private $bddhost = "localhost";
	private $bddlogin = "root";
	private $bddpass = "root";
	private $bddname = "journaldureferencement";
	private $table;
	private $classe;
	public $article = [];
	public $result = [];
	protected $connexion;
	
	
	public function __construct(){
		self::Connection();
		$this->table = get_called_class();
		$this->classe = get_called_class();
	}

	public function Connection(){
		$conn = NULL;
		try{
			$conn = new PDO("mysql:dbname=".$this->bddname.";host=".$this->bddhost, $this->bddlogin, $this->bddpass);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo 'Connexion échouée : '.$e->getMessage();
		}
			$this->connexion = $conn;
	}
  
  	public function save(){
		$all_vars = array_keys(get_object_vars($this));
		$pdo_vars = array_keys(get_class_vars(get_class()));
		$child_vars = array_diff($all_vars, $pdo_vars);
		
		if (is_numeric($this->id)){
			foreach($child_vars as $var){
				$array_to_execute[$var] = $this->$var;
				$set_sql[] = $var."=:".$var;
			}
			$sql = "UPDATE ".$this->table." SET ".implode(",", $set_sql). "where id = :id;";
			$query = $this->connexion->prepare($sql);
			$query->execute($array_to_execute);
		}else{
			$sql = "INSERT INTO ".$this->table."
					( ". implode(",", $child_vars). ") 
					VALUES ( :" . implode(",:", $child_vars). ");";
			$query = $this->connexion->prepare($sql);
			foreach($child_vars as $var){
				$array_to_execute[$var] = $this->$var;
			}
			$query->execute($array_to_execute);
		}
	}
	
	public function getOneBy($value, $column = "id", $class = "", $table = self::table){
		$sql = "SELECT * FROM ".$table." WHERE ".$column."=:".$column." limit 1";
		$query = $this->connexion->prepare($sql);
		$query->execute([$column=>$value]);
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$data = $query->FETCH();
		if ($class == "article"){
		if (!empty($data)){
			foreach($data as $propName => $propValue){
				$this->article[$propName] = $propValue;
			}
		}
		}else{
			if (!empty($data)){
			foreach($data as $propName => $propValue){
				$this->result[$propName] = $propValue;
			}
		}
		}
	}
	
	public function getResult(){
	}
	
	public function getResults(){
	}
	
	public function query(){
	}
	
	
}
?>