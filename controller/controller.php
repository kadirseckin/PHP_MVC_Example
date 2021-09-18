<?php
//controller

include_once "view/view.php";
include_once "model/model.php";

class Controller{

    protected $model;
    protected $view;

    public function __construct($model=null){
        if($model==null){
            $this->model=new Model();
        }else{
            $this->model=new $model();
        }
        

        $this->view=new View();
    }

    protected function geriDon(){
        $gelenUrl=$_SERVER['HTTP_REFERER'];
        header("Location:$gelenUrl");
    }
   
}

?>