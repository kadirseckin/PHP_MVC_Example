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
 
}

?>