<?php
require("../includes/config.php"); 
if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("cart_form.php", ["title" => "Cart"]);
    }
    ?>
