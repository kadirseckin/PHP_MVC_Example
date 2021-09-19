<?php
// Router

include_once("common/System.php");
$sayfa = @$_GET["url"];

if (!empty($sayfa)) {
     
    switch ($sayfa) {
        case "home":
             System::route("Home","get");
        break;
        case "products":
             System::route("Product","getProducts");
        break;

        case "productsByCategory":
             System::route("Product","getProductsByCategory");
        break;

        case "categories":
            System:: route("Category","getCategories");
        break;

        case "addToCart":
             System:: route("Cart","addToCart");
        break;

        case "cart":
             System:: route("Cart","getCart");
        break;

        case "removeFromCart":
             System:: route("Cart","removeProductFromCart");
        break;

        case "clearCart":
             System:: route("Cart","clearCart");
        break;

        case "completePayment":
             System:: route("Cart","completeThePayment");
        break;
        
        default:
             System:: route("Home","get");
        break;
    }
}

else {
        System:: route("Home","get");
}

?>

