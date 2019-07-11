<?php

/**
 * 
 */
class Session{
	
	function __construct()
	{
		#...
	}

	public static  function init(){
		session_start();
	}


	public static  function set($key,$val){
		$_SESSION[$key] = $val;
	}

	public static  function get($key){

		if (isset($_SESSION[$key])) {
		return $_SESSION[$key];
		} else {
			return false;
		}
		
	}
	public static function authChack(){
			self::init();
		if(self::get("login") == false) {
			self::destroy();
			header("location: ".BASE_URL."LoginController");

		}
	}


	public static  function destroy(){
		session_destroy();
	}


}


?>