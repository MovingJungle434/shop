<?php
require_once("../include/db.php")
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("../include/head.php") ?>
</head>

<body>
    <?php
    require_once("../include/header.php")
        ?>
    <div class="exit"><a href="/index.php"><i class="fa-regular fa-circle-xmark"></i></a></div>
    <?php
    if (isset($_REQUEST["name"]) && isset($_REQUEST["email"]) && isset($_REQUEST["password"])) {
        $name = htmlspecialchars($_REQUEST["name"]);
        $email = htmlspecialchars($_REQUEST["email"]);
        $password = htmlspecialchars($_REQUEST["password"]);
        $password = md5($password);
        $common = mysqli_query($esql, "SELECT * FROM `users` WHERE `email` = '$email' ");
        $resalt = $common->fetch_assoc();
        if (empty($resalt)) {
            $new = mysqli_query($esql, "INSERT INTO `users` (name, email, password) VALUES ('$name', '$email', '$password')");
            ?>
            <p>registration was successful</p>
            <?php
        } else {
            ?>
            <p>try again</p>
            <?php
        }
    } else {
        ?>
        <form action="" method="POST" class="containers">
            <div class="input-container">
                <div class="input-content">
                    <div class="input-dist">
                        <div class="input-type">
                            <input placeholder="Name" required type="text" class="input-is" name="name">
                            <input placeholder="Email" required="" type="email" class="input-is" name="email">
                            <input placeholder="Password" required type="password" class="input-is" name="password">
                            <button class="btn" type="submit" formmethod="post">Sign up</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php
    }
    ?>
    <?php require_once('../include/script.php') ?>
</body>

</html>