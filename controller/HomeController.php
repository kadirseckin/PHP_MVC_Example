<?php 

	class HomeController extends Controller{
		
		 public function anasayfa(){
	        $randomUrunler=$this->model->randomUrunler();
	        $this->view->sayfa_goster("anasayfa.php",$randomUrunler);
	    }
	}

 ?>