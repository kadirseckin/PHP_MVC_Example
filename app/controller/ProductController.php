<?php 
	
	class ProductController extends Controller{

		private $categoryModel;
		private $productModel;

		public function __construct(){
			parent::__construct();
			$this->productModel=new ProductModel();
			$this->categoryModel=new CategoryModel();
		}
		
		public function getProducts(){     
	        $products=$this->productModel->getProducts();
	        $categories=array();

	        foreach ($products as $product) {
	        	$categories[] = $this->categoryModel->
	        		getCategoryNameByCategoryID($product['category_id']);
	        }

	        $this->view->getPage("products.php",[$products,$categories]);
	    }   

		public function getProductsByCategory(){     
	        $products=$this->productModel->getProductsByCategory($_GET['id']);
	        $categories=$this->categoryModel->getCategoryNameByCategoryID($_GET['id']);
	        $this->view->getPage("productsByCategory.php",[$products,$categories]);
	    }
	}


 ?>