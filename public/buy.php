<?php
    $uid = $_GET["user_id"];
    $pid = $_GET["product_id"];

    // vai no banco de dados, verifica se existe o produto e se QTD > 0

// Cobra do usuario usando Stripe (VITAO)

// Cria uma compra pro usuario rola
    $product = CS50 :: query ("SELECT * FROM T_PRODUTO WHERE id = ?", $pid);
    $rows = CS50::query("SELECT * FROM T_PRODUTO WHERE id = ?", $pid);
    
    if (count($rows) == 0)
    {
        apologize("Could not find the product");
    }
    
    $check_rows = $rows["estoque"]
    
    if($check_rows <= 0)
    {
        apologize("There is no sufficient quantity");
    }
    
    // Cobra do usuario usando Stripe (VITAO)
    
      require_once('./config.php');
    
      $token  = $_POST['stripeToken'];
    
      $customer = \Stripe\Customer::create(array(
          'email' => 'customer@example.com',
          'card'  => $token
      ));
    
      $charge = \Stripe\Charge::create(array(
          'customer' => $customer->id,
          'amount'   => 5000,
          'currency' => 'usd'
      ));
    
      echo '<h1>Successfully charged $50.00!</h1>';
    

    // Cria uma compra pro usuario
<<<<<<< HEAD
    CS50 :: query("UPDATE T_PRODUTO SET estoque = estoque - 1 WHERE id = ?", $pid);
    CS50 :: query ("INSERT INTO T_COMPRAS(ID_USUARIO, ID_PRODUTO) VALUES(?,?)" $pid, $uid);
?>
=======
    CS50::query("UPDATE T_PRODUTO SET estoque = estoque - 1 WHERE id = ?", $pid);
    CS50::query("INSERT INTO T_COMPRAS(ID_USUARIO, ID_PRODUTO) VALUES(?,?)", $uid, $pid);
?>
>>>>>>> 3rd commit
