<?php
/**
* post Model
*/

class PostModel extends MainModel{
	public function __construct(){
		parent::__construct();
		}

	

	public function insertPost($tableName,$data){
	
		return $this->db->insert($tableName,$data);

	}
	public function postList($postTable,$catTable){
	
	$sql="SELECT $postTable.*,$catTable.category FROM $postTable
		 INNER JOIN $catTable
		 ON $postTable.catId = $catTable.id 
		 WHERE $postTable.publicationStatus=1 order by id desc limit 3;
		 ";

		return $this->db->select($sql);

	}
	public function getPostById($postTable,$catTable,$id){
	
	
	$sql="SELECT $postTable.*,$catTable.category FROM $postTable
		 INNER JOIN $catTable
		 ON $postTable.catId = $catTable.id 
		 WHERE $postTable.id=$id
		 ";
		 
		 
	
		return $this->db->select($sql);

	}

	public function getPostByCat($postTable,$id){
		$sql="SELECT * FROM $postTable where publicationStatus=1 and catId=$id order by id desc limit 4";

		return $this->db->select($sql);

	}
	public function sitebarPosts($postTable){

	
		 $sql="SELECT * FROM $postTable where publicationStatus=1 order by id desc limit 4";


		return $this->db->select($sql);
	}
	public function sitebarCat($postTable,$catTable){

	
		$sql="SELECT $postTable.*, $catTable.category FROM $postTable
		 INNER JOIN $catTable 
		 ON $postTable.catId = $catTable.id 
		 WHERE $postTable.publicationStatus=1 GROUP BY category";

		// $sql="SELECT DISTINCT category FROM category";
		 



		return $this->db->select($sql);
	}

public function postManag($postTable,$catTable){
	
	$sql="SELECT $postTable.*,$catTable.category FROM $postTable
		 INNER JOIN $catTable
		 ON $postTable.catId = $catTable.id 
		 order by id desc
		 ";

		return $this->db->select($sql);

	}


	public function postDelete($tableName,$cond){
	
		return $this->db->delete($tableName,$cond);
	}
	public function postEditById($tableName,$cond){

		$sql="SELECT * FROM $tableName WHERE id=$cond";
	
	return $this->db->select($sql);
	}

	public function postUpdateById($tableName,$cond,$data){
	
		$this->db->update($tableName,$cond,$data);
	}

}


?>