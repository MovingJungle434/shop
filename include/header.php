<header class="header_top_pk">
    <div class="container header_top">
        <div>
            <a href="/" class="logo">SHOP</a>
        </div>
        <nav class="nav">
            <a href="/?category=men" class="btn">Men</a>
            <a href="/?category=women" class="btn">Women</a>
            <a href="/pages/support.php" class="btn">Support</a>
        </nav>
        <?php
        session_start();
        if (isset($_SESSION['auth'])) {
            ?>
            <div class="i">
                <span>Hellow,
                    <?php echo $_SESSION['name'] ?>
                </span>
                <?php if ($_SESSION['admin'] == 1) {
                    ?>
                    <a href="../pages/admin.php"><i class="fa-solid fa-house"></i></a>
                    <?php
                } ?>
                <a href="/pages/cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
                <a href="/pages/log_out.php"><i class="fa-solid fa-trash"></i></a>
            </div>
            <?php
        } else {
            ?>
            <div class="i">
                <i class="fa-solid fa-cart-shopping"></i>
                <a href="/pages/log_in.php"><i class="fa-solid fa-right-to-bracket"></i></a>
            </div>
            <?php
        }
        ?>
    </div>
</header>
<header class="container header_top_mobile">
    <div class="prl">
    </div>

    <div class="div_logo">
        <a href="/" class="logo">SHOP</a>
    </div>
    
    <div class="cross">   
        <input type="checkbox" id="active">
        <label for="active" class="menu-btn"><span></span></label>
        <label for="active" class="close"></label>

        <div class="wrapper">
            <ul>
                <li> <a href="/?category=men" class="btn">Men</a></li>
                <li><a href="/?category=women" class="btn">Women</a></li>
                <li> <a href="/pages/support.php" class="btn">Support</a></li>
            </ul>
        </div>

    </div>
</header>