<?php
    // configuration
    require("../includes/config.php"); 
    
    /* Database query for the products */ 
    $products = CS50::query("SELECT * FROM products");

    render("show_products.php", ["name" => "Renan", "products" => $products]);
?>
