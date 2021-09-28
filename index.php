<?php
     function loadLibraries($className){
          $fileName='system/libs/'.$className.'.php';
          if(file_exists($fileName)){
               include_once $fileName;
          }     
     }
     function loadModals($className){
          $fileName='app/model/'.$className.'.php';
          if(file_exists($fileName)){
               include_once $fileName;
          }     
     }
     
     spl_autoload_register('loadLibraries');
     spl_autoload_register('loadModals');

     $router=new Router([
          ["home","Home","get"],
          ["products","Product","getProducts"],
          ["productsByCategory","Product","getProductsByCategory"],
          ["categories","Category","getCategories"],
          ["addToCart","Cart","addToCart"],
          ["cart","Cart","getCart"],
          ["removeFromCart","Cart","removeProductFromCart"],
          ["clearCart","Cart","clearCart"],
          ["completePayment","Cart","completeThePayment"]   
     ]);
?>
