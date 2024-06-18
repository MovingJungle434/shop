<?php 
require_once("../include/db.php");
session_start();
session_destroy();
header("Refresh: 0.1; url=/");
?>


