<?php

class Controller{

    protected $view;

    public function __construct(){
        $this->view=new View();
    }

    protected function redirectBack(){
        $url=$_SERVER['HTTP_REFERER'];
        header("Location:$url");
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