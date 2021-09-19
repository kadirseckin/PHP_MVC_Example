<?php 
	
	include_once 'model/ProductModel.php';
	include_once 'model/CategoryModel.php';

	class ProductController extends Controller{

		private $categoryModel;

		public function __construct(){
			parent::__construct();
			$this->model=new ProductModel();
			$this->categoryModel=new CategoryModel();
		}
		
		public function getProducts(){     
	        $products=$this->model->getProducts();
	        $categories=array();

	        foreach ($products as $product) {
	        	$categories[] = $this->categoryModel->
	        		getCategoryNameByCategoryID($product['marka_id']);
	        }

	        $this->view->getPage("products.php",[$products,$categories]);
	    }   

		public function getProductsByCategory(){     
	        $products=$this->model->getProductsByCategory($_GET['id']);
	        $categories=$this->categoryModel->getCategoryNameByCategoryID($_GET['id']);
	        $this->view->getPage("productsByCategory.php",[$products,$categories]);
	    }
	}


 ?>