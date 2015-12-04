<?php
    $uid = $_GET["user_id"];
    $pid = $_GET["product_id"];

    // vai no banco de dados, verifica se existe o produto e se QTD > 0

// Cobra do usuario usando Stripe (VITAO)

// Cria uma compra pro usuario rola
    $product = CS50 :: query ("SELECT * FROM T_PRODUTO WHERE id = ?", $pid);
    
    if (count($product) == 0)
    {
        apologize("Could not find the product")
    }
    
    $checar_estoque = CS50 :: query ("SELECT estoque FROM T_PRODUTO where id = ?", $pid)
    
    if ($checar_estoque <= 0)
    {
        apologize ("There is no sufficient quantity")
    }
    
    // Cobra do usuario usando Stripe (VITAO)

    // Cria uma compra pro usuario
    CS50 :: query("UPDATE T_PRODUTO SET estoque = estoque - 1 WHERE id = ?", $pid);
    CS50 :: query ("INSERT INTO T_COMPRAS(ID_USUARIO, ID_PRODUTO) VALUES(?,?)" $pid, $uid);
?>
