<?php


class Category extends MainController{
	
function __construct()
	{
 	parent:: __construct();
 	Session::authChack();
	}


public function categoryList(){

		$data=array();
		$catTable='category';
		$catModel=$this->load->model('catModel');
		$data['categories']=$catModel->catList($catTable);

		$this->load->view("backEnd/header");
		$this->load->view("backEnd/sitebar");

		$this->load->view("backEnd/category/catManage",$data);

		$this->load->view("backEnd/footer");

	}




	public function catById(){

		$data=array();
		$id=1;
		$tableName="category";
		$catModel=$this->load->model("catModel");
		$data['catById']=$catModel->catById($tableName,$id);
		$this->load->view("catById",$data);

	}

	public function categoryAdd(){
		$this->load->view("backEnd/header");
		$this->load->view("backEnd/sitebar");

		$this->load->view("backEnd/category/categoryAdd");

		$this->load->view("backEnd/footer");

	}

     public function insertCatagory(){
     	$category  	= $_POST['category'];
     	$title		= $_POST['title'];
		$data=array(
			'category' 	=> $category,
			'title'		=> $title
		);
		$tableName="category";
		$catModel=$this->load->model("catModel");
		$result=$catModel->insertCat($tableName,$data);

		$mdata=array();
		if ($result==1) {
			$mdata['msg'] = 'Category Data Inserted successfully';
		} else {
			$mdata['msg'] = 'Category Data Not Inserted';
		}
		//$url=BASE_URL."Category/categoryAdd?msg=".urlencode(serialize($mdata));
		header("location:".BASE_URL."Category/categoryAdd");

	}

	public function editCatById($id=NULL){
		$data=array();
		$tableName="category";
		$catModel=$this->load->model("catModel");
		$data['category']=$catModel->catById($tableName,$id);

		$this->load->view("backEnd/header");
		$this->load->view("backEnd/sitebar");

		$this->load->view("backEnd/category/editCategory",$data);

		$this->load->view("backEnd/footer");

	}

	public function updateCatagory(){
		$category   = $_POST['category'];
     	$title 		= $_POST['title'];
     	$cond 		= $_POST['editId'];

		$data=array(
			'category'=>$category,
			'title'=>$title
		);

		$tableName="category";
		$catModel=$this->load->model("catModel");
		$data['catById']=$catModel->catUpdate($tableName,$data,$cond);

	header("location: ".BASE_URL."Category/categoryList");


	}

	public function deleteCatagory($id=NULL){

		
		$cond=$id;
		$tableName="category";
		$catModel=$this->load->model("catModel");
		$data['cat']=$catModel->catDelete($tableName,$cond);

		
		
	header("location: http://localhost/mvc_sj1/index.php?url=Category/categoryList");


	}

}


?>