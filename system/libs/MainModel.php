<?php
/**
* Main Model
*/

class MainModel{
	public $db = array();
	private $config;
	public function __construct(){
		$this->config = new Config;
		$dsn 	= $this->config->dsn;
		$user	= $this->config->user;
		$pass 	= $this->config->pass;
		$this->db = new Database($dsn,$user,$pass);

	//
	} 

	// Function for insert Data

	public function insert($tableName,$data){

		$keys =implode(",",array_keys($data));
		$values ="'".implode("','",array_values($data))."'";



		$sql="INSERT INTO $tableName($keys) VALUES($values)";
			return $result=	$this->db->query($sql);
		
	}


	
	
}


?>