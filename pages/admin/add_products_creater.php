<?php
require_once('../../include/db.php');
$name = $_REQUEST["name"];
$price = $_REQUEST["price"];
$category = $_REQUEST["category"];
$file = $_FILES["file"];
if($file){
    $fileName = $file["name"];
    $roat = "/img/".$fileName;
    $path = $_SERVER["DOCUMENT_ROOT"]."/img/".$fileName;
    move_uploaded_file($file["tmp_name"], $path); 
}
mysqli_query($esql, "INSERT INTO `goods` VALUES (NULL, '$name', '$price', '$category', '$roat')");
header("Refresh: 0.1; url = /pages/admin/add_products.php");
?>
