<?php

session_start();

require 'config.inc.php';
@include 'add_to_cart.php';
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="AG Store is an ecommerce website or an online based business that sells handmade items and diy items.">
    <meta name="keywords" content="agstore, handmade, diy, ecommerce, kabirdeula, bijinamaharjan, aayushamaharjan">

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
    <link rel="shortcut icon" href="./images/koselii.png" type="image/x-icon">

</head>

<body>

    <!-- <div class="fh5co-loader"></div> -->

    <div id="page" class="product-screen">
<?php @include 'nav.php'?>
        <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_8.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="display-t">
                            <div class="display-tc animate-box" data-animate-effect="fadeIn">
                                <h1>Shop</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <?php include './shop.php'; ?>

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
                        <p><small class="block">&copy; 2020 - <?php echo date("Y")?> Koseli. All Rights Reserved.</small></p>
                        <p>
                            <ul class="fh5co-social-icons">
                                <li><a href="https://www.instagram.com/koseli_nepal_/" target="_blank"><i class="icon-instagram"></i></a></li>
                            </ul>
                        </p>
                    </div>
                </div>

            </div>
        </footer>
        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
        </div>
    </div>
</body>

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
<!-- Products -->
<!-- <script defer src="js/products.js"></script> -->


</html>