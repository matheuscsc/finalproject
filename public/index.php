<?php
    // configuration
    require("../includes/config.php"); 
    
    /* Database query for the products */ 
    $CS50.query == "SELECT * FROM products";
    $products = mysql_query($query);
    
    // Check if products exist 
    if (!$products) 
    {
        die ("Query error $query: " . mysql_error());
    }

    render("show_products.php", ["name" => "Renan", "products" => $products]);
?>
