<?php
/**
 * 
 */
class LoginModel extends MainModel{
	
	function __construct()
	{
		parent::__construct();
	}

	public function adminControl($tableName,$uname,$password){

		$sql= "SELECT * FROM $tableName WHERE username=? AND password=?";

		return $this->db->affectedRows($sql,$uname,$password);

	}


	public function getUserData($tableName,$uname,$password){
	$sql= "SELECT * FROM $tableName WHERE username=? AND password=?";

		return $this->db->setAdmin($sql,$uname,$password);
}
}


?>