<?php
session_start();

require_once "./config.inc.php";


if (isset($_POST["Checkout"])) {

    $cart = $_SESSION['cart'];

    header("Location: multiple_order_form.php");    
    $message = "Checkout successfull.";

}

if (isset($_POST["Remove"])) {

    foreach ($_SESSION['cart'] as $key => $value) {
        if (isset($value['productID']) && $value['productID'] === $_POST['productID']) {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            break;

        }
    }
}
if (isset($_POST["Buy_Now"])) {
    $productID = $_POST['productID'];
    $productName = $_POST['productName'];
    foreach ($_SESSION['cart'] as $key => $value) {
        if (isset($value['productID']) && $value['productID'] === $productID) {
            $quantity = $_SESSION['cart'][$key]['quantity'];
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            $message = "The order for $productName has been placed successfully";

            header("Location: order_form.php?productID=$productID&quantity=$quantity");
            exit();
        }
    }
}

if (isset($_POST["minusQuantity"])) {
    $productID = $_POST['productID'];


    foreach ($_SESSION['cart'] as $key => $item) {
        if (isset($item['productID']) && $item['productID'] === $productID) {

            $_SESSION['cart'][$key]['quantity'] -= 1;
            break;
        }
    }
}
if (isset($_POST["addQuantity"])) {
    $productID = $_POST['productID'];
    foreach ($_SESSION['cart'] as $key => $item) {
        if (isset($item['productID']) && $item['productID'] === $productID) {
            $_SESSION['cart'][$key]['quantity'] += 1;
            break;
        }
    }
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="AG Store is an ecommerce website or an online based business that sells handmade items and diy items." />
    <meta name="keywords" content="agstore, handmade, diy, ecommerce, kabirdeula, bijinamaharjan, aayushamaharjan" />

    <!-- Animate.css -->
    <link rel="stylesheet" href="./css/animate.css">

    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="./css/icomoon.css">

    <!-- Bootstrap  -->
    <link rel="stylesheet" href="./css/bootstrap.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="./css/flexslider.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Modernizr JS -->
    <script src="./js/modernizr-2.6.2.min.js"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./images/koselii.png">

</head>

<body>

    <div class="fh5co-loader"></div>

    <div id="page">
        <?php @include 'nav.php' ?>

        <div id="fh5co-about">
            <div class="container">
                <div class="about-content">
                    <div class="row">
                        <div class="col-md-8">

                            <?php
                            if (isset($message)) {
                                ?>
                                <h5> <?php echo $message ?></h5>
                            <?php } ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($_SESSION['cart'])) {
                                        // $productID = array_column($_SESSION['cart'], 'productID');
                                        // $productQuantity = array_column($_SESSION['cart'], 'quantity');
                                    
                                        $sql = "SELECT * FROM products";
                                        $result = $conn->query($sql);
                                        $j = 1;
                                        $totalPrice = 0;
                                        while ($row = $result->fetch_assoc()) {
                                            foreach ($_SESSION['cart'] as $key => $value) {

                                                if (isset($value['productID']) && $row['productID'] === $value['productID']) {
                                                    $totalPrice = $totalPrice + (int) $row['productPrice'];
                                                    ?>

                                                    <tr>
                                                        <form method="post">
                                                            <td><?php echo $j++; ?></td>
                                                            <td><?php echo $row['productName']; ?></td>
                                                            <td><?php echo $row['productPrice']; ?></td>
                                                            <td>

                                                                <button type="submit" class="icon-plus" name="addQuantity"></button>
                                                                <?php echo $value['quantity']; ?>
                                                                <button type="submit" class="icon-minus" name="minusQuantity"></button>
                                                            </td>
                                                            <td>


                                                                <input type="submit" value="Buy Now" name="Buy_Now">
                                               
                                                                <!-- <button name="Remove">Remove</button> -->
                                                                <input type="submit" value="Remove" name="Remove">
                                                                <input type="hidden" name='productID'
                                                                    value="<?php echo $row['productID']; ?>">
                                                                <input type="hidden" name='productName'
                                                                    value="<?php echo $row['productName']; ?>">
                                                                <!-- <?php echo $test, $testID; ?> -->
                                                            </td>
                                                        </form>

                                                    </tr>
                                                    <?php
                                                }
                                            }
                                        }
                                    }

                                    if (isset($_SESSION['cart'])) {
                                        ?>
                                    
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <form method="post">
                                                <input type="submit" value="Checkout" name="Checkout">
                                            </form>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                        </div>
                    <?php if (isset($_SESSION['cart'])) {
                        ?>
                                    
                        <div class="col-md-4">
                            <h1 class="h4 text-secondary">Total Price:</h1>
                            <p class="h2 price"><?php echo $totalPrice; ?></p>
                        </div>
<?php
                    }
                        ?>
                    </div>

                </div>
            </div>
        </div>

        <footer id="fh5co-footer" role="contentinfo">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-4 fh5co-widget">
                        <h3>Koseli.</h3>
                        <p></p>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <ul class="fh5co-footer-links">
                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="product.php">Shop</a></li>
                        </ul>
                    </div>
                </div>

                <div class="row copyright">
                    <div class="col-md-12 text-center">
                        <p><small class="block">&copy; 2020 - <?php echo date("Y") ?> Koseli. All Rights
                                Reserved.</small></p>
                        <p>
                        <ul class="fh5co-social-icons">
                            <li><a href="https://www.instagram.com/agstore315/"><i class="icon-instagram"></i></a></li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>

    <!-- jQuery -->
    <script defer src="js/jquery.min.js"></script>

    <!-- jQuery Easing -->
    <script defer src="js/jquery.easing.1.3.js"></script>

    <!-- Bootstrap -->
    <script defer src="js/bootstrap.min.js"></script>

    <!-- Waypoints -->
    <script defer src="js/jquery.waypoints.min.js"></script>

    <!-- Carousel -->
    <script defer src="js/owl.carousel.min.js"></script>

    <!-- countTo -->
    <script defer src="js/jquery.countTo.js"></script>

    <!-- Flexslider -->
    <script defer src="js/jquery.flexslider-min.js"></script>

    <!-- Main -->
    <script defer src="js/main.js"></script>

</body>

</html>