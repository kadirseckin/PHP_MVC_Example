<?php 
class Router{

	public function __construct(){
		$url = @$_GET["url"];

		if (!empty($url)) {
		     
		    switch ($url) {
		        case "home":
		             $this->route("Home","get");
		        break;
		        case "products":
		             $this->route("Product","getProducts");
		        break;

		        case "productsByCategory":
		             $this->route("Product","getProductsByCategory");
		        break;

		        case "categories":
		            $this-> route("Category","getCategories");
		        break;

		        case "addToCart":
		             $this-> route("Cart","addToCart");
		        break;

		        case "cart":
		             $this-> route("Cart","getCart");
		        break;

		        case "removeFromCart":
		             $this-> route("Cart","removeProductFromCart");
		        break;

		        case "clearCart":
		             $this-> route("Cart","clearCart");
		        break;

		        case "completePayment":
		             $this-> route("Cart","completeThePayment");
		        break;
		        
		        default:
		             $this-> route("Home","get");
		        break;
		    }
		}

		else {
		        $this-> route("Home","get");
		}
	}


	private function route($controllerName,$controllerFunction){
        $controllerFile=$controllerName."Controller.php";
        $controllerClass=$controllerName."Controller";

        include_once 'app/controller/'.$controllerFile;
        $controller=new $controllerClass();
        $controller->$controllerFunction();
    }
}

 ?>