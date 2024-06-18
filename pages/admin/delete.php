<?php 
require_once("../../include/db.php");
$id = $_REQUEST['id'];
mysqli_query($esql,"DELETE FROM `goods` WHERE `id` = '$id'");
header("Refresh: 0.1; url=products.php");
?>