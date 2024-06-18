<?php
require_once('../../include/db.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("../../include/head.php") ?>
</head>

<body>
    <?php require_once("../../include/admin_header.php"); ?>
    <table border="1" class="admin__table">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>admin</th>
        </tr>
        <?php
        $users = mysqli_query($esql, "SELECT * FROM `users`");
        foreach ($users as $user) {
            ?>
            <tr>
                <td>
                    <?php echo $user['id'] ?>
                </td>
                <td>
                    <?php echo $user['name'] ?>
                </td>
                <td>
                    <?php echo $user['email'] ?>
                </td>
                <td>
                    <?php echo $user['admin'] ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>



<?php require_once('../../include/script.php')?>
</body>

</html>