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
    require_once("../include/header.php")
        ?>
    <div class="exit"><a href="/index.php"><i class="fa-regular fa-circle-xmark"></i></a></div>
    <?php
    session_start();
    if (isset($_REQUEST["email"]) && isset($_REQUEST["password"])) {
        $email = htmlspecialchars($_REQUEST["email"]);
        $password = htmlspecialchars($_REQUEST["password"]);
        $password = md5($password);
        $common = mysqli_query($esql, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
        $resalt = $common->fetch_assoc();
        if (!empty($resalt)) {
            session_start();
            $_SESSION['id'] = $resalt['id'];
            $_SESSION['name'] = $resalt['name'];
            $_SESSION['email'] = $resalt['email'];
            $_SESSION['password'] = $resalt['password'];
            $_SESSION['auth'] = true;
            $_SESSION['admin'] = $resalt['admin'];
        }
    } else {
        ?>
        <form action="" class="containers">
            <div class="input-container">
                <div class="input-content">
                    <div class="input-dist">
                        <div class="input-type">
                            <input placeholder="Email" required="" type="email" class="input-is" name="email">
                            <input placeholder="Password" required="" type="password" class="input-is" name="password">
                            <button class="btn">Log in</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php
    }
    ?>

    <p class="qwe">if you aren't registered yet, <a href="/pages/sign_up.php">register now</a></p>

    <?php require_once('../include/script.php')?>
</body>

</html>