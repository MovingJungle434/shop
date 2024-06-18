<?php
require_once("../include/db.php")
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once("../include/head.php") ?>
</head>
<body>
    <?php 
    require_once("../include/admin_header.php")
    ?>
    <section class="info_battons">
        <div class="container">
            <div class="blue box">
                <div class = "box__icon">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div>
                    <h1>USERS</h1>
                    <?php $users_count = mysqli_query($esql,"SELECT COUNT(*) FROM `users`"); 
                    $users_count_resault = $users_count -> fetch_row();?>
                    <a href="/pages/admin/users.php"><?php echo $users_count_resault[0] ?> ></a>
                </div>
            </div>
            <div class="red box">
                <div class = "box__icon">
                    <i class="fa-solid fa-shop"></i>
                </div>
                <div>
                    <h1>PRODUCTS</h1>
                    <?php $product_count = mysqli_query($esql,"SELECT COUNT(*) FROM `goods`");
                    $product_count_resault = $product_count -> fetch_row(); ?>
                    <a href="/pages/admin/products.php"> <?php echo $product_count_resault[0] ?> ></a>
                </div>
            </div>
            <div class="green box">
                <div class = "box__icon">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <div>
                    <h1>ORDERS</h1>
                    <?php $order_count = mysqli_query($esql,"SELECT COUNT(*) FROM `orders`"); 
                    $order_count_resault = $order_count -> fetch_row();?>
                    <a href="/pages/admin/orders.php"> <?php echo $order_count_resault[0] ?> ></a>
                </div>
            </div>
        </div>
    </section>

    <?php require_once('../include/script.php')?>
</body>
</html>