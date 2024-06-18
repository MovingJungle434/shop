<?php
require_once ('../../include/db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once ("../../include/head.php") ?>
</head>

<body>
    <?php require_once ('../../include/admin_header.php'); ?>
    <section>
        <div class="container">
            <?php
            $id = $_REQUEST['id'];
            $product = mysqli_query($esql, "SELECT * FROM `goods` WHERE `id` = '$id'");
            $product1 = mysqli_fetch_array($product);
            ?>
            <form action="edit_creater.php" enctype="multipart/form-data" method="post" class="add_products_input">
                <input type="hidden" value=" <?php echo $product1["id"] ?>" name="id">
                <div class="form__group field">
                    <input value="<?php echo $product1['name'] ?>" type="text" name="name" class="form__field"
                        placeholder="Name of probuct" required="">
                    <label for="name" class="form__label">Name of product</label>   
                </div>
                <div class="number">
                    <label for="myRange" class="number__label">Price</label>
                    <input value="<?php echo $product1['price'] ?>" id="myRange" name="price" class="slider"
                        type="number">
                </div>
                <select name="category" id="category" class="category">
                    <option <?php if ($product1["category"] == "men") { ?> selected <?php } ?> value="men">Men</option>
                    <option <?php if ($product1["category"] == "women") { ?> selected <?php } ?> value="women">Women
                    </option>
                </select>
                <div>
                    <label class="custum-file-upload" for="file">
                        <div class="text">
                            <input name="old_image" type="hidden" value="<?php echo $product1["image"] ?>">
                            Click to upload image
                        </div>
                        <input type="file" id="file" name="file">
                    </label>
                </div>
                <div class="admin__btn">
                    <button class="btn">Edit</button>
                </div>
            </form>
        </div>
    </section>
    <?php require_once ('../../include/script.php') ?>
</body>

</html>