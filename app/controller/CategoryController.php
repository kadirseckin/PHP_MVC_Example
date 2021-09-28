<?php 
    
	class CategoryController extends Controller{
        
        private $categoryModel;

        public function __construct(){
            parent::__construct();
            $this->categoryModel=new CategoryModel();
        }    

        public function getCategories(){     
            $categories=$this->categoryModel->getCategories();
            $this->view->getPage("categories.php",$categories);
        }
    }

 ?>