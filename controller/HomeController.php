<?php 

	include_once 'model/ProductModel.php';
	include_once 'model/CategoryModel.php';
	
	class HomeController extends Controller{

		private $categoryModel;

		public function __construct(){
			parent::__construct();
			$this->model=new ProductModel();
			$this->categoryModel=new CategoryModel();
		}
		
		 public function get(){
	        $randomProducts=$this->model->randomProducts();
	        $categories=array();

	        foreach ($randomProducts as $product) {
	        	$categories[] = $this->categoryModel->
	        		getCategoryNameByCategoryID($product['category_id']);
	        }

	        $this->view->getPage("home.php",[$randomProducts,$categories]);
	    }
	}

 ?>