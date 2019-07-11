<?php
/**
 * 
 */ 
 /* base url set with "index.php?url=" becouse my localhost has somethink problem for .htaccess */
	
	define("BASE_URL", "http://localhost/mvc_sj1/index.php?url=");

		

	// database connection
	define("DSN",	  "mysql:dbname=mvc1; host=localhost");
	define("DB_USER", "root");
	define("DB_PASS", "");
	
 	class Config{

	public  $dsn = DSN;
	public  $user= DB_USER;
	public  $pass= DB_PASS;
	
	
}


?>