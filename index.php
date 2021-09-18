<?php
// Router Sayfası

include_once("system/functions.php");

$sayfa = @$_GET["url"];

if (!empty($sayfa)) {

    switch ($sayfa) {
        case "anasayfa":
             executeController("Home","anasayfa");
        break;
        case "urunler":
             executeController("Product","urunler");
        break;

        case "urunFiltre":
             executeController("Product","urunFiltre");
        break;

        case "markalar":
             executeController("Category","markalar");
        break;

        case "sepetEkle":
             executeController("Cart","sepetEkle");
        break;

        case "sepet":
             executeController("Cart","sepet");
        break;

        case "sepetSil":
             executeController("Cart","sepetSil");
        break;

        case "sepetTemizle":
             executeController("Cart","sepetTemizle");
        break;

        case "odemeTamamla":
             executeController("Cart","odemeTamamla");
        break;
        
        default:
             executeController("Home","anasayfa");
        break;
    }
}

else {
        executeController("Home","anasayfa");
}

?>

