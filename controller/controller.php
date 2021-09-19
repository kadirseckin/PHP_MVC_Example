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

    public static function getCartCount(){
        $cartCounter=0;

        if(!empty($_COOKIE['cart'])){
             foreach (@$_COOKIE['cart'] as $value) {
                $cartCounter++;    
            }
        }

        return $cartCounter;     
    }
   
}

?>