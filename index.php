<?php
    include_once 'system/libs/AutoLoad.php';

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
