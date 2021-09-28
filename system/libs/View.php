<?php 

include_once 'app/controller/CartController.php'; //for cart count in header.

class View{
    public function getPage($src,$data=""){

        include_once 'app/view/header.php';
        include_once 'app/view/'.$src;
        include_once 'app/view/footer.php';
  }
}

?>