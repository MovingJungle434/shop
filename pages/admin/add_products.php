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
    <section>
        <div class="container">
            <form action="add_products_creater.php" enctype="multipart/form-data" method="post"
                class="add_products_input">
                <div class="form__group field">
                    <input type="input" name="name" class="form__field" placeholder="Name of probuct" required="">
                    <label for="name" class="form__label">Name of product</label>
                </div>
                <div class="number">
                    <label for="myRange" class="number__label">Price</label>
                    <input id="myRange" name="price" class="slider" type="number">
                </div>
                <select name="category" id="category" class="category">
                    <option value="men">Men</option>
                    <option value="women">Women</option>
                </select>
                <div>
                    <label class="custum-file-upload" for="file">
                        <div class="text">
                            Click to upload image
                        </div>
                        <input type="file" id="file" name="file">
                    </label>
                </div>
                <div class="admin__btn">
                    <button class="btn">Create</button>
                </div>
            </form>
        </div>
        <?php require_once('../../include/script.php')?>
</body>

</html>
</section>