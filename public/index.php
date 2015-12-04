<?php
    // configuration
    require("../includes/config.php"); 
    
    /* Database query for the products */ 
    $products = CS50::query("SELECT * FROM products");
    
    // Check if products exist 
    if (!$products) 
    {
        die ("Query error $query: " . mysql_error());
    }

    render("show_products.php", ["name" => "Renan", "products" => $products]);
?>
