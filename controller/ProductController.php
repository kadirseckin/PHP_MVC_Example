<?php 
	
	class ProductController extends Controller{
		
		public function urunler(){     
	        $urunler=$this->model->getUrunler();
	        $this->view->sayfa_goster("urunler.php",$urunler);
	    }   

		public function urunFiltre(){     
	        $urunfiltre=$this->model->getUrunFiltre($_GET['id']);
	        $this->view->sayfa_goster("urunFiltre.php",$urunfiltre);
	    }
	}


 ?>