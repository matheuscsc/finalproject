<!DOCTYPE html>

<html>

    <head>

        <!-- http://getbootstrap.com/ -->
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>

        <link href="/css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>Harvard Model Uniter Nations Store <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Harvard Model Uniter Nations Store</title>
        <?php endif ?>

        <!-- https://jquery.com/ -->
        <script src="/js/jquery-1.11.3.min.js"></script>

        <!-- http://getbootstrap.com/ -->
        <script src="/js/bootstrap.min.js"></script>

        <script src="/js/scripts.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                <div>
                    <a href="/"><img alt="Harvard Model Uniter Nations Store" src="/img/hmunlogo.png"/></a>
                </div>
                <?php if (!empty($_SESSION["id"])): ?>
                    <ul class="nav nav-pills">
                        <li><a href="logout.php"><strong>Log Out</strong></a></li>
                          <li><a href="cart.php"><strong>Cart</strong></a></li>
                    </ul>
                <?php endif ?>
            </div>

            <div id="middle">
