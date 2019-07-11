
<?php
class Main{
	public function __construct(){

		$this->getUrl();
		$this->getController();
		$this->getMethod();
	}





	public $url;
	public $controllerName="Index";
	public $methodName="Index";
	public $controllerPath="apps/controllers/";

	
	public function getUrl(){

		$this->url=isset($_GET['url']) ? $_GET['url']:NULL;
		if($this->url != NULL){
			$this->url=rtrim($this->url,'/');
			$this->url=explode('/', filter_var($this->url, FILTER_SANITIZE_URL));
		}else{
			unset($this->url);
		}
	} 




	public function getController(){
	if(!isset($this->url[0])){
	include_once $this->controllerPath.$this->controllerName.".php";
	$this->controller = new $this->controllerName();

	}else{
		$this->controllerName=$this->url[0];
		$fileName= $this->controllerPath.$this->controllerName.".php";
			if (file_exists($fileName)) {
				include $fileName;
					if (class_exists($this->controllerName)) {
						$this->controller = new $this->controllerName();
					} else {
				header("location: http://localhost/mvc_sj1/index.php?url=adminBlogController");
					}
				
			} else {
			header("location: http://localhost/mvc_sj1/index.php?url=adminBlogController");
			}
			
	}
}



	public function getMethod(){

			if(isset($this->url[2])){
				$this->methodName = $this->url[1];
				if (method_exists($this->controller, $this->methodName)) {
 					 $this->controller->{$this->methodName}($this->url[2]);
				} else {
				header("location: http://localhost/mvc_sj1/index.php?url=adminBlogController");
				}
				
			}else{
				if (isset($this->url[1])) {
					$this->methodName = $this->url[1];
						if (method_exists($this->controller, $this->methodName)) {
 						 $this->controller->{$this->methodName}();
						} else {
			header("location: http://localhost/mvc_sj1/index.php?url=adminBlogController");
						}
				}else{
					if (method_exists($this->controller, $this->methodName)) {
 						 $this->controller->{$this->methodName}();
						} else {
			header("location: http://localhost/mvc_sj1/index.php?url=adminBlogController");
						}
				}
			}

	}



}
?>