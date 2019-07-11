<?php
/**
* Category Model
*/

class CatModel extends MainModel{
	public function __construct(){
		parent::__construct();
		}

	public function categoryListTest($catTable){
		$sql="select * from ".$catTable;

		return $this->db->select($sql);
		//echo 'paglami';

}

public function catList($catTable){
		$sql="select * from ".$catTable;

		return $this->db->select($sql);
		//echo 'paglami';

}
	public function catById($tableName,$id){
	$sql="select * from $tableName where id=:id";

	$data=array(":id" => $id);
		return $this->db->select($sql,$data);
	
	}

	public function insertCat($tableName,$data){
	
		return $this->db->insert($tableName,$data);

	}


	public function catUpdate($tableName,$data,$cond){

		return $this->db->update($tableName,$data,$cond);

	}

	public function catDelete($tableName,$cond){

		return $this->db->delete($tableName,$cond);

	}

}


?>