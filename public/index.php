<?php
    // configuration
    require("../includes/config.php"); 
    
    /* Database query for the products */ 
    $products = CS50::query("SELECT * FROM product");
//<<<<<<< HEAD
//=======
    
    // Check if products exist 
    if (!$products) 
    {
        //die ("Query error $query: " . mysql_error());
    }
//>>>>>>> Adding stripe

    render("show_products.php", ["products" => $products]);
?>
