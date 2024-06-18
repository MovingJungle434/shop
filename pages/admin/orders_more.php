<?php require_once("../../include/db.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("../../include/head.php"); ?>
</head>

<body>
    <?php require_once("../../include/admin_header.php"); 
    $id_orders_more = $_REQUEST['id'];
    $select_orders_more = mysqli_query($esql,"SELECT * FROM `orders` WHERE id = '$id_orders_more'");
    $resalt = $select_orders_more->fetch_assoc();
    ?>
    <section class="orders_more">
        <div class="container">

            <p><strong>Имя:</strong> <?php echo $resalt['firstname']; ?></p>
            <p><strong>Фамилия:</strong> <?php echo $resalt['lastname']; ?></p>
            <p><strong>Email:</strong> <?php echo $resalt['email']; ?></p>
            <p><strong>Адрес:</strong> <?php echo $resalt['adress']; ?></p>

            <?php 
            $ded = json_decode($resalt['order'], true); 
            foreach($ded as $babka){
                ?>
                <img src="<?php echo $babka['image']?>" alt="" class="orders_more_img">
                <p>Имя товара: <?php echo $babka['name'] ?></p>
                <p>Стоимость: <?php echo $babka['price'] ?></p>
                <p>Количество: <?php echo $babka['amount'] ?></p>
                <?php } ?>

        </div>
    </section>
</body>

</html>