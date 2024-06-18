<?php
require_once('../../include/db.php');

$name = $_REQUEST["name"];
$price = $_REQUEST["price"];
$category = $_REQUEST["category"];
$old_image = $_REQUEST["old_image"];
$file = $_FILES["file"];
$id = $_REQUEST["id"];

if ($file && is_uploaded_file($file["tmp_name"])) {
    $fileName = $file["name"];
    $roat = "/img/" . $fileName;
    $path = $_SERVER["DOCUMENT_ROOT"] . "/img/" . $fileName;

    if (move_uploaded_file($file["tmp_name"], $path)) {
    } else {
        echo "File upload failed.";
        exit;
    }
} else {
    $roat = $old_image;
}

$stmt = mysqli_prepare($esql, "UPDATE `goods` SET `name` = ?, `price` = ?, `category` = ?, `image` = ? WHERE `id` = ?");
mysqli_stmt_bind_param($stmt, "ssssi", $name, $price, $category, $roat, $id);

if (mysqli_stmt_execute($stmt)) {
    header("Refresh: 0.1; url=/pages/admin/products.php");
} else {
    echo "Database update failed.";
}

mysqli_stmt_close($stmt);
?>