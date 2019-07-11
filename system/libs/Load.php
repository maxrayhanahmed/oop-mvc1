<?php
/**
* Load Class
*/
class Load{

	function __construct(){
		///
	}

	public function view($fileName,$data=false){
		if($data == true){
			extract($data);
		}
		include 'apps/views/'.$fileName.'.php';	
	}

	public function ajaxview($fileName,$data=false){
		if($data == true){
			extract($data);
		}
		include '../../apps/views/'.$fileName.'.php';	
		//include $fileName.'.php';	
		//include 'ajax'. $fileName.'.php';	
	}


	public function model($modelName){
		include 'apps/model/'.$modelName.'.php';
		return new $modelName();	
	}

	public function ajaxmodel($modelName){
		include '../../apps/model/'.$modelName.'.php';
		return new $modelName();	
	}

	

}

?>