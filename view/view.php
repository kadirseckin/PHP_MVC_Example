<?php 

class View{

    public function getPage($src,$data=""){

        include_once 'header.php';
        include_once  $src;
        include_once 'footer.php';
  }
}

?>