<?php 

class View{
    function sayfa_goster($src,$veriler=""){
      include_once 'header.php';
      include_once  $src;
      include_once 'footer.php';
  }
}

?>