<?php 
	
  include_once 'controller/controller.php'; 

  class System{
      public static function route($controllerName,$controllerFunction){
        $controllerFile=$controllerName."Controller.php";
        $controllerClass=$controllerName."Controller";

        include_once 'controller/'.$controllerFile;
        $controller=new $controllerClass();
        $controller->$controllerFunction();
    }
  }
 ?>