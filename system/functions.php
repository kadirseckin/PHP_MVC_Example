<?php 
	
    include_once 'controller/controller.php';	
  
     function executeController($controllerName,$controllerFunction){
        $controllerFile=$controllerName."Controller.php";
        $controllerClass=$controllerName."Controller";

        include_once 'controller/'.$controllerFile;
        $controller=new $controllerClass();
        $controller->$controllerFunction();
    }
 ?>