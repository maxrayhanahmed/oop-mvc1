<?php
/**
* User Model
*/

class UserModel extends MainModel{
	public function __construct(){
		parent::__construct();
		}

	public function insertUser($tableName,$data){	
		return $this->insert($tableName,$data);
	}

	public function userList($tableName){
	$sql="SELECT * FROM $tableName";

		return $this->db->select($sql);
		}

	public function userDelete($tableName,$cond){

		return $this->db->delete($tableName,$cond);

	}


	

}


?>