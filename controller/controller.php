<?php
//base controller

include_once "view/view.php";
include_once "model/model.php";

class Controller{

    protected $model;
    protected $view;

    public function __construct(){
        $this->model=new Model();
        $this->view=new View();
    }

    protected function redirectBack(){
        $gelenUrl=$_SERVER['HTTP_REFERER'];
        header("Location:$gelenUrl");
    }
   
}

?>