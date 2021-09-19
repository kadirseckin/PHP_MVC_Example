<?php 
    
    include_once 'model/CategoryModel.php';

	class CategoryController extends Controller{
        
        public function __construct(){
            parent::__construct();
            $this->model=new CategoryModel();
        }    

        public function getCategories(){     
            $categories=$this->model->getCategories();
            $this->view->getPage("categories.php",$categories);
        }
    }

 ?>