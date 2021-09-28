<?php 

class View{

    public function getPage($src,$data=""){

        include_once 'app/view/header.php';
        include_once 'app/view/'.$src;
        include_once 'app/view/footer.php';
  }
}

?>