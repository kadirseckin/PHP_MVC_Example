<?php 

	class CategoryController extends Controller{
        
        public function markalar(){     
            $urunler=$this->model->getMarkalar();
            $this->view->sayfa_goster("markalar.php",$urunler);
        }
    }

 ?>