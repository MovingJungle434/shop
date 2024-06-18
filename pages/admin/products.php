<?php
require_once('../../include/db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("../../include/head.php") ?>
</head>

<body>
    <?php require_once('../../include/admin_header.php'); ?>
    <div class="products__button">
        <a href="/pages/admin/add_products.php" class="btn">add product</a>
    </div>

    <section class="product">
        <div class="container">
            <?php
            $products = mysqli_query($esql, "SELECT * FROM `goods`");
            foreach ($products as $product) {
                ?>
                <div class="products">
                    <p>
                        <?php echo $product['id'] ?>
                    </p>
                    <p>
                        <?php echo $product['name'] ?>
                    </p>
                    <div>
                        <a href="/pages/admin/edit.php?id=<?php echo $product["id"] ?>" class="btn">edit</a>
                        <a href="/pages/admin/delete.php?id=<?php echo $product["id"] ?>" class="btn">delete</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
    <?php require_once('../../include/script.php')?>
</body>

</html>