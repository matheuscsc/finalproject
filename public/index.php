<?php
    // configuration
    require("../includes/config.php"); 
    
    $products = [];// vem do mysql
    
    render("show_products.php", ["name" => "Renan", "products" => $products]);
?>
