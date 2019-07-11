<?php
/**
* Category Model
*/

class RegisterModel extends MainModel{
	public function __construct(){
		parent::__construct();
		}

	
	public function insertAdmin($tableName,$data){
	
		return $this->insert($tableName,$data);

	}


	

}


?>