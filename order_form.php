<?php
include './includes/functions.php';


$result = getById('products', 'productID', checkParamId('productID'));
$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : 1;
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
    <link rel="shortcut icon" href="./images/favicon.png">

</head>

<body>

    <div class="fh5co-loader"></div>

    <div id="page">
        <?php @include 'nav.php' ?>

        <!-- <?php  print($result['data']);?> -->
        <div class="payment">
            <h1 class="payment-heading">Payment Option</h1>
            <div class="about-product">
                <img src="./images/products/<?="{$result['data']['productPhoto']}"?>"  id="prodImg" />
                <div class="product-detail">
                    <p class="price">Product Name : <?= $result['data']['productName'] ?></p>
                    <p class="price">Price : Rs. <span id="price"><?= $result['data']['productPrice'] ?></span></span></p>
                </div>
            </div>
            <div class="payment-body">
                <form action="user_order_add.php?productID=<?= $result['data']['productID'] ?>" method="post"
                    class="payment-form">
                    
                    <div class="payment-inputfield">
                        <label for="quantity">Quantity:</label>
                        <input type="number" class="input" id="quantity" name="quantity" min="0"
                            value="<?= $quantity ?>" required>
                    </div>
                    <div class="payment-inputfield">
                        <label for="delivery">Delivery Method:</label>
                        <select id="payment" name="payment" required>
                            <option value="">Select a delivery method</option>
                            <option value="cashinhand">Cash-In-Hand</option>
                        </select>
                    </div>
                    <div class="payment-inputfield">
                        <label for="city">City:</label>
                        <input type="text" class="input" id="city" name="city"  required>
                        </select>
                    </div>
                    <div class="payment-inputfield">
                        <label for="province">Province:</label>
                        <input type="text" class="input" id="state" name="state"  required>
                        </select>
                    </div>
                    <div class="payment-inputfield address">
                        <label for="street-address">Street Address:</label>
                        <input type="text" class="input" id="street-address" name="street-address" 
                            required>
                    </div>
                    <div class="payment-inputfield">
                        <label for="postal-code">Postal Code:</label>
                        <input type="text" class="input" id="postal-code" name="postal-code"  required>
                    </div>
                    <input type="hidden" id="subtotal" name="subtotal" value="<?=$quantity* $result['data']['productPrice'] ?>">
                    <p id="sub-total">Subtotal: <?=$quantity* $result['data']['productPrice'] ?> </p>
                    <input type="submit" class="btn" value="Submit Order" name="order-purchase">
                </form>
       
            </div>
        </div> 
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