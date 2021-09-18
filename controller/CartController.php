<?php 
	 class CartController extends Controller{

		 	public function sepetEkle(){
	        $id=$_GET['id'];

	        $urunVarmi=false;
	        $urunAdet="";

	        if(!empty($_COOKIE['sepet'])){
	             foreach (@$_COOKIE['sepet'] as $key => $value) {
	                if($id==$key){
	                    $urunVarmi=true;
	                    $urunAdet=$value;
	                } 
	            }
	        }
	        


	        if($urunVarmi){

	             $urunAdet++;       
	             setcookie('sepet['.$id.']',"",time()-1); //cookie temizle 
	             setcookie('sepet['.$id.']',$urunAdet,time()+60*60*24); //yeni adeti ver

	        }else{
	            setcookie('sepet['.$id.']',1,time()+60*60*24);
	        }
	        

	         $this->geriDon();
	    }


	    public function sepet(){
	        $urunler=array();
	        $adetler=array();
	        if(!empty($_COOKIE['sepet'])){
	             foreach (@$_COOKIE['sepet'] as $key => $value) {
	                $urunler[]=$this->model->getUrun($key);   
	                $adetler[]=$value;
	            }
	        }
	       
	    
	        $this->view->sayfa_goster("sepet.php",[$urunler,$adetler]);
	    }

	    public  function sepetSil(){
	        $id=$_GET['id'];
	        setcookie('sepet['.$id.']',"",time()-1); //cookie temizle 
	        
	        $this->geriDon();
	        
	    }

	    public function sepetTemizle(){
	       
	         foreach ($_COOKIE['sepet'] as $key => $value) {
	                setcookie('sepet['.$key.']',"",time()-1);
	            }
	         $this->geriDon();
	    }


	    public function odemeTamamla(){

	         foreach ($_COOKIE['sepet'] as $key => $value) {
	            $sepetdeger.=$key.":".$value.",";      
	         }     
	    
	        $urunfiltre=$this->model->odemeyiTamamla($sepetdeger);
	       
	       $this->sepetTemizle();
	       $this->geriDon();
	    }

	}
 ?>