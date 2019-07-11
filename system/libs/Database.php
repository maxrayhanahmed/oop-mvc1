<?php
/**
* Database Class
*/

class Database extends PDO{

	public function __construct($dsn,$user,$pass){
		
		parent::__construct($dsn,$user,$pass);

	}
	public function select($sql,$data=NULL){
		$stmt= $this->prepare($sql);

		if ($data==true) {
			extract($data);
		

		foreach ($data as $key => $value) {
			$stmt->bindParam($key,$value);

		}
		}
		$stmt->execute();
		return $stmt->fetchAll();
	}



	public function insert($tableName,$data){
		$keys =implode(",",array_keys($data));
		$values =":".implode(", :", array_keys($data));


		$sql="INSERT INTO $tableName($keys) VALUES($values)";

		$stmt=$this->prepare($sql);

		foreach ($data as $key => $value) {
				$stmt->bindValue(":$key", $value);
				}
			return $stmt->execute();
		
	}
/*
	public function update($tableName,$data,$cond){
		$updateKeys[] = NULL;
		foreach ($data as $key => $value) {
			$updateKeys[] .= "$key=:$key,";
			}
			//$updateKeys = rtrim($updateKeys, ",");


			$sql="UPDATE $tableName SET $updateKeys WHERE id=$cond";

			$stmt=$this->prepare($sql);

		foreach ($data as $key => $value) {
				$stmt->bindValue(":$key", $value);
				}
			//return $stmt->execute();
		
	}

*/

	public function delete($tableName,$cond){
		$sql="DELETE FROM $tableName WHERe id=$cond";
		return $result= $this->query($sql);

	}

	public function update($tableName,$data,$cond){
			$updateKeys=NULL;

		foreach ($data as $key => $value) {
			$updateKeys[] = "$key = '$value'";
			}
			$updateFields =implode(",",$updateKeys);			
			$sql="UPDATE $tableName SET $updateFields WHERE id=$cond";
		
			return $result=	$this->query($sql);
	}





	public function affectedRows($sql,$uname,$password){
		$stmt = $this->prepare($sql);
		$stmt->execute(array($uname,$password));
		return $stmt->rowCount();

	}
	public function setAdmin($sql,$uname,$password){
		$stmt = $this->prepare($sql);
		$stmt->execute(array($uname,$password));
		return  $stmt->fetchAll();

	}


	

	


	
	


}


?>