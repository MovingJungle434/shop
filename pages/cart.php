<?php
require_once("../include/db.php");
session_start();

if (isset($_REQUEST['id'])) {
    if (isset($_SESSION["shop_cart"])) {
        $array_shop_car = array_column($_SESSION['shop_cart'], 'id');
        if (!in_array($_REQUEST['id'], $array_shop_car)) {
            $count = count($_SESSION["shop_cart"]);
            $item = array(
                "id" => $_REQUEST["id"],
                "name" => $_REQUEST["name"],
                "price" => $_REQUEST["price"],
                "image" => $_REQUEST["image"],
                "amount" => $_REQUEST["amount"]
            );
            $_SESSION["shop_cart"][$count] = $item;
        }
    } else {
        $item = array(
            "id" => $_REQUEST["id"],
            "name" => $_REQUEST["name"],
            "price" => $_REQUEST["price"],
            "image" => $_REQUEST["image"],
            "amount" => $_REQUEST["amount"]
        );
        $_SESSION["shop_cart"][0] = $item;
    }
}
if (isset($_REQUEST['action'])) {
    if ($_REQUEST['action'] == 'delete') {
        foreach ($_SESSION['shop_cart'] as $key => $goods) {
            if ($goods['id'] == $_REQUEST['id']) {
                unset($_SESSION['shop_cart'][$key]);
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("../include/head.php") ?>
</head>

<body>
    <?php
    require_once('../include/header.php'); ?>
    <div class="cart_all container">
        <div class="cart_item">
            <?php if (isset($_SESSION['shop_cart'])) {
                foreach ($_SESSION['shop_cart'] as $goods) {
                    ?>
                    <div class="container goods__info">
                        <div class="goods__info_img"><img src="<?php echo $goods['image'] ?>" alt=""></div>

                        <div class="goods__info_about">
                            <h1>
                                <?php echo $goods['name'] ?>
                            </h1>
                            <p>
                                <?php echo $goods['price'] ?> ₴
                            </p>
                            <div>
                                <a href="/pages/cart.php?action=delete&id=<?php echo $goods['id'] ?>" class="btn">Delete</a>
                                <a class="btn" href="/">Back</a>
                            </div>

                        </div>
                    </div>
                <?php }
            } ?>
        </div>
        <form class="form" action="/pages/send_order.php" method="post">
            <p class="title">Form</p>
            <p class="message">make your order</p>
            <div class="flex">
                <label>
                    <input required="" placeholder="" type="text" class="input" name="firstname">
                    <span>Firstname</span>
                </label>

                <label>
                    <input required="" placeholder="" type="text" class="input" name="lastname">
                    <span>Lastname</span>
                </label>
            </div>
            <label>
                <input required="" placeholder="" type="email" class="input" name="email">
                <span>Email</span>
            </label>
            <label>
                <input required="" placeholder="" type="tel" class="input" name="number">
                <span>Number</span>
            </label>
            <label>
                <input required="" placeholder="" type="text" class="input" name="adress">
                <span>Adress</span>
            </label>
            <button class="submit">Submit</button>
        </form>
    </div>
    <?php require_once('../include/script.php') ?>
</body>

</html>