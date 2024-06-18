<?php
require_once("../include/db.php");
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
    <section class="support">
        <div class="container">
            <h1>Support</h1>
            <form action="/pages/email.php" method="post">
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email">
                </div>
                <div>
                    <label for="message">Message</label>
                    <textarea name="message" id="message" placeholder="Enter your problem"></textarea>
                </div>
                <button class="btn">Send</button>
            </form>
        </div>
    </section>


    <?php require_once('../include/script.php') ?>
</body>

</html>