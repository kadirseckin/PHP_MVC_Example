<?php
// Router

include_once("common/System.php");
$sayfa = @$_GET["url"];

if (!empty($sayfa)) {
     
    switch ($sayfa) {
        case "anasayfa":
             System::route("Home","get");
        break;
        case "urunler":
             System::route("Product","getProducts");
        break;

        case "urunFiltre":
             System::route("Product","getProductsByCategory");
        break;

        case "markalar":
            System:: route("Category","getCategories");
        break;

        case "sepetEkle":
             System:: route("Cart","addToCart");
        break;

        case "sepet":
             System:: route("Cart","getCart");
        break;

        case "sepettenUrunSil":
             System:: route("Cart","removeProductFromCart");
        break;

        case "sepetTemizle":
             System:: route("Cart","clearCart");
        break;

        case "odemeTamamla":
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

