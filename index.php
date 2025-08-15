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
    <title>Koseli - An Ecommerce Website for Handmade Goods.</title>
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
    <link rel="shortcut icon" href="./images/koselii.png" type="image/x-icon">
</head>

<body>

    <div class="fh5co-loader"></div>

    <div id="page">
        <?php @include './includes/nav.php' ?>
        <aside id="fh5co-hero" class="js-fullheight">
            <div class="flexslider js-fullheight">
                <ul class="slides">
                    <li style="background-image: url(images/products/product50.jpg);">
                        <div class="overlay-gradient"></div>
                        <div class="container">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <span class="price">Rs. 4000</span>
                                        <h2>7 Chakra Singing Bowl Set</h2>
                                        <p>For meditation and traditional ritual offerings.</p>
                                        

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(images/products/product35.jpg);">
                        <div class="overlay-gradient"></div>
                        <div class="container">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <span class="price">Rs. 550</span>
                                        <h2>Couple Bracelet</h2>
                                        <p>Bracelet for you and your loved one.<br>valentine offer</p>
                                        

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(images/products/product51.jpg);">
                        <div class="container">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <span class="price">Rs. 80</span>
                                        <h2>Keychains</h2>
                                        <p>Handmade with love.</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(images/products/product43.jpg);">
                        <div class="container">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <span class="price">Rs. 350</span>
                                        <h2>PICASSO JASPER BEADS MALA</h2>
                                        <p>For soothing energy, improving focus & greater spiritual knowledge.</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>

        <div id="fh5co-services" class="fh5co-bg-section" style="height: 450px">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 text-center">
                        <div class="feature-center animate-box" data-animate-effect="fadeIn">
                            <span class="icon">
                                <i class="icon-text-document"></i>
                            </span>
                            <h3>Login</h3>
                            <p>Login to enjoy your shopping.</p>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <div class="feature-center animate-box" data-animate-effect="fadeIn">
                            <span class="icon">
                                <i class="icon-warning"></i>
                            </span>
                            <h3>No Return</h3>
                            <p>Products that were bought can't be returned.<br>It can only be exchanged.</p>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <div class="feature-center animate-box" data-animate-effect="fadeIn">
                            <span class="icon">
                                <i class="icon-paper-plane"></i>
                            </span>
                            <h3>Free Delivery</h3>
                            <p>Get your product delivered for free with a minimum order of Rs. 1000.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include './shop.php'; ?>

        <div id="fh5co-testimonial" class="fh5co-bg-section">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <span>Testimony</span>
                        <h2>Happy Clients</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row animate-box">
                            <div class="owl-carousel owl-carousel-fullwidth">
                                <div class="item">
                                    <div class="testimony-slide active text-center">
                                        <figure>
                                            <img src="images/character/character1.jpg" alt="user">
                                        </figure>
                                        <span>Ram Bahadur, via <a href="https://www.instagram.com/"
                                                class="instagram">Instagram</a></span>
                                        <blockquote>
                                            <p>&ldquo;So proud of you. Keep going. Lots of Love.&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimony-slide active text-center">
                                        <figure>
                                            <img src="images/character/character2.jpg" alt="user">
                                        </figure>
                                        <span>Shyam Giri, via <a href="#" class="facebook">Facebook</a></span>
                                        <blockquote>
                                            <p>&ldquo;Good gesture got from online purchase. Keep up the good work. Will
                                                try to share everyone about your store.&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimony-slide active text-center">
                                        <figure>
                                            <img src="images/character/character3.jpg" alt="user">
                                        </figure>
                                        <span>Sita Shrestha, via <a href="#" class="instagram">Instagram</a></span>
                                        <blockquote>
                                            <p>&ldquo;Keep growing. Much Love.&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="fh5co-counter" class="fh5co-bg fh5co-counter" style="background-image:url(images/img_bg_5.jpg);">
            <div class="container">
                <div class="row">
                    <div class="display-t">
                        <div class="display-tc">
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
                                    <span class="icon">
                                        <i class="icon-instagram"></i>
                                    </span>

                                    <span class="counter js-counter" data-from="0" data-to="373" data-speed="5000"
                                        data-refresh-interval="50">1</span>
                                    <span class="counter-label">Followers</span>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
                                    <span class="icon">
                                        <i class="icon-shopping-cart"></i>
                                    </span>

                                    <span class="counter js-counter" data-from="0" data-to="60" data-speed="5000"
                                        data-refresh-interval="50">1</span>
                                    <span class="counter-label">Happy Clients</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
                                    <span class="icon">
                                        <i class="icon-shop"></i>
                                    </span>
                                    <span class="counter js-counter" data-from="0" data-to="150" data-speed="5000"
                                        data-refresh-interval="50">1</span>
                                    <span class="counter-label">All Products</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
                                    <span class="icon">
                                        <i class="icon-clock"></i>
                                    </span>

                                    <span class="counter js-counter" data-from="0" data-to="5605" data-speed="5000"
                                        data-refresh-interval="50">1</span>
                                    <span class="counter-label">Hours Spent</span>

                                </div>
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
                            <li><a href="https://www.instagram.com/koseli_nepal_/" target="_blank"><i
                                        class="icon-instagram"></i></a></li>
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
    <script defer src="./js/jquery.min.js"></script>

    <!-- jQuery Easing -->
    <script defer src="./js/jquery.easing.1.3.js"></script>

    <!-- Bootstrap -->
    <script defer src="./js/bootstrap.min.js"></script>

    <!-- Waypoints -->
    <script defer src="./js/jquery.waypoints.min.js"></script>

    <!-- Carousel -->
    <script defer src="./js/owl.carousel.min.js"></script>

    <!-- countTo -->
    <script defer src="./js/jquery.countTo.js"></script>

    <!-- Flexslider -->
    <script defer src="./js/jquery.flexslider-min.js"></script>

    <!-- Main -->
    <script defer src="./js/main.js"></script>

</body>

</html>