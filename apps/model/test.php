<?php
/**
 * blogController
 */

class blogController extends MainController{
	
	function __construct()
	{
 	parent:: __construct();
	}

	public function index(){
		return $this->home();
	}

	public function home(){
		
		
		 $this->load->ajaxview("frontEnd/test/test");

	}

	
	
	

}
?>

