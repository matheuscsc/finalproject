<h1><?php //echo("Meu nome é " . $name); ?></h1>
<table class="table table-striped">

    <thead>
        <tr>
            <th>Name</th>
            <!-- <th>Size</th>-->
            <th>Price</th>
        </tr>
    </thead>

    <tbody>

        <?php foreach ($products as $product): ?>

            <tr>
                <td><?= $product["name"] ?></td>
                <!-- <td><?= $product["size"] ?></td>-->
                <td><?= $product["price"] ?></td>
            </tr>

        <?php endforeach ?>
    </tbody>

</table>











