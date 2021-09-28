<?php 
class Router{

	public function __construct($routes){
		$url = @$_GET["url"];
		$this->route($url,$routes);	
	}

	private function route($url,$routes){
		if (!empty($url)) {
		       foreach ($routes as $key => $value) {
		       		if($value[0]==$url){
		       			$this->run($value[1],$value[2]);
		       			break;
		       		}else if($value[0]!==$url && count($routes)==($key+1)){
		       			$this->run("Home","pageNotFound"); //if url is not exists
		       		}
		       }
		}

		else {
		        $this-> run("Home","get"); //if url is empty
		}
	}


	private function run($controllerName,$controllerFunction){
        $controllerFile=$controllerName."Controller.php";
        $controllerClass=$controllerName."Controller";

        include_once 'app/controller/'.$controllerFile;
        $controller=new $controllerClass();
        $controller->$controllerFunction();
    }
}

 ?>