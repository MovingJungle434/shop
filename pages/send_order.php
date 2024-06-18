<?php
require_once("../include/db.php");
session_start();
$firstName = htmlspecialchars($_REQUEST["firstname"]);
$lastName = htmlspecialchars($_REQUEST["lastname"]);
$email = htmlspecialchars($_REQUEST["email"]);
$number = htmlspecialchars($_REQUEST["number"]);
$adress = htmlspecialchars($_REQUEST["adress"]);
$order = json_encode($_SESSION['shop_cart'], JSON_UNESCAPED_UNICODE);
mysqli_query($esql, "INSERT INTO `orders` VALUES (null, '$firstName', '$lastName', '$email', '$number', '$adress', '$order')");
unset($_SESSION['shop_cart']);
header('refresh: 0.1; url=/');
?>