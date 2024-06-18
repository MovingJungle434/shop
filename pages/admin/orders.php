<?php require_once("../../include/db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("../../include/head.php"); ?>
</head>
<body>
    <?php require_once("../../include/admin_header.php"); ?>
    <section class="order">
        <div class="container">
            <?php $orders = mysqli_query($esql,"SELECT * FROM `orders`");
            foreach($orders as $order){
                ?>
            <div>
                <p>Заказ #<?php echo $order["id"] ?></p>
                <a href="orders_more.php?id=<?php echo $order['id']?>" class="btn">Подробней</a>
            </div>
            <hr>
            <?php } ?> 
        </div>
    </section>
</body>
</html>