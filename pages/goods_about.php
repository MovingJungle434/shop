<?php
require_once("../include/db.php");
$id = $_REQUEST["id"];
$goods_info = mysqli_query($esql, "SELECT * FROM `goods` WHERE `id`='$id'");
$end_goods_info = $goods_info->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("../include/head.php") ?>
</head>

<body>
    <?php
    require_once("../include/header.php");
    ?>
    <div class="container goods__info">
        <div class="goods__info_img"><img src="<?php echo $end_goods_info['image'] ?>" alt=""></div>

        <div class="goods__info_about">
            <h1>
                <?php echo $end_goods_info['name'] ?>
            </h1>
            <p>
                <?php echo $end_goods_info['price'] ?> ₴
            </p>
            <div>
                <button class="btn">Buy</button>
                <a class="btn" href="/">Back</a>
            </div>

        </div>
    </div>
    <?php require_once('../include/script.php')?>
</body>

</html>