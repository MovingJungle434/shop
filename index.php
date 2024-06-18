<?php
require_once("include/db.php")
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("include/head.php") ?>
</head>

<body>
    <div class="loader_main" id="loader">
        <div>
            <svg style="position: absolute; width: 0; height: 0;">
                <filter id="goo">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="12"></feGaussianBlur>
                    <feColorMatrix values="0 0 0 0 0 
                0 0 0 0 0 
                0 0 0 0 0 
                0 0 0 48 -7"></feColorMatrix>
                </filter>
            </svg>
            <div class="loader"></div>
        </div>
        <div id="loading-percent" class="loader_procent">0%</div>
    </div>
    <?php
    session_start();
    ?>
    <?php
    require_once("include/header.php");

    if (isset($_REQUEST["category"])) {
        $category = $_REQUEST["category"];
    } else {

    }
    if (isset($category)) {
        if ($category == "men") {
            $products = mysqli_query($esql, "SELECT * FROM `goods` WHERE `category` = '$category'");
        } else if ($category == "women") {
            $products = mysqli_query($esql, "SELECT * FROM `goods` WHERE `category` = '$category'");
        }
    } else {
        $products = mysqli_query($esql, "SELECT * FROM `goods`");
    }
    ?>

    <section class="banner">
        <div class="container">
            <h1>CHOOSE WHAT CLOTHES DO YOU NEED</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit Illum quod rem quis. Alias reiciendis,
                voluptatum cumque non aspematur iusto quod ratione et ab fuga qui. Recusandae atque
                doloribus nesciunt quaerat?</p>
            <div>
                <a href="/" class="btn">All</a>
                <a href="/?category=men" class="btn">Men</a>
                <a href="/?category=women" class="btn">Women</a>
            </div>
        </div>

    </section>

    <section class="goods">
        <div class="container">
            <h1>ALL GOODS</h1>
            <div class="wrap">
                <?php
                foreach ($products as $product) {
                    ?>
                    <div>
                        <img src="<?php echo $product['image'] ?>" alt="#">
                        <h2>
                            <?php echo $product['name'] ?>
                        </h2>
                        <p>
                            <?php echo $product['price'] ?>
                        </p>
                        <form action="pages/cart.php?id=<?php echo $product['id'] ?>" method="post">
                            <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                            <input type="hidden" name="name" value="<?php echo $product['name'] ?>">
                            <input type="hidden" name="price" value="<?php echo $product['price'] ?>">
                            <input type="hidden" name="image" value="<?php echo $product['image'] ?>">
                            <input type="hidden" name="amount" value="1">
                            <button class="btn">Buy</button>
                        </form>
                        <a href="pages/goods_about.php?id=<?php echo $product['id'] ?>" class="btn margin_top20">Info</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <?php require_once('include/script.php') ?>

</body>

</html>