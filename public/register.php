<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // check if username, passord, and confirmation were written.
        if ($_POST["username"] == NULL)
        {
            apologize("You must provide your username!");
        }
        else if ($_POST["email"] == NULL)
        {
            apologize("You must provide your email.");
        }
        else if ($_POST["password"] == NULL)
        {
            apologize("You must provide your password.");
        }
        else if ($_POST["confirmation"] == NULL)
        {
            apologize("You must provide your confirmation.");
        }
        // check if password equals confirmation.
        else if ($_POST["password"] != $_POST["confirmation"]) 
        {
            apologize("Your password and confirmation must be equal");
        }
        // use the query function and then check if the username already exists.
        $result = CS50::query("INSERT IGNORE INTO users (username, email, password) VALUES(?, ?, ?)", $_POST["username"], $_POST["email"], password_hash($_POST["password"], PASSWORD_DEFAULT));
        if ($result == false)
        {
            apologize("Insert failed!");
        }
        // login the user.
        $rows = CS50::query("SELECT LAST_INSERT_ID() AS id");
        $id = $rows[0]["id"];
        $_SESSION["id"] = $id;
        redirect("index.php");
    }

?>