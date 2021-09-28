<?php 
	
	 class CartController extends Controller{

	 		private $productModel;
	 		private $cartModel;

	 		public function __construct(){
	 			parent::__construct();
	 			$this->cartModel=new CartModel();
	 			$this->productModel=new ProductModel(); 		
	 		}

		 	public function addToCart(){

		        $id=$_GET['id'];
		        $isProductExist=false;

		        if(!empty($_COOKIE['cart'])){
		             foreach (@$_COOKIE['cart'] as $key => $value) {
		                if($id==$key){
		                    $isProductExist=true;
		                    $productsCount=$value;
		                } 
		            }
		        }
		        

		        if($isProductExist){

		             $productsCount++;   
		             // wipe exist product from cart and incrase    
		             setcookie('cart['.$id.']',"",time()-1);
		             setcookie('cart['.$id.']',$productsCount,time()+60*60*24); 

		        }else{
		            setcookie('cart['.$id.']',1,time()+60*60*24);
		        }
		        

		         $this->redirectBack();
	    }


	    public function getCart(){
	        $products=array();
	        $counts=array();
	        if(!empty($_COOKIE['cart'])){
	             foreach (@$_COOKIE['cart'] as $key => $value) {
	                $products[]=$this->productModel->getProductByID($key);   
	                $counts[]=$value; 
	            }
	        }
	       
	    
	        $this->view->getPage("cart.php",[$products,$counts,self::getTotalPrice()]);
	    }

	    public  function removeProductFromCart(){
	        $id=$_GET['id'];
	        setcookie('cart['.$id.']',"",time()-1); //cookie temizle 
	        
	        $this->redirectBack();
	        
	    }

	    public function clearCart(){
	       
	         foreach ($_COOKIE['cart'] as $key => $value) {
	                setcookie('cart['.$key.']',"",time()-1);
	            }
	         $this->redirectBack();
	    }


	    public function completeThePayment(){
	    	
	    	$cartLog="";

	    	if(!empty($_COOKIE['cart'])){
	    		
	    		foreach (@$_COOKIE['cart'] as $key => $value) {
	            	$cartLog.=$key.":".$value.",";      
	        	}     
	    
		       $this->cartModel->completeThePayment($cartLog,self::getTotalPrice());
		       $this->clearCart();
	    	}

	    	$this->redirectBack();
	        
	    }

	    private function getTotalPrice(){
	    	$totalPrice=0;

	    	if(!empty($_COOKIE['cart'])){
	    		
	    		foreach (@$_COOKIE['cart'] as $productId => $productCount) {
	            	  $product=$this->productModel->getProductByID($productId);
	            	  $price=$product['price'];
	            	  $totalPrice+=($price*$productCount);
	        	}     
	    	}

	    	return $totalPrice;
	    }


	}
 ?>