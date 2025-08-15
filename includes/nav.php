<nav class="fh5co-nav" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-2">
                <div id="fh5co-logo"><a href="index.php">Koseli</a></div>
            </div>
            <div class="col-md-6 col-xs-6 text-center menu-1">
                <ul>
                    <li><a href="index.php"><b>Home</b></a></li>
                    <li><a href="about.php"><b>About</b></a></li>
                    <li><a href="contact.php"><b>Contact</b></a></li>
                    <li><a href="product.php"><b>Shop</b></a></li>
                    <?php

                    if (isset($_SESSION['loggedIn'])) {
                        echo '<li>' . $_SESSION['userName'] . '</li>';
                        echo '<li><a href="logout.php">Log Out</a></li>';
                    } else {
                        echo '<li><a href="login.php">Login</a></li>';
                    } ?>
                </ul>
            </div>
            <div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
                <ul>
                    <form action="search.php" method="POST">
                        <li class="search">
                            <div class="input-group">
                                <input type="text" placeholder="Search.." name="search">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                </span>
                            </div>
                        </li>
                    </form>

                    <li class="shopping-cart"><a href="./viewCart.php"
                            class="cart"><span><small><?php echo (isset($_SESSION['cart'])) ? count($_SESSION['cart']) : 0; ?></small><i
                                    class="icon-shopping-cart"></i></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>