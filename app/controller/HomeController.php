<?php 
	
	class HomeController extends Controller{

		private $categoryModel;
		private $productModel;

		public function __construct(){
			parent::__construct();
			$this->productModel=new ProductModel();
			$this->categoryModel=new CategoryModel();
		}
		
		 public function get(){
	        $randomProducts=$this->productModel->randomProducts();
	        $categories=array();

	        foreach ($randomProducts as $product) {
	        	$categories[] = $this->categoryModel->
	        		getCategoryNameByCategoryID($product['category_id']);
	        }

	        $this->view->getPage("home.php",[$randomProducts,$categories]);
	    }
	}

 ?>