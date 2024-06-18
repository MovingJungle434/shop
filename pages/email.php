<?php 
require_once("../include/db.php");
$support_name = htmlspecialchars($_REQUEST['name']);
$support_email = htmlspecialchars($_REQUEST['email']);
$support_message = htmlspecialchars($_REQUEST['message']);
mail("griwathe@gmail.com", "Письмо с сайта", $support_message);
header("Refresh: 0.1; url=/");
?>
